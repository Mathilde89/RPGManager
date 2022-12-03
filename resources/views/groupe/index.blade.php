@extends('layouts.layout')

@section('listgroupe')
<link rel="stylesheet" href="{{asset('css/groupeindex.css')}}">
<div class="contain">

    <div class="action">
        
        
        <ul>
            <li><a href="groupe/create"> Créer un groupe</a></li>
            <li><a href="groupe/show"> Voir mes groupes</a></li>
        </ul>
    </div>
    
    <h1>Liste des groupes :</h1>
    
    @foreach($listgroupe as $key => $value)
    <div class="groupe">

        <h2>Nom du groupe : {{ $value['name'] }}</h2>
        <li>Description : {{ $value['detail'] }}</li>
        <li>Nombre de places : {{ $value['nbplace'] }}</li>
    </div>
    
    
    @endforeach
    
    
@if(session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif
</div>
@endsection