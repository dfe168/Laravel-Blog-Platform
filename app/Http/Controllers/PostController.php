<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', [
            'categories' => Category::whereHas('posts', fn($query) => ($query->published()))->take(10)->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post', 'post'));
    }
}
