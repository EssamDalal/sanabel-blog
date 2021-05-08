<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function show($id) {
        $post = Post::findorFail($id);
        return view('pages.showpost' , ['post'=>$post]);
    }

    public function create() {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create',['categories' => $categories, 'tags' => $tags]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|min:4|max:255',
            'img' => 'required|url',
            'body' => 'required|min:4',
            'category_id'       => 'required|numeric|exists:categories,id',
            'tags'              => 'array',


        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->img = $request->img;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags);


        return redirect("/posts/{$post->id}");

    }

    public function edit($id){
            $post = Post::findOrFail($id);
            $tags = Tag::all();
            $categories = Category::all();
            return view('post/edit',['post' => $post , 'tags' => $tags,'categories' => $categories]);
    }

    public function update($id, Request $request){

        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|min:4|max:255',
            'img' => 'required|url',
            'body' => 'required|min:4',
            'category_id'       => 'required|numeric|exists:categories,id',
            'tags'              => 'array',


        ]);

        $post->title = $request->title;
        $post->img = $request->img;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags);


        return redirect("/posts/{$post->id}");

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home');
    }
}
