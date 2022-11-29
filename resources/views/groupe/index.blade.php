@extends('layouts.layout')

@section('listgroupe')
<h1>Liste des groupes</h1>

<ul>
    <li><a href="groupe/create"> Créer un groupe</a></li>
    <li><a href="groupe/show"> Voir mes groupes</a></li>
</ul>


@foreach($listgroupe as $key => $value)
    <h2>Nom du groupe : {{ $value['name'] }}</h2>
    <li>Description : {{ $value['detail'] }}</li>
    <li>Nombre de places : {{ $value['nbplace'] }}</li>

    <br>

@endforeach



@endsection