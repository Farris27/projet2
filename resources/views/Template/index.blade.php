<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>LAMBILLIONEA</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!--  Scripts-->
        <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('js/materialize.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
    </head>
    <body>

    <!-- JS -->
    <script>

        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();


            $('.modal-close').click(function(){
                $('.modal').closeModal();
                $('.lean-overlay').css({display:'none'});
            });
        });

    </script>



    <div class="bg-grass">
        <header class="navbar-fixed z-depth-2">

            <div id="header"></div>

            <!-- NAVIGATION -->
            <nav class="light-green darken-4" role="navigation">
                <div class="nav-wrapper container">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="left hide-on-med-and-down">
                        <li><a href="{{ route('detailAcceuil') }}" class="white-text">ACCUEIL</a></li>
                        <li><a href="{{ route('detailRevues') }}" class="white-text">LA REVUE</a></li>
                        <li><a href="{{ route('detailArticles') }}" class="white-text">PUBLIER UN ARTICLE</a></li>
                        <li><a href="{{ route('detailEvenement') }}" class="white-text">événements</a></li>
                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li class="light-green darken-3"><a href="#modal1" class="modal-trigger white-text"><img src="{{ asset('media/icons/fa-power.png') }}" style="margin-right: 10px">INSCRIPTION</a></li>
                        <li class="light-green darken-3" style="margin-left: 5px"><a href="{{ route('paniervue') }}" class="white-text"><img src="{{ asset('media/icons/fa-shopping-cart.png') }}" style="margin-right: 10px">MON PANIER</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="{{ route('detailAcceuil') }}">ACCUEIL</a></li>
                        <li><a href="{{ route('detailRevues') }}">LA REVUE</a></li>
                        <li><a href="{{ route('detailArticles') }}">PUBLIER UN ARTICLE</a></li>
                        <li><a href="{{ route('detailEvenement') }}">événements</a></li>
                        <li class="light-green darken-3"><a href="#modal0" class="modal-trigger white-text"><img src="{{ asset('media/icons/fa-power.png') }}" style="margin-right: 10px">CONNEXION</a></li>
                        <li class="light-green darken-3"><a href="{{ route('paniervue') }}" class="white-text"><img src="{{ asset('media/icons/fa-shopping-cart.png') }}" style="margin-right: 10px">MON PANIER</a></li>
                    </ul>

                </div>

            </nav>
            <!-- POPUP CONNEXION -->

            <div id="modal0" class="modal modal-fixed-footer">
                <div class="modal-content center">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="josefin-bold">CONNEXION</h4>
                            <p>Vous êtes déjà membre adhérent de Lambillionea?<br>Connectez vous sans plus attendre.</p>
                            <form>
                                <div class="row">
                                    <div class="input-field">
                                        <input id="job" type="text" class="validate">
                                        <label for="job">Votre pseudo</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Votre mot de passe</label>
                                    </div>
                                </div>
                            </form>
                            <p>Vous n'êtes pas encore membre adhérent ?<a href='#modal1' class='modal-trigger bleu'> INSCRIVEZ-VOUS</a></p>
                        </div>
                    </div>

                </div>
                <div class="modal-footer left">
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Envoyez</a>
                    <a href="{{ route('detailAcceuil') }}" class="modal-action modal-close waves-effect waves-green btn-flat left">Retour</a>
                </div>
            </div>

            <!-- POPUP INSCRIPTION -->

            <div id="modal1" class="modal modal-fixed-footer zindex1" >
                <div class="modal-content">
                    <div class="row">
                        <div class="col s6">
                            <h4 class="josefin-bold">DEVENIR MEMBRE</h4>
                            <p>Vous n'êtes pas encore membre de notre association et vous souhaitez en devenir adhérent ainsi que recevoir notre revue ?
                                <br><br>
                                Rien de plus simple, il vous suffit de complèter le formulaire ci-contre et de verser une cotisation annuelle de 55€ (pour la Belgique) ou de 65€ (résidant européen) ou de 75€ (pour le reste du monde).
                                <br><br>
                                En plus de recevoir notre newsletter et notre revue, cette côtisation vous offre la possibilité de soumettre vos propres articles pour une publication au sein de la revue.
                                <br><br>
                                Paiement par PayPal ou virement banquaire.
                            </p>

                        </div>

                        <div class="col s6">
                            <h4 class="josefin-bold">INSCRIPTION</h4>
                            <form method="POST" action="{{ action('EmailController@inscription') }}" accept-charset="UTF-8">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="first_name" id="first_name" type="text" class="validate" requiredZ>
                                        <label for="first_name">Votre prénom</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="last_name" id="last_name" type="text" class="validate" required>
                                        <label for="last_name">Votre nom</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="address" id="address" type="text" class="validate" required>
                                        <label for="address">Votre adresse postale</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="email" id="email" type="email" class="validate" required>
                                        <label for="email">Votre Email</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="pays" id="pays" type="text" class="validate" required>
                                        <label for="pays">Votre Pays</label>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input class="btn" type="submit">
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer left">
                    <a href="#modal4" class="modal-trigger modal-action waves-effect waves-green btn-flat">Je m'inscris</a>
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat left">Retour</a>
                </div>
            </div>

            <!-- FIN -->

            <!-- POPUP ARTICLE -->

            <div id="modal2" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="josefin-bold">PROPOSER UN ARTICLE</h4>
                            <p>Vous souhaitez soumettre un article pour une publication au sein de la revue ?
                                Rien de plus simple, enregistrez le sujet de votre article ainsi que votre nom
                                et joignez nous votre document au format WORD de préférence ou autre format éditable (.doc, .docx, .odt, .txt).
                                <br><br>
                                Au plaisir de vous lire.
                            </p>
                        </div>

                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="job" type="text" class="validate" required>
                                    <label for="job">Sujet de l'article</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate" required>
                                    <label for="password">Nom de l'auteur</label>
                                </div>
                            </div>
                            <div class="row">
                                <input type="file" name="article" required>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer left">
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Je propose</a>
                    <a href="{{ route('detailAcceuil') }}" class="modal-action modal-close waves-effect waves-green btn-flat left">Retour</a>
                </div>
            </div>

            <!-- FIN -->

            <!-- POPUP PAIEMENT -->

            <div id="modal4" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="josefin-bold">VOTRE COMMANDE</h4>
                        </div>
                        <div class="col s6">
                            <h5>Paiement PayPal</h5>
                            <p>Adresse Paypal : lambillionea@yahoo.fr
                                <br>Ajoutez 4.5 % exemple : pour 65 €, verser (65 *1.045 =) 67.9 €
                                <br>add 4.5 % example : for 65 €, pay (65 *1.045 =) 67.9 €</p>

                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="business" value="accounts@freelanceswitch.com">
                                <input type="hidden" name="item_name" value="Donation">
                                <input type="hidden" name="item_number" value="1">
                                <input type="hidden" name="amount" value="9.00">
                                <input type="hidden" name="no_shipping" value="0">
                                <input type="hidden" name="no_note" value="1">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="lc" value="AU">
                                <input type="hidden" name="bn" value="PP-BuyNowBF">
                                <input type="image" src="https://www.paypal.com/en_AU/i/btn/btn_buynow_LG.gif"  name="submit" alt="PayPal - The safer, easier way to pay online.">
                                <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <div class="col s6">
                            <h5>Paiement par virement</h5>
                            <p>Union des Entomologistes Belges / Lambillionea :
                                <br>57 rue Genot, B-4032, Chênée, Belgique
                                <br>Pour la Belgique :
                                <br>BE38 7925 8328 2472</p>

                            <div>
                                <p>Pour l'étranger
                                    <br>Utiliser codes SWIFT-BIC, IBAN
                                    <br>et/ou frais à charge du payeur
                                    <br>N° IBAN : BE38-7925-8328-2472</p>
                            </div>

                            <div>
                                <p>Foreign bank transfer
                                    <br>Use the SWIFT-BIC, IBAN codes
                                    <br>and/or charge for the buyer
                                    <br>SWIFT/BIC : GKCCBEBB</p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer left">
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Payez</a>
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat left">retour</a>
                </div>
            </div>

            <!-- FIN -->


            <!-- FIN -->
        </header>


        @yield('contenu')


        <footer class="page-footer grey darken-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="josefin-bold white-text">Lambillionea asbl</h5>
                        <p class="grey-text text-lighten-4">Fondée en 2010 par Thierry BOUYER, Jacques HECQ et Auguste FRANCOTTE.
                            <br>(anciennement "Société entomologique namuroise" créée à Namur en 1896)
                            <br>Siège : 57, rue GENOT, B - 4032 Chênée, Belgique .
                            <br><br>E-mail : <a href="#">lambillionea@hotmail.com</a></p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#">Link 1</a></li>
                            <li><a class="white-text" href="#">Link 2</a></li>
                            <li><a class="white-text" href="#">Link 3</a></li>
                            <li><a class="white-text" href="#">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#">Link 1</a></li>
                            <li><a class="white-text" href="#">Link 2</a></li>
                            <li><a class="white-text" href="#">Link 3</a></li>
                            <li><a class="white-text" href="#">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright grey darken-4">
                <div class="container">
                    Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                </div>
            </div>
        </footer>
    </div>
    </body>

</html>