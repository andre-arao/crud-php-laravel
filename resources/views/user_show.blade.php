@extends('master')

@section('content')

    <h1>User - {{$user->firstname}}</h1>

    <form action="{{route('users.destroy', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">DELETE</button>
    </form>
    <form action="{{route('users.index', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="get">
        <button type="submit">Voltar</button>
    </form>


@endsection
