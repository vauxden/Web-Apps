@extends('layouts.app')

@section('title', 'Comment Details')

@section ('content')
    <ul>
       <li>Id: {{ $comment->id}}</li>
       <li>Post Id: <a href="/posts/{{ $comment->post->id }}"> {{$comment->post->id}} </a></li>
       <li>Comment: {{ $comment->comment}}</li>

    <ul>

@endsection
