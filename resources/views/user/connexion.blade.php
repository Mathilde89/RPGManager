@extends('layouts.layout')

@section('connexion')
    
    <form action="{{ route('user.connexion')}}" method="POST">
                @csrf
        <input type="mail" name="email" placeholder="Saisir votre email" id="">
        <input type="password" name="password" placeholder="Saisir votre mot de passe" id="">
        <input type="submit" name="submitconnexion" value="Se connecter">
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
    @endif

    @if(session()->has('message'))
    <div>
        {{ session()->get('message') }}
    </div>
    @endif
@endsection