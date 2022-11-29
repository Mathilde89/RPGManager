@extends('layouts.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($perso as $key => $value)
    <li>
        Nom du perso : {{$value['name']}}
    </li>

    <li>
        Déscription :{{$value['description']}}
        
    </li>
    <li>
       Spécialité :  {{$value['spécialité']}}
    </li>
    <li>
        Magie : {{$value['mag']}}
    </li>
    <li>
        Force : {{$value['for']}}
    </li>
    <li>
       Agilité : {{$value['agi']}}
    </li>
    <li>
        Inteligence :{{$value['int']}}
    </li>
    <li>
        Point de vie :{{$value['pv']}}
    </li>
        {{-- {{$value['description']}}
        {{$value['name']}}
        {{$value['name']}}
        {{$value['name']}}
        {{$value['name']}}
        {{$value['name']}} --}}
        <br>
    @endforeach
    </ul>
    
</body>
</html>
