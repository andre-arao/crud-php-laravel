@extends('master')

@section('content')
    <a href="{{route('users.create')}}">Create</a>
    <hr>
<h1>Users</h1>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstname}} | <a href="{{route('users.edit',['user' => $user->id])}}">Edit</a> | <a href="{{route('users.show', ['user' => $user->id])}}">Show</a></li>
    @endforeach
</ul>

    <form action="{{route('home', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="get">
        <button type="submit">HOME</button>
    </form>

    <form action="{{route('users.index', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="get">
        <button type="submit">Recarregar</button>
    </form>

@endsection
