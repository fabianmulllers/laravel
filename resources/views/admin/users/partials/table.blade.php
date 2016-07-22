<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>nombre</th>
        <th>email</th>
        <th>acciones</th>
    </tr>
    @foreach($users as $user)
        <tr data-id="{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td> {{ $user->fullname }}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('admin.users.edit',$user->id)}}">Editar</a>
                <a href="#" class="btn btn-delete">Eliminar</a>
            </td>

        </tr>
    @endforeach
</table>

