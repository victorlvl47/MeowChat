<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes:
// index - Show all posts
// show - Show single post
// create - Show form to create new post
// store - Store new post
// edit - Show form to edit post
// update - Update post
// destroy - Delete post  

// All posts
Route::get('/', [PostController::class, 'index']);

// Show Create Post Form
Route::get('/posts/create', [PostController::class, 'create']);

// Store Post Data
Route::post('/posts', [PostController::class, 'store']);

// Show Edit Post
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

// Update Post
Route::put('/posts/{post}', [PostController::class, 'update']);

// Single post
Route::get('/posts/{post}', [PostController::class, 'show']);