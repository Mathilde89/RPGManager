@extends('layouts.layout')

@section('connexion')
    
    <form action="" method="POST">
        @csrf
        <input type="mail" name="email" placeholder="Saisir votre email" id="">
        <input type="password" name="password" placeholder="Saisir votre mot de passe" id="">
        <input type="submit" name="submitconnexion" value="Se connecter">
    </form>
@endsection