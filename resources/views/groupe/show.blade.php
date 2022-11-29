@extends('layouts.layout')

@section('listgroupe')
<link rel="stylesheet" href="{{asset('css/groupe.css')}}">
<section class="showgroupe">
<h1>Vos groupes</h1>

@foreach($listgroupe as $key => $value)
<section class="card">
        <h2>Nom du groupe : {{ $value['name'] }}</h2>
        <li>Description : {{ $value['detail'] }}</li>
        <li>Nombre de places : {{ $value['nbplace'] }}</li>
        <h3>Les personnages du groupe</h3>
        @foreach($listperso as $key => $item)
        
                @if( $value['id'] == $item['group_id'] )
                <li>{{ $item['name'] }}</li>
                
                @endif

        @endforeach

        {{-- Pour supprimer le groupe --}}
        <form action=" {{ route('groupe.destroy' , $value['id'])}}" method="post">
            @csrf
            @method('delete')
            <input class="delete" type="submit" value="Supprimer le groupe" name="submitdeletegroupe" id="">
        </form>

        {{-- Pour modifier le groupe --}}
        <form action="{{ route('groupe.edit' , $value['id'])}} " method="get">
            @csrf
            <input class="modif" type="submit" value="Modifier le groupe" name="submitmodifygroupe" id="">
        </form>

        {{-- Pour ajouter des personnages --}}
        <form action="{{ route('groupe.addperso', $value['id'])}} " method="get">
            @csrf
            <input class="add" type="submit" value="Ajouter des personnages" name="submitaddgroupe" id="">
        </form>

        <br>
    </section>

    @endforeach



@endsection

</section>