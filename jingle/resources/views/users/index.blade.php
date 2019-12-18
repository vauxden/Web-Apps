@extends('layouts.app')

@section('title', 'Users')

@section ('content')

    <p>The Users of Jingle:</p>
    <ul>
        @foreach ($users as $user)

            <li><a href="{{ route('users.show', ['id' => $user->id]) }}"> {{$user->username }}</a></li>
        @endforeach
    <ul>

@endsection
