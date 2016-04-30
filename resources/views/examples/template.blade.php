@extends('examples.layout')


@section('title')
    curso jose jose

    @stop
@section('content')
<h1> este es mi views</h1>

 @if (isset($user))
 <p> hola mi nombre es {{$user}}</p>

@else

[login]

@endif


    {{'tengo hambre'}}
@stop