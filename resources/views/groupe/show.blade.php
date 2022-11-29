@extends('layouts.layout')

@section('listgroupe')
<h1>Vos groupes</h1>


@foreach($listgroupe as $key => $value)
    <h2>Nom du groupe : {{ $value['name'] }}</h2>
    <li>Description : {{ $value['detail'] }}</li>
    <li>Nombre de places : {{ $value['nbplace'] }}</li>

    {{-- Pour supprimer le groupe --}}
    <form action=" {{ route('groupe.destroy' , $value['id'])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer le groupe" name="submitdeletegroupe" id="">
    </form>

    {{-- Pour modifier le groupe --}}
    <form action="{{ route('groupe.edit' , $value['id'])}} " method="get">
        @csrf
        <input type="submit" value="Modifier le groupe" name="submitmodifygroupe" id="">
    </form>

    <br>

@endforeach



@endsection