@extends('layouts.layout')
@section('editgroupe')
<h1>Modifier le groupe</h1>

   {{-- Pour modifier les informations du groupe --}}
   <form action="{{ route('groupe.update', $truc['id'])}}" method="POST">
      @csrf
      @method('put')
         <label for="">Nom du groupe : </label>
         <input type="text" value={{$truc['name']}} name="groupename" placeholder="Saisir le nom de votre groupe" id="">
         <label for="">Description : </label>
         <input type="text" value={{$truc['detail']}} name="groupedescription" placeholder="Saisir la description" id="">
         <label for="">Nombre de places :</label>
         <input type="number" value={{$truc['nbplace']}} name="groupenumberplace" placeholder="Saisir le nombres de places">
         <input type="submit" name="submitmodifygroupe" value="Modifier le groupe">
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