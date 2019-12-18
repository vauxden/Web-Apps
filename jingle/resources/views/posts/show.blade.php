@extends('layouts.app')

@section('title', 'Post Details')

@section ('content')
    <ul>
       <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

       <li>Post Id: {{ $post->id}}</li>
       <li>Op:   <a href="/users/{{ $post->user->id }}"> {{$post->user->username}} </a></li>
       <li>Title: {{ $post->title}}</li>
       <li>Post: {{ $post->post}}</li>


       <h4>Comments</h4>
        <div class="row">
            @foreach($post->comments as $comment)
                <div class="comment">
                <strong>{{$comment->user->username}}</strong><br>
                {{$comment->comment}}<br>
                Likes: {{$comment->likes}}
                </div><br>
            @endforeach
        </div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <div id="root">
                <input type="text" v-model="newComment">
                <button @click="addComment"> Add Comment</button>

                    <ul>
                        <li v-for="Comments">@{{comment}}</li>
                    </ul>
            </div>


    <script>
        var app = new Vue ({
            el: "#root",

            data: {
                newComment: "",
                comment: ['help']

            },

            methods: {
                addComment() {
                    this.comments.push(this.newComment);
                    this.newComment = "";
                }
            }
        });
    </script>
@endsection
