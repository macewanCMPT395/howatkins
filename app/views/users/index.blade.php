@extends('layouts.master')

@section('content')
<h1>All Users</h1>
     @foreach ($users as $user)  
         <li>{{ link_to("/users/{$user->id}", $user->email) }}</li>
     @endforeach
@stop
