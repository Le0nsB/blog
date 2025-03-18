<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }

    public function create()
    {
        $categories = Category::all();
        return view("posts.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"]
            
          ]);          
        Post::create([
            "content" => $validated["content"],
            "category_id" => $validated["category_id"]
        ]);
        return redirect("/");
    }
    public function show(Post $post)
    {
        $categories = Category::all();
        return view("posts.show", compact("post"));
    }

    public function edit(Post $post)
    {
        return view("/posts/edit", compact("post"));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"],
          ]); 
          $post->content = $validated["content"];
          $post->category_id = $validated["category_id"];
          $post->save();

          return redirect("/");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/");
    }
}
