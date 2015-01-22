@extends('layouts.master')


@section('content')
{{ Form::open(['route' => 'users.store']) }}
    <div>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username') }}
    </div>
    <div>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
    </div>
    <div>{{ Form::submit('Create User') }}</div>
{{ Form::close() }}
@stop
