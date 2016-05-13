@extends('../Template.index')

@section('contenu')

    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <h2 class="josefin-bold">La revue</h2>

                    <section class="col s8">

                        @foreach($revues as $revue)
                            <div class="card col s12">
                                <div class="card-image waves-effect waves-block waves-light col s4">
                                    <img class="activator margin-10" src="media/revue-01.jpg">
                                </div>
                                <div class="card-content col s8">
                                    <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                    <p>Fascicule: {{ $revue->fascicule }}, Tome: {{ $revue->tome }}, Année: {{ $revue->annee }}</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div class="card-action">
                                        <a href="#">AJOUTER AU PANIER</a>
                                        <a class="modal-trigger right" href="#revue{{ "$revue->id" }}">EN SAVOIR +</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </section>

                    @yield('revues')

                    <aside class="col s4">

                        <nav>
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field white">
                                        <input id="search" type="search" placeholder="Recherchez" required>
                                        <label for="search"><i class="material-icons grey-text text-darken-3">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>

                        <div class="margin-top-30">
                            <h5 class="josefin-bold">Options de tri</h5>
                        </div>

                        <form action="#">
                            <p>
                                <input name="group1" type="radio" id="test1" />
                                <label for="test1">Année 2016</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test2" />
                                <label for="test2">Année 2015</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test3" />
                                <label for="test3">Année 2014</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test4" />
                                <label for="test4">Année 2013</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test5" />
                                <label for="test5">Année 2012</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test6" />
                                <label for="test6">Année 2011</label>
                            </p>
                        </form>

                    </aside>

                    <div class="col s12">
                        {!! $revues->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection