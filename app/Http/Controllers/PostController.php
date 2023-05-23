<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['tag']))->get()
        ]);
    }

    // Show single post
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
