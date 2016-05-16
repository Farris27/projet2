@extends('../Template.index')

@section('contenu')

    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <h2 class="josefin-bold">Mon panier</h2>

                    <section class="col s8">
                        @foreach($cart as $c)

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-04.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXV,{{$c->annee}},Tome N°{{$c->tome}},Fascicule N°{{$c->fascicule}}</p>
                                <span class="card-price grey-text text-lighten-1">{{ number_format(50 * $c->quantity,2,',','') }}€</span>
                                <div class="card-action">
                                    <a href="{{ route('panierdel',$c->id) }}" class="delete">RETIRER AU PANIER</a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </section>

                    <aside class="col s4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Sous-total  :</span>
                                <span class="prix-panier red-text">{{ number_format($total,2,',','') }}</span>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('detailRevues') }}" class="modal-trigger">Continuer la commande</a>
                                <a href="{{ route('payment') }}" class="modal-trigger">Passez la commande</a>

                            </div>
                        </div>

                    </aside>

                </div>
            </div>
        </div>
    </div>

@endsection