@extends('layouts.master')

@section('content')

<h2 class="title">Edit User</h2>

{{ Form::open(['url' => "/users/$user->id", 'method' => 'put']) }}
<fieldset>
<legend>Edit User Info</legend>

 <div>
 @if (!$user->hasImage)
     <img src="/uploads/BlankProfileImage.jpg" height="100" width="150"/>
 @else
     <img src="/uploads/{{ $user->email }}.jpg" height="100" width="150"/>
 @endif
 </div>

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

</fieldset>

@stop
