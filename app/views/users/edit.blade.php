@extends('layouts.master')

@section('content')
{{ Form::open(['url' => "/users/$user->id", 'method' => 'put']) }}
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
{{ Form::close() }}

{{ Form::open(['url' => "/users/$user->id", 'method' => 'delete']) }}
    <div>{{ Form::submit('Delete User') }}</div>
{{ Form::close() }}
@stop
