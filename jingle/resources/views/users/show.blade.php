@extends('layouts.app')

@section('title', 'User Details')

@section ('content')
    <ul>
       <li>Id: {{ $user->id}}</li>
       <li>Mod: {{ $user->mod}}</li>
       <li>Username: {{ $user->username}}</li>
       <li>Password: {{ $user->password}}</li>
       <li>Name: {{ $user->name}}</li>
       <li>Email: {{ $user->email}}</li>

    <ul>

@endsection
