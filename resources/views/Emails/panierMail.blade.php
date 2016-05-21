<div class="z-depth-3">
    <div class="container">
        <div class="section">
            <div class="row">
                <h2>Le client :</h2>
               <p>{{ $clientRevue['nom'] }}</p>
                <p>{{ $clientRevue['prenom'] }}</p>
                <p>{{ $clientRevue['adresse'] }}</p>
                <p>{{ $clientRevue['code'] }}</p>
                    <p>{{ $clientRevue['tel'] }}</p>



                <h2 class="josefin-bold">Sa Commande</h2>


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

                            </div>
                        </div>
                    @endforeach


                </section>
                @if(session('status')) <h1>{{ session('status') }}</h1>
                @endif
                <aside class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Total   :</span>
                            <span class="prix-panier red-text">{{ number_format($total,2,',','') }}</span>
                        </div>

                    </div>

                </aside>

            </div>
        </div>
    </div>
</div>
