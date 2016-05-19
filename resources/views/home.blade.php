@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p> Bienvenu sur notre backoffice!</p>
                    <a href="{{ url('/admin/liste') }}">Gestion des événements</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
