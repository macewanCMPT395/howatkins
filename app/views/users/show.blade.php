@extends('layouts.master')

@section('content')
<p>First Name: {{ $user->firstName }}</p>
<p>Last Name: {{ $user->lastName }}</p>

@if ($editable) 
    <a href="/users/{{ $user->id }}/edit">Edit</a>
@endif
@stop
