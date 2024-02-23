@extends ('layouts.app')
@section ('content')

<style>
    .comment-form-container {
        max-width: 500px;
        margin: 0 auto;
        background: transparent;
    }


    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #F8C8DC;
        border-radius: 5px;
        resize: vertical;
        background: transparent;

    }

    .comment {
        padding: 10px;
        text-align: left;
        border: 1px solid #F8C8DC;
    }
</style>



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
<p2>{{ $post->content }}</p2>


<br>
<br>
<br>






@can ('isAdmin')
<a href="{{ route('admin.posts.edit', $post->id) }}" class="button">3D!T</a>
<form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="button" onclick="return confirm('erase history?')">D3STR0Y</button>
</form>
@endcan


<!-----------------------------
COMMENT FUNCTIONALTIY
------------------------------>



<div class="comments">
    <h1>/comments</h1>


    <form action="{{ route('comments.store') }}" method="POST">
        @csrf

        @auth
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <textarea name="content" rows="2" placeholder="say something..."></textarea>
        <button type="submit" class="button2" style="float: right;">>submit comment<</button>
        @else
        <p>log in to leave a comment</p>
        @endauth
    </form>


    <br>
    <br>
    <br>
    <br>


    @forelse ($post->comments()->orderBy('created_at','desc')->get() as $comment)
    <div class="comment">



        <p2><strong>{{ $comment->user->name }}</strong>:
            {{ $comment->content }}</p>



            <p class="comment-date">{{ $comment->created_at->format('M d, Y') }}</p>



            @if(Auth::check() &&$comment->user_id===Auth::user()->id)
            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="deletecommentbutton">>delete<</button>
            </form>
            @endif
    </div>

    @empty
    <p>no comments yet.</p>
    @endforelse

</div>





@endsection