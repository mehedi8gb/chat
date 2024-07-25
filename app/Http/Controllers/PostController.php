<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $data = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);

        return redirect()->route('posts');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('posts');
    }
}
