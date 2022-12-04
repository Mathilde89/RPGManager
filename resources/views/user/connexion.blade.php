@extends('layouts.layout')

@section('connexion')
<link rel="stylesheet" href="{{asset('css/connexion.css')}}">
   <div class="contain">
       <form action="{{ route('user.connexion')}}" method="POST">
        @csrf
        <input type="mail" name="email" placeholder="Saisir votre email" id="">
        <input type="password" name="password" placeholder="Saisir votre mot de passe" id="">
        <input type="submit" name="submitconnexion" value="Se connecter">
    </form>
    
    @if(session()->has('message'))
    <div class="message">
        {{ session()->get('message') }}
    </div>
    @endif
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
    @endif
    
   
</div> 
@endsection