@extends('../Template.index')

@section('contenu')

    <form action="{{ route('traitementformu') }}" method="post" class="card-panel">
        {{csrf_field()}}

        <div>  <label for="nom">Nom :</label><input name="nom" id="nom" type="text"  ></div>
        <div>  <label for="prenom">Prenom :</label><input name="prenom" id="prenom" type="text"  ></div>
        <div>   <label for="adresse">Adresse :</label><textarea name="adresse" >  </textarea></div>
        <div>  <label for="code">Code Postale :</label><input name="code" id="code" type="text"  ></div>
        <div>  <label for="tel">Téléphone :</label><input name="tel" id="tel" type="text"  ></div>

        <input class="btn" type="submit">
    </form>

@endsection