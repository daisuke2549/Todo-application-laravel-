<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post) {
           $this->validate($request, [
             'body' => 'required'
            ]);
            $comment = new Comment(['body' => $request->body]);
          $post->comments()->save($comment);
            return redirect()->action('App\Http\Controllers\PostsController@show', $post);
}
}