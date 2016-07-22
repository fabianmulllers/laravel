@if(!$errors->isempty())
    <div class="alert alert-danger">
        <p><strong>Oops|</strong> Please fix the following erros:</p>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
    </div>
    @endforeach
@endif