<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $post = Post::create($validatedData);

        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',

        ]);
        $post->update($validatedData);

        return response()->json($post, 200);
    }

    public function destroy(post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }
}
