@extends('../Rubriques.Revues')


@if(empty($results))
    @section('revues')
        <!-- Modal Structure -->

        @foreach($revues as $revue)

            <div id="revue{{ "$revue->id" }}" class="modal bottom-sheet">
                <div class="modal-content">
                    <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : Fascicule: {{ $revue->fascicule }}, Tome: {{ $revue->tome }}, Année: {{ $revue->annee }}<i class="modal-action modal-close material-icons right">close</i></span>
                    <div class="border-right col s3 center">
                        <div class="col s12">
                            <img src="{{ asset('media/revue-01.jpg') }}" alt="couverture" >
                        </div>
                        <div class="col s12">
                            <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                            <p> Fascicule: {{ $revue->fascicule }},Tome: {{ $revue->tome }}, Année: {{ $revue->annee }}</p>
                            <span class="card-price grey-text text-lighten-1">50€</span>
                            <div>
                                <a href="#">AJOUTER AU PANIER</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s9">

                        @foreach($revue->listeArticles as $article)

                            <p>{{$article->auteur}} , {{ $article->titre}} , {{ $article->pays}} : {{ $article->numeroPage}} {{ $article->id }} </p>

                        @endforeach
                    </div>
                </div>

                <div class="footer-bottom-sheet col s12 grey darken-4">
                    <div class="white-text">
                        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                    </div>
                </div>
            </div>

        @endforeach
    @endsection
@endif