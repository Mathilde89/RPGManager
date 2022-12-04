@extends('layouts.layout')
@section('createperso')
<link rel="stylesheet" href="{{asset('css/connexion.css')}}">
<div class="contain">


    <h2>Créer un personnage :</h2>

    @if (count($errors) > 0)
 
    <ul>
       @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
       @endforeach
    </ul>
    @endif
    <form action="{{ route('personnage.store')}}" method="POST">
       
    @csrf
        <div>
            <label for="name">Nom personnage:   </label>
            <input type="text" name="name" id="name">
        </div>
    <div>
        <label for="description">Description :  </label>
        <input type="text" name="description" id="description">

    </div>
 
    <div>
        <label for="spécialité-">Choissir la cagetorie </label>
    
                <select name="spécialité" id="spécialité">
                    <option value="">--Choissiez votre cagetorie--</option>
                    <option value="Guerrier">Guerrier</option>
                    <option value="Mage">Mage</option>
                    <option value="Druide">Druide</option>
                    <option value="Assassin">Assassin</option>
                    <option value="Berserker">Berserker</option>
                    <option value="Archer">Archer</option>
                </select>

    </div>
  
    <div>

        <label for="mag">Magie : </label>  
           <input type="text" id="competence" name="mag" value="" class="magie"  readonly/>
           <label for="for">Force : </label>  
        <input type="text" id="competence" name="for" value="" class="force" readonly />

    </div>
        <div>
            
    <label for="agi">Agilité : </label>
        <input type="text" id="competence" name="agi" value="" class="agilité" readonly/> 
        

    <label for="int">Intelligence :  </label>
        <input type="text" id="competence" name="int" value="" class="intelligence" readonly/>
    </div>

        

    
       
    <div>
        
        <label for="int">Point de vie  : </label>
        <input type="text" id="pv" name="pv" value="" class="pv" readonly />  
    </div>
    <button class="reset">Réinitialiser les stats</button>
        
    
    <input type="submit" value="Créer votre perso" name="submitPersonnage">
    </form>







</div>

    <script src="/js/main.js"></script>
@endsection