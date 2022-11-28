@extends('layouts.layout')
@if(session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif