<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['tag', 'search']))->paginate(6)
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

        // Check if an image was uploaded
        if($request->hasFile('post_image'))
        {
            $formFields['image_path'] = $request->file('post_image')->store('posts_images', 'public');
        }

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    // Show Edit Form
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    // Update Post data
    public function update(Request $request, Post $post) {
        // dd($request->all());

        $formFields = $request->validate([
            'title' => 'required', 
            // 'company' => ['required', Rule::unique('listings', 'company')]
            'tags' => 'required', 
            'caption' => 'required'
        ]);

        // Check if an image was uploaded
        if($request->hasFile('post_image'))
        {
            $formFields['image_path'] = $request->file('post_image')->store('posts_images', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post updated successfully!');
    }
}
