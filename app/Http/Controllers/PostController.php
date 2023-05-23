<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Show single post
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // Show Create Form
    public function create() {
        return view('posts.create');
    }

    // Store Post Data
    public function store(Request $request) {
        // dd($request->all());

        $formFields = $request->validate([
            'title' => 'required', 
            // 'company' => ['required', Rule::unique('listings', 'company')]
            'tags' => 'required', 
            'caption' => 'required'
        ]);

        Post::create($formFields);

        return redirect('/');
    }
}
