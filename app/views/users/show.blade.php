@extends('layouts.master')

@section('content')
<h1>User Details</h1>

{{ Form::open() }}
<fieldset>
<legend>{{ $user->firstName . ' ' . $user->lastName }}</legend>
    <div>
        {{ Form::label('firstname', 'First Name:') }}
        {{ Form::text('firstname', $user->firstName, ['readonly']) }}
    </div>
    <div>
        {{ Form::label('lastname', 'Last Name:') }}
        {{ Form::text('lastname', $user->lastName, ['readonly']) }}
    </div>
    <div>
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', $user->email, ['readonly']) }}
    </div>
    <div>
        {{ Form::label('membersince', 'Member Since:') }}
        {{ Form::text('membersince', date('d M Y', 
                strtotime($user->created_at)), ['readonly']) }}
    </div>
{{ Form::close() }}


@if ($editable)
{{ Form::open(['url' => "/users/$user->id/edit", 'method' => 'get']) }}
    {{ Form::submit('Edit User') }}
{{ Form::close() }}
@endif

</fieldset>

@stop
