<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        $posts = Post::orderBy('updated_at', 'desc')->limit(6)->get();

        return view('pages.home',['posts' => $posts]);
    }
}
