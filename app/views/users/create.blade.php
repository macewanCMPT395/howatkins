@extends('layouts.master')


@section('content')

<h2 class="title">Create New User</h2>

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

@stop
