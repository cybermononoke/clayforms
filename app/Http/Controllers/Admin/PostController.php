<?php

//THIS HAS BAD CODE LMAO PUBLIC FUNCTION CREATE NEEDS HELLLLLP

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('admin.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // $post->load('comments');

        return view('admin.posts.show', compact('post'));
    }

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function ($user, $post) {
            return $post->isAdmin($user->id);
        });
    }

    // public function update(Request $request, Post $post)
    // {
    //     if (gate::denies('update-post', $post)) {
    //         abort(403, 'unauthorized action');
    //     }
    // }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('admin.posts.show', $post->id);

    }

    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //     ]);

    //     Journal::whereId($id)->update($validatedData);

    //     return redirect()->route('journals.index')
    //         ->with('success', 'Journal entry updated successfully!');
    // }

    public function create()
    {
        if (Gate::allows('create-post')) {
            return view('admin.posts.create');
        } else {
            //actual line below
            // abort(403, 'Unauthorized action');
            //line that lets me do stuff even if not admin below
            //actually it doesn't matter since i'm hiding the link from non-admins
            return view('admin.posts.create');
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post deleted successfully!');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }
}
