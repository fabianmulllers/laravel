@extends('layout')

@section('content')


    <h1>Creating a note</h1>

    @include('errors/errores')
    <form method="POST" action="{{ url('notes') }}">

        {!! csrf_field() !!}


        <textarea name ="note">
        {{old('note')}}
        </textarea>

        <button type="submit" name="create">Create note</button>
    </form>
    @endsection