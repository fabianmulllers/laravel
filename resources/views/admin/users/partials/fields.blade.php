<div class="form-group">
    {{ Form::label('labelemail','Correo electronico') }}
    {{Form::email('email',null,['class'=> 'form-control' ,'placeholder' =>'correo electronico'])}}

</div>
<div class="form-group">
    {{Form::label('labelpassword','ingreso password')}}
    {{Form::password('password',['class'=>'form-control','placeholder' => 'ingrese password'])}}

</div>
<div class="form-group">
    {{Form::label('firstname','primer nombre')}}
    {{Form::text('first_name',null,['class'=>'form-control','placeholder'=>'ingrese primer nombre'])}}
</div>
<div class="form-group">
    {{Form::label('lastname','apellido')}}
    {{Form::text('last_name',null,['class'=>'form-control','placeholder'=>'ingrese apellido'])}}
</div>
<div class="form-group">
    {{Form::label('type','tipo usuario')}}
    {{Form::select('type',[''=>'seleccione tipo ','user'=>'usuario','admin'=>'administrador'],null,['class'=>'form-control'])}}
</div>
