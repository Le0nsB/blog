<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController
{
    public function store(Request $request)
    {
        $comments = Comment::all();
        $validated = $request->validate([
            "author" => ["required", "max:255"],
            "comment" => ["required", "max:255"],
            "post_id" => ["required"]
        ]);          
        Comment::create([
            "author" => $validated["author"],
            "comment" => $validated["comment"],
            "post_id" => $validated["post_id"]
        ]);
        return redirect("/");
    }
    public function edit(Comment $comment)
    {
        return view("/comments/edit", compact("comment"));
    }

    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            "author" => ["required", "max:255"],
            "comment" => ["required"],
          ]); 
          $comment->author = $validated["author"];
          $comment->comment = $validated["comment"];
          $comment->save();

          return redirect("/");
    }
    public function destroy(Request $request, Comment $comment)
    {
        
        $comment->delete();
        return redirect("/posts/" . $comment["post_id"]);
    }
}