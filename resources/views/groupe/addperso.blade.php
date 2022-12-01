@extends('layouts.layout')

@section('formaddperso')


{{-- Pour ajouter des personnages --}}
<form action=" {{ route('groupe.updategrouperso', $truc['id'])}}" method="POST">
    {{--  --}}
    @csrf
    @method('put')
    <label for="">Choisissez le personnage</label>
    
    <select name="perso" id="">
       <option value="">--Choissiez votre personnage--</option>
       @foreach ($listeperso as $key => $value)
       <option name="perso" value={{$value['id']}}>{{$value['name']}}</option>
       @endforeach
       
    </select>
    
    <input type="submit" value="Ajouter un personnage" name="submitaddperso" id="">
</form>

@endsection