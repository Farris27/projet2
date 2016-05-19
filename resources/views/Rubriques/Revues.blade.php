@extends('../Template.index')

@section('contenu')

    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <h2 class="josefin-bold">La revue</h2>

                    <section class="col s8">

                        @if(!empty($results))
                            <a class="card col s5 center-align" href="{{ route('detailRevues') }}"><span class="card-title">Revenir aux revue</span></a><br/><br/><br/>
                            <h5>Recherche :</h5><br/>
                            @foreach($results as $result)
                                <p class="card col s12">Titre de l'article : {{ $result->titre }}</p>
                            @endforeach
                        @else
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
                                            <a href="{{route('panieradd',$revue->id)}}">AJOUTER AU PANIER</a>
                                            <a class="modal-trigger right" href="#revue{{ "$revue->id" }}">EN SAVOIR +</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </section>

                    @yield('revues')

                    <aside class="col s4">

                        <nav>
                            <div class="nav-wrapper">
                                <form method="POST" action="{{ action('RechercheController@recherche') }}" accept-charset="UTF-8">
                                    <div class="input-field white">
                                        <input name="search" id="search" type="search" placeholder="Recherchez" required>
                                        <label for="search"><i class="material-icons grey-text text-darken-3">search</i></label>
                                        <i class="material-icons">close</i>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    </div>
                                </form>
                            </div>
                        </nav>

                        <div class="margin-top-30">
                            <h5 class="josefin-bold">Options de tri</h5>
                        </div>

                        <form  method="POST" action="{{ action('RechercheController@recherche') }}">
                            <p>
                                <input name="annee" type="radio" id="test1" value="2016" />
                                <label for="test1">Année 2016</label>
                            </p>
                            <p>
                                <input name="annee" type="radio" id="test2" value="2015" />
                                <label for="test2">Année 2015</label>
                            </p>
                            <p>
                                <input name="annee" type="radio" id="test3" value="2014" />
                                <label for="test3">Année 2014</label>
                            </p>
                            <p>
                                <input name="annee" type="radio" id="test4" value="2013" />
                                <label for="test4">Année 2013</label>
                            </p>
                            <p>
                                <input name="annee" type="radio" id="test5" value="2012" />
                                <label for="test5">Année 2012</label>
                            </p>
                            <p>
                                <input name="annee" type="radio" id="test6" value="2011" />
                                <label for="test6">Année 2011</label>
                            </p>
                        </form>

                    </aside>
                @if(empty($results))
                    <div class="col s12">
                        {!! $revues->links() !!}
                    </div>
                @else
                    <div class="col s12">
                        {!! $results->links() !!}
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

@endsection