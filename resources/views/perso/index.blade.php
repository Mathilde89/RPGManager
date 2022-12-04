@extends('layouts.layout')

@section('listperso')
<link rel="stylesheet" href="{{asset('css/groupeindex.css')}}">
<div class="contain">

    <div class="action">
        
        
        <ul>
            <li><a href="personnage/create"> Créer un personnage</a></li>
            
        </ul>
    </div>
    
    <h1>Liste des personnages :</h1>
    
    @foreach($listperso as $key => $value)
    <div class="groupe">

        <h2>Nom du personnage : {{ $value['name'] }}</h2>
        <li>Description : {{ $value['description'] }}</li>
        <li>Spécialité: {{ $value['spécialité'] }}</li>
        <li>Magie: {{ $value['mag'] }}</li>
        <li>Force: {{ $value['spécialité'] }}</li>
        <li>Intelligence: {{ $value['int'] }}</li>
        <li>Agilité: {{ $value['agi'] }}</li>
        <li>PV: {{ $value['pv'] }}</li>
    </div>
    
    
    @endforeach
    
    
@if(session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif
</div>
@endsection