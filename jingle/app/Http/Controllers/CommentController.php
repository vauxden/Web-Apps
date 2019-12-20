<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', ['comments' => $comments]);
    }

    public function apiStore(Request $request)
    {
       $e = new Comment;
       $e->comment = $request['comment'];
       $e->likes = 0;
       $e->user_id = $request['user_id'];
       $e->post_id = $request['post_id'];

       $e->save();
       return $e;
    }

    public function show($id)
    {
      $comment = Comment::findOrFail($id);
      return view('comments.show', ['comment' => $comment]);
    }
}
