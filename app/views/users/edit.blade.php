@extends('layouts.master')

@section('content')

<h1>Edit User</h1>

{{ Form::open(['url' => "/users/$user->id", 'method' => 'put']) }}
    <fieldset>
    <legend>Edit User Info</legend>

    <div>
        {{ Form::label('firstname', 'First Name:') }}
        {{ Form::text('firstname', $user->firstName) }}
        {{ $errors->first('firstname',
                '<span class=error>:message</span>') }} 
    </div>
    <div>
         {{ Form::label('lastname', 'Last Name:') }}
         {{ Form::text('lastname', $user->lastName) }}
         {{ $errors->first('lastname',
                '<span class=error>:message</span>') }}
    </div>
    <div>
         {{ Form::label('email', 'Email:') }}
         {{ Form::email('email', $user->email) }}
         {{ $errors->first('email',
                '<span class=error>:message</span>') }}
    </div>
    <div>{{ Form::submit('Update Info') }}</div>
    </fieldset>
{{ Form::close() }}

{{ Form::open(['url' => "/users/$user->id", 'method' => 'delete']) }}
    <div>{{ Form::submit('Delete User') }}</div>
{{ Form::close() }}
@stop
