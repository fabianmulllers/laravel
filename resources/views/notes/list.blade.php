@extends('layout')

@section('content')

    <h2>Notes</h2>

    <P>
        <a href="{{ url('notes/create') }}"> Add a note</a>
    </P>

    <ul>
        @foreach( $notes as $note)
            <li>
                @if(strlen($note->note)>50)
                    <strong>
                        {{ substr($note->note,0,50) }}...
                    </strong>
                @else
                    {{ $note->note }}
                @endif
            </li>
        @endforeach
    </ul>

    <form method="POST">
        {!!  csrf_field() !!}
                <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
        <textarea></textarea>
        <button type="submit"> Create note</button>
    </form>

@endsection