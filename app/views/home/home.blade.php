@extends('layouts.master')

@section('listItem')
    @if ($authorized) 
        <li><a href="/users/{{$id}}">My Profile</a></li>
        <li><a href="/logout">Logout</a></li>
    @else
        <li><a href="/users/create">Create User</a></li>
        <li><a href="/login">Login</a></li>    
    @endif
@stop

@section('content')
    <h1>Welcome</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@stop
