@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>@elseif(session('status')) <h1>{{ session('status') }}</h1>
    @endif

    <form action="{{ route('adminliste') }}" method="post">
    {{csrf_field()}}
      <div>  <label for="titre">Titre</label><input name="titre" id="titre" type="text"  value="{{ old('titre') }}"  ></div>
     <div>   <label for="texte">Texte</label><textarea name="texte" > {{ old('texte') }} </textarea></div>
        <div>   <label for="datePublication">Date de l'événement</label><input name="datePublication" id="datePublication" type="date" placeholder="2016-02-20" >   {{ old('datePublication') }} </div>

        <input type="submit">
    </form>
@foreach($evenements as $evenement)
    <li> <h1>{{ $evenement->titre }}</h1>
        <p>{{ $evenement->texte }}</p>
        <p>{{ $evenement->datePublication }}</p>
        <img src="{{ asset($evenement->image) }}"  alt="{{ $evenement->image }}"/>
        <a href="{{route('evenementmodif',$evenement->id)}}">Modifier</a> </li>
@endforeach
    @endsection