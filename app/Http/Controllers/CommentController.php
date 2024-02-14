<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'user_id'=>'required',
            'post_id'=>'required',
            'content'=>'required',
        ]);

        Comment::create($request->all());

        return back()->with('success','comment added successfully');
    }


    public function destroy($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return back()->with('success','comment deleted successfuly');
    }
}
