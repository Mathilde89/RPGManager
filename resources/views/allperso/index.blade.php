@extends('layouts.layout')

@section('listallperso')
<link rel="stylesheet" href="{{asset('css/allperso.css')}}">





<div class="formulaire">

    <form action=" {{ route('allperso.store')}}" method="POST">
        <h3>Filtre :</h3>
        @csrf
        
        {{-- TRI par spécialité --}}
        <select name="submitTriSpe" id="">
            <option value="">Spécialité</option>
            
            <option name="submitTriSpe" value=Guerrier>Guerrier</option>
            <option name="submitTriSpe" value=Mage>Mage</option>
            <option name="submitTriSpe" value=Druide>Druide</option>
            <option name="submitTriSpe" value=Assassin>Assassin</option>
            <option name="submitTriSpe" value=Berserker>Berserker</option>
            <option name="submitTriSpe" value=Archer>Archer</option>
            
        </select>
        
        
        {{-- TRI par joueur --}}
        <select name="submitTriJoueur" id="">
            <option value="">Joueur</option>
            @foreach ($listalljoueur as $key2 => $value2)
            <option name="submitTriJoueur" value={{$value2['id']}}>{{$value2['pseudo']}}</option>
            @endforeach
        </select>
        <input type="text" name="submitTriNom" placeholder="Saisir le nom du personnage">
        <input type="submit" value="Filtrer"> 
        
        @if(!empty($message))
         <div > {{ $message }}</div>
         @endif
</form>

</div>
<h1>Liste des personnages</h1>
<div class="contain">
    
    
    @foreach($listallperso as $key => $value)
    <div class="perso">
        <h2>Nom du personnage : {{ $value['name'] }}</h2>
        <h3>Informations :</h3>
        <p>Description : {{ $value['description'] }}</p>
        <p>Spécialité : {{ $value['spécialité'] }}</p>
        <p>Compétences :</p>
    <div>
        <p>Magie : {{ $value['mag'] }}</p>
        <p>Force : {{ $value['for'] }}</p>
        <p>Agilité : {{ $value['agi'] }}</p>
        <p>Intelligente : {{ $value['int'] }}</p>
        <p>Points de vie: {{ $value['pv'] }}</p>
    </div>
    
    
</div>
@endforeach

</div>


@endsection