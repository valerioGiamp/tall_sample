<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post,
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
