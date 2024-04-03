@extends('master')

@section('content')

    <h1>Create</h1>

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="firstname" placeholder="Your firstname">
        <input type="text" name="lastname" placeholder="Your lastname">
        <input type="text" name="email" placeholder="Your email">
        <input type="text" name="password" placeholder="Your password">
        <button type="submit">Create</button>
    </form>
    <form action="{{route('users.index', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="get">
        <button type="submit">Voltar</button>
    </form>

@endsection
