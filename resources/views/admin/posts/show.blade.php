@extends ('layouts.app')




@section ('content')

<h1>{{ $post->title }}</h1>

@if ($post->user_id)

@php
$creator = \App\Models\User::find($post->user_id);
@endphp
@if ($creator)
<p> by {{ $creator->name }}</p>
@else
<p> Creator not available </p>
@endif
@else
<p> Creator not available </p>
@endif


<p>{{ $post->content }}</p>


<style>
    /* .commentername {
        font-family: 'Inconsolata', sans-serif;
        color: #F8C8DC;
        font-size: 16px;
        background: transparent;
    }

    .commenttext {
        font-family: 'Inconsolata', sans-serif;
        color: #F8C8DC;
        font-size: 16px;
        background: transparent;

    }

    .comment_text:focus,
    .commenter_name:focus {
        box-shadow: 0 0 0 2px #F8C8DC;
        border: 1px solid transparent;
        
    }
 */



    .comment-form-container {
        max-width: 500px;
        margin: 0 auto;
        background: transparent;
    }


    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: vertical;
        background: transparent;

    }


    button[type="submit"] {
        background-color: transparent;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>





@can ('isAdmin')
<!-- this should be hidden unless admin -->
<a href="{{ route('admin.posts.edit', $post->id) }}" class="button">3D!T</a>

<form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="button" onclick="return confirm('erase history?')">D3STR0Y</button>
</form>
<!-- this should be hidden unless admin -->
@endcan


<!-- ---------------------------
COMMENT FUNCTIONALTIY
--------------------------- -->

<!-- form for create comments -->

<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <textarea name="content" rows="3" placeholder="Write your comment here..."></textarea>
    <button type="submit">Submit Comment</button>
</form>

<!-- 
showcomments -->
<div class="comments">
    <h3>Comments</h3>
    @forelse ($post->comments as $comment)
    <div class="comment">
        <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}</p>
        <!-- Add delete button if user is authorized -->
        @can('delete', $comment)
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        @endcan
    </div>
    @empty
    <p>No comments yet.</p>
    @endforelse




</div>


@endsection