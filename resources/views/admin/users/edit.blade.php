@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario: {{$user->first_name}}</div>

                    <div class="panel-body">

                        @include('admin.users.partials.messages')

                        {{ Form:: model($user,['route' => ['admin.users.update',$user->id],'method' => 'PUT' ] ) }}

                        @include('admin.users.partials.fields')
                        <button type="submit" class="btn btn-warning">Actualizar usuario</button>
                        {{Form::close()}}
                    </div>
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
@endsection
