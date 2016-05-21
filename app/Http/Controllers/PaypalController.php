<?php
namespace App\Http\Controllers;
use App\Revue_Panier;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Carbon\Carbon;
use DateTime;
use App\Panier;
use Mail;

class PaypalController extends BaseController
{
    /**
     * déclare une variable
     * @var ApiContext
     */
    private $_api_context;

    /**
     * permet l'authentification et la liaison a notre code client
     * PaypalController constructor.
     */
    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /**
     * realise la fonction payement de paypal
     * @return mixed
     */
    public function postPayment()
    {
        // crée un objet panier
        $payer = new Payer();
        $payer->setPaymentMethod('paypal'); // hydrate l'objet panier
        $items = array();
        $subtotal = 0;
        $cart = \Session::get('cart');// va chercher la session cart qui contient les éléments de notre panier
        $currency = 'EUR'; // Variable qui permet de savoir quelle est notre  monnaie utilisée.
        //Hydrate l'objet
        foreach($cart as $producto){
            $item = new Item();
            $item->setName($producto->nom)
                ->setCurrency($currency)
                ->setDescription('Revue du site lambillonea')
                ->setQuantity($producto->quantity)
                ->setPrice(50);
            $items[] = $item;
            $subtotal += $producto->quantity * 50;
        }
        // met nos éléments dans une liste paypal qui s'affichera
        $item_list = new ItemList();
        $item_list->setItems($items); // hydrate l'objet
        $details = new Details();
        $details->setSubtotal($subtotal)
            ->setShipping(100); // rajouter un frais de port
        $total = $subtotal + 100; // calcule le total
        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Achat de revue envers le sites Lambillonea');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Oups une erreur vient de se produire ');
            }
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }
        return \Redirect::route('detailAcceuil')
            ->with('status', 'Oups une erreur vient de se produite');
    }
    public function getPaymentStatus()
    {
        // prend le payment_id de la session puis l'efface
        $payment_id = \Session::get('paypal_payment_id');
        // clear the session payment ID
        \Session::forget('paypal_payment_id');
        $payerId = \Input::get('PayerID');
        $token = \Input::get('token');
        //if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
        if (empty($payerId) || empty($token)) {
            return \Redirect::route('paniervue')
                ->with('status', 'La commande a été annulé');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(\Input::get('PayerID'));
        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
        if ($result->getState() == 'approved') {
            //fabrique le panier , l'efface une fois que le payement a été approuve puis envoie un mail avec les détails du panier
            $subtotal = 0;
            $cart = \Session::get('cart');
            $currency = 'EUR';
            foreach($cart as $producto){
                $item = new Item();
                $item->setName($producto->nom)
                    ->setCurrency($currency)
                    ->setDescription('Revue du site lambillonea')
                    ->setQuantity($producto->quantity)
                    ->setPrice(50);
                $items[] = $item;
                $subtotal += $producto->quantity * 50;
            }
            $details = new Details();
            $details->setSubtotal($subtotal)
                ->setShipping(100);
            $total = $subtotal + 100;
            $this->envoiMail($total);
            $this->saveOrder(\Session::get('cart'));
            \Session::forget('cart');
            return \Redirect::route('paniervue')
                ->with('status', 'le payemenent a  été fait ');
        }
        return \Redirect::route('paniervue')
            ->with('status', 'La commande a été annulé');
    }

    /**
     * fonction qui fait la sauvegarde de notre commande
     * @param $cart
     */
    private function saveOrder($cart)
    {
        $subtotal = 0;
        foreach($cart as $item){
            $subtotal += 50 * $item->quantity;
        }

        $now = new DateTime();
       $panier = Panier::create([
            'dateCreation' => $now,
            'valide' => 0,
            'paye' => 0

        ]);

        foreach($cart as $item){
            $this->saveOrderItem($item, $panier->id);
        }

    }

    /**
     * fonction qui envoie le mail en récupérant les sessions du panier et du formulaire
     * @param $total
     */
    private function envoiMail($total){

        $total =$total;
        $clientRevue =\Session::get('clientRevue');
      $cart  = \Session::get('cart');
        Mail::send('Emails.panierMail',compact('cart','total','clientRevue') , function ($message){

            $message->subject('Panier');
            $message->to('benfarris40@gmail.com');

        });
    }

    /**
     * fonction qui envoye un mail avec une inscription
     */
    private function envoiInscription(){

        $abo =\Session::get('abo');
        Mail::send('Emails.inscription',compact('abo'), function ($message){

            $message->subject('Abonnement');
            $message->to('benfarris40@gmail.com');

        });
    }

    /**
     * inscrit dans la table de liaison notre commande
     * @param $item
     * @param $panier_id
     */
    private function saveOrderItem($item,$panier_id)
    {
        Revue_Panier::create([
            'prixHTVA'=> $item->quantity * 50,
            'quantite'=>$item->quantity,
            'revueID' =>$item->id,
            'panierID' => $panier_id

        ]);
    }
    /* * Paiement de  l'abonnement à la revue */

    public function postPaymentAbo($prix){
        $payer = new Payer();
        $payer->setPaymentMethod('paypal'); //Avec cette méthode on va configurer le type de paiement qui sera de type paypal

        $item1 = new Item();
        $item1->setName('Notre abonnement')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice($prix);

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $details = new Details();
        $details->setShipping(0)
            ->setSubtotal($prix);

        $amount = new Amount();
        $amount->setCurrency("EUR")
            ->setTotal($prix)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());


        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.abo.status'))
            ->setCancelUrl(\URL::route('payment.abo.status'));


        $payment = new Payment();
        $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));


        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Oups! Il y a eu un souci');
            }
        }


        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }
        return \Redirect::route('detailAcceuil') //redirection vers la page d'accueil avec un message d'erreur
        ->with('status', 'Oups! Erreur inconnue.');

    }


    //Cette méthode concerne la réponse de Paypal

    public function getPaymentAboStatus(){
        // Get the payment ID before session clear
        $payment_id = \Session::get('paypal_payment_id');
        // clear the session payment ID
        \Session::forget('paypal_payment_id');
        $payerId = \Request::get('PayerID');
        $token = \Request::get('token');
        //if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
        if (empty($payerId) || empty($token)) {
            return \Redirect::route('accueil')
                ->with('message', 'Il y a eu un problème lors du paiement avec Paypal');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(\Request::get('PayerID'));
        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
        if ($result->getState() == 'approved') {
            $this->envoiInscription();
            \Session::forget('abo');
            return \Redirect::route('detailAcceuil')
                ->with('status', ' Félicitations vous êtes désormais abonné à notre revue.');
        }
        return \Redirect::route('detailAcceuil')
            ->with('status', 'La transaction a été annulée');
    }


}
