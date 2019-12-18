@extends('layouts.app')

@section('title', 'Comments')

@section ('content')

    <p>The Comments of Jingle:</p>
    <ul>
        @foreach ($comments as $comment)
            <li><a href="{{ route('comments.show', ['id' => $comment->id]) }}"> {{$comment->comment }}</a></li>
        @endforeach
    <ul>

@endsection
