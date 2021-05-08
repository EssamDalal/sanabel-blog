<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use App\Models\Tag;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $posts = Post::all();

    return view('pages.home',['posts' => $posts]);
})->name('home');


Route::post('/posts' , [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class ,'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class ,'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('categories', CategoryController::class);

Route::resource('tags',TagController::class);

