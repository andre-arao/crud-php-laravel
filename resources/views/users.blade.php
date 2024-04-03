@extends('master')

@section('content')

<h1>Users</h1>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstname}} | <a href="{{route('users.edit',['user' => $user->id])}}">Edit</a> | <a href="">Delete</a></li>
    @endforeach
</ul>

@endsection
