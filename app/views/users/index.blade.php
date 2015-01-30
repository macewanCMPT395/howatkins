@extends('layouts.master')

@section('content')
<h2 class="title">All Users</h2>
<table id="usertable">
    <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>email</th></tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ link_to("/users/{$user->id}", $user->id) }}</td>
            <td>{{ $user->firstName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
</table>
@stop
