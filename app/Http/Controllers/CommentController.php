<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request,Post $post){
        $validatedData = $request->validate([
            'commenter_name'=>'required|string|max:100',
            'comment_text'=>'required|string',
        ]);

        $comment = $post->comments()->create($validatedData);

        return response()->json($comment, 201);
    }
}
