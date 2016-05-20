@extends('layouts.app')

@section('content')
<form action="{{ route('evenementmodifier',$evenement->id) }}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div>  <label for="titre">Titre</label><input name="titre" id="titre" type="text"  value="{{$evenement->titre }}"  ></div>
    <div>   <label for="texte">Texte</label><textarea name="texte" > {{ $evenement->texte }} </textarea></div>
    <div>   <label for="datePublication">Date de l'événement</label><input name="datePublication" id="datePublication" type="date" placeholder="2016-02-20" value="{{ $evenement->datePublication }}">    </div>

    <input type="submit">
</form>
    @endsection