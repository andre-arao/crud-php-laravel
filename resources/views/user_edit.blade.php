@extends('master')

@section('content')

    <h1>Edit</h1>

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif

    <form action="{{route('users.update', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="firstname" value="{{$user -> firstname}}">
        <input type="text" name="lastname" value="{{$user -> lastname}}">
        <input type="text" name="email" value="{{$user -> email}}">
        <button type="submit">Update</button>
    </form>

@endsection
