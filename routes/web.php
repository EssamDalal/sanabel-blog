<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use App\Models\Tag;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PageController::class ,'home'])->name('home');


Route::post('/posts' , [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/{id}/edit', [PostController::class ,'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class ,'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('categories', CategoryController::class);

Route::resource('tags',TagController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
