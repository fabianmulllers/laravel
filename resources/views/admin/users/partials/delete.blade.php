{{ Form::open(['route'=> ['admin.users.destroy',$user],'method' => 'DELETE']) }}


<button type="submit" onclick="return confirm('seguro desea eliminar?')" class="btn btn-danger">Eliminar usuario</button>

{{Form::close()}}