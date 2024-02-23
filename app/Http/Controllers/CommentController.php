<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'content' => 'required',
        ]);

        $comment = Comment::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'content' => $request->content,
            'parent_id' => $request->parent_id, // If this is a reply, set the parent_id
        ]);

        return back()->with('success', 'comment added successfully');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return back()->with('success', 'comment deleted successfuly');
    }

    //reply functionality

    public function storeReply(Request $request){
        $request ->validate([
            'user_id'=>'required',
            'post_id'=>'required',
            'parent_id'=>'required',
            'content'=>'required',
        ]);

        $comment = Comment::Create([
            'user_id'=>$request->user_id,
            'post_id'=>$request->post_id,
            'parent_id'=>$request->parent_id,
            'content'=>$request->content,
        ]);

        return back ()->with('success', 'Reply posted successfully!');

    }
}
