<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts', [
            'posts' => Post::all()
        ]);
    }

    // Show single post
    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }
}
