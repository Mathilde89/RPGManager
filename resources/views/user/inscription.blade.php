@extends('layouts.layout')

@section('inscription')
    
    <form action="{{ route('user.inscription')}}" method="POST">
        @csrf
        <input type="text" name="firstname" placeholder="Saisir votre prénom" id="">
        <input type="text" name="lastname" placeholder="Saisir votre nom" id="">
        <input type="mail" name="email" placeholder="Saisir votre email" id="">
        <input type="text" name="pseudo" placeholder="Saisir votre pseudo" id="">
        <input type="password" name="password" placeholder="Saisir votre mot de passe" id="">
        <input type="submit" name="submitinsciption" value="S'inscrire">
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