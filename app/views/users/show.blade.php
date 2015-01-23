@extends('layouts.master')

@section('content')
<p>First Name: {{ $user->firstName }}</p>
<p>Last Name: {{ $user->lastName }}</p>
@stop
