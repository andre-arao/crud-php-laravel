@extends('master')

@section('content')
    <a href="{{route('users.create')}}">Create</a>
    <hr>
<h1>Users</h1>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstname}} | <a href="{{route('users.edit',['user' => $user->id])}}">Edit</a> | <a
                href="">Delete</a> | <a href="{{route('users.show', ['user' => $user->id])}}">Show</a></li>
    @endforeach
</ul>

@endsection
