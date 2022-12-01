@extends('layouts.layout')

@section('listallperso')
<h1>Liste des personnages</h1>
<h3>Filtre :</h3>



<form action=" {{ route('allperso.store')}}" method="POST">
        @csrf
    {{-- <input class="choix" type="submit" name="submitTriSpe" value="Guerrier">
    <input class="choix" type="submit" name="submitTriSpe" value="Mage">
    <input class="choix" type="submit" name="submitTriSpe" value="Druide">
    <input class="choix" type="submit" name="submitTriSpe" value="Assassin">
    <input class="choix" type="submit" name="submitTriSpe" value="Berserker">
    <input class="choix" type="submit" name="submitTriSpe" value="Archer">
    <input class="choix" type="submit" name="submitTriSpe" value="All"> --}}

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
</form>
<div>
    
</div>

{{-- <ul>
    <li><a href="groupe/create"> Créer un groupe</a></li>
    <li><a href="groupe/show"> Voir mes groupes</a></li>
</ul> --}}


@foreach($listallperso as $key => $value)
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


    <br> 

@endforeach


@if(session()->has('message'))
    <div>
        {{ session()->get('message') }}
    </div>
    @endif
@endsection