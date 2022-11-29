@extends('layouts.layout')

@section('groupe')
    <h1>Créer un groupe</h1>
    <form action="{{ route('groupe.store')}}" method="POST">
        
         @csrf
        <input type="text" name="groupename" placeholder="Saisir le nom de votre groupe" id="">
        <input type="text" name="groupedescription" placeholder="Saisir la description" id="">
        <input type="number" name="groupenumberplace" placeholder="Saisir le nombres de places">
        <input type="submit" name="submitgroupe" value="Créer le groupe">
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