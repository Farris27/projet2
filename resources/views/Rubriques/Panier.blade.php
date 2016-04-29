@extends('../Template.index')

@section('contenu')

    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <h2 class="josefin-bold">Mon panier</h2>

                    <section class="col s8">

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-04.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXV, 115ème année, N°3, Octobre 2015</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#" class="delete">RETIRER AU PANIER</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col s12 right">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-06.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXIV, 114ème année, N° 2, Septembre 2014</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#" class="delete">RETIRER AU PANIER</a>
                                </div>
                            </div>
                        </div>

                    </section>

                    <aside class="col s4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Sous-total (2articles) :</span>
                                <span class="prix-panier red-text">100€</span>
                            </div>
                            <div class="card-action">
                                <a href="#modal4" class="modal-trigger">Passez la commande</a>
                                <a href="#modal0" class="modal-trigger">Connectez-vous</a>
                            </div>
                        </div>

                    </aside>

                </div>
            </div>
        </div>
    </div>

@endsection