@extends('layouts.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Modifier votre personnage</h2>
    @if (count($errors) > 0)
 
    <ul>
       @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
       @endforeach
    </ul>
    @endif
    <form action="{{ route('personnage.store')}}" method="PUT">
       
    @csrf
    @method('PUT')

    <label for="name">nom personnage:
        <input type="text" name="name" id="name">
    </label>

    <label for="description">Description :
        <input type="text" name="description" id="description">
    </label>

        <label for="spécialité-">Choissiez de cagetorie

            <select name="spécialité" id="spécialité">
                <option value="">--Choissiez votre cagetorie--</option>
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berserker">Berserker</option>
                <option value="Archer">Archer</option>
            </select>

        </label>

        <label for="mag">magie : 
        <input type="text" id="mag" name="mag" value="" class="magie"  readonly/>
        </label>  

        <label for="for">force : 
        <input type="text" id="for" name="for" value="" class="force" readonly />
        </label>  

        <label for="agi">agilité : 
        <input type="text" id="agi" name="agi" value="" class="agilité" readonly/> 
        </label>

        <label for="int">intelligence : 
        <input type="text" id="int" name="int" value="" class="intelligence" readonly/>
        </label>

        <label for="int">point de vie  : 
        <input type="text" id="pv" name="pv" value="" class="pv" readonly />  
        </label>

        <input type="submit" value="Crée Votre perso" name="submitPersonnage">

    </form>
    <button class="reset">réinitialiser stats</button>








    <script src="/js/main.js"></script>
    
</body>
</html>