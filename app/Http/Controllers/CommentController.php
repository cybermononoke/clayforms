<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'commenter_name' => 'required|string|max:100',
            'comment_text' => 'required|string',
        ]);

        $comment = $post->comments()->create($validatedData);

        return response()->json($comment, 201);
    }
}
