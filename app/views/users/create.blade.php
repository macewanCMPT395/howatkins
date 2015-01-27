@extends('layouts.master')


@section('content')

<h1>Create New User</h1>

{{ Form::open(['route' => 'users.store']) }}
    <fieldset>
    <legend>Enter User Info</legend>
    <div>
        {{ Form::label('firstname', 'First Name:') }}
        {{ Form::text('firstname') }}
        {{ $errors->first('firstname',
                '<span class=error>:message</span>') }}

    </div>
    <div>
        {{ Form::label('lastname', 'Last Name:') }}
        {{ Form::text('lastname') }}
        {{ $errors->first('lastname',
                '<span class=error>:message</span>') }}

    </div>
    <div>
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email') }}
        {{ $errors->first('email',
                '<span class=error>:message</span>') }}

    </div>
    <div>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
        {{ $errors->first('password',
                '<span class=error>:message</span>') }}

    </div>
    <div>{{ Form::submit('Create User') }}</div>
    </fieldset>
{{ Form::close() }}
<!--//http://davidwalsh.name/basic-file-uploading-php-->
<form action="accept-file.php" method="post" enctype="multipart/form-data">
	Your Photo: <input type="file" name="photo" size="25" />
	<input type="submit" name="submit" value="Submit" />
</form>
@stop
