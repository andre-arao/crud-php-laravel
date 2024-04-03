@extends('master')

@section('content')

<h1>Home</h1>

<form action="{{route('users.index', ['user' => $user->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="get">
    <button type="submit">Lista de Users</button>
</form>

@endsection
