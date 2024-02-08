<?php

//THIS HAS BAD CODE LMAO PUBLIC FUNCTION CREATE NEEDS HELLLLLP
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view ('admin.posts.index', compact('posts'));
    }











    public function show(Post $post)
    {
        $post->load('comments');

        return view('admin.posts.show', compact('post'));
    }

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function ($user, $post) {
            return $post->isAdmin($user->id);
        });
    }



    //ADMIN-PROTECTED ROUTES (add more-CrUDE is for admin)

    //update functionality
    public function update(Request $request, Post $post)
    {
        if (gate::denies('update-post', $post)) {
            abort(403, 'unauthorized action');
        }
    }


    public function create()
    {
        // Check if the user is authorized to create a new post
        if (Gate::allows('create-post')) {
            // Return the view for creating a new post
            return view('admin.posts.create');
        } else {
            // If the user is not authorized, abort with a 403 error
            // abort(403, 'Unauthorized action');
            return view('admin.posts.create');
        }
    }







    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post using the validated data
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->user_id = auth()->id(); // Assuming you have a user_id column in your posts table
        $post->save();

        // Redirect to the index page or show page after creating the post
        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }
}
