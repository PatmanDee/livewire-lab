<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Todos;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;


Route::get('/', Todos::class)->name('todos');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/posts', ShowPosts::class)->name('posts');
Route::get('/create-post', CreatePost::class)->name('create-post');

require __DIR__.'/auth.php';
