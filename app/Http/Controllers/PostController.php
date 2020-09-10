<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest()->get();
        return view('main', compact('posts'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:posts,slug|regex:/^[0-9A-Za-z_-]*$/i',
            'title' => 'required|between:5,100',
            'short_text' => 'required|max:255',
            'content' => 'required',
            'published' => 'boolean',
        ]);
        Post::create($validatedData);
        return redirect('/');
    }

    public function show(Post $post)
    {
        if ($post->published) {
            return view('posts/show', compact('post'));
        } else {
            return redirect('/');
        }
    }
}
