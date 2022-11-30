@extends('layouts.layout')

@section('listgroupe')
<h1>Vos groupes</h1>


@foreach($listgroupe as $key => $value)
    <h2>Nom du groupe : {{ $value['name'] }}</h2>
    <li>Description : {{ $value['detail'] }}</li>
    <li>Nombre de places : {{ $value['nbplace'] }}</li>
    
    <form action=" {{ route('groupe.destroy' , $value['id'])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer le groupe" name="submitdeletegroupe" id="">
    </form>

    <form action="{{ route('groupe.edit' , $value['id'])}} " method="get">
        {{-- {{ route('groupe.delete' , $value['id'])}} --}}
        @csrf
        <input type="submit" value="Modifier le groupe" name="submitmodifygroupe" id="">
    </form>
    <br>

@endforeach



@endsection