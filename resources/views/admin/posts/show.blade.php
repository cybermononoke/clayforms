@extends ('layouts.app')

@section ('content')

<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<!-- displays the comments -->
<h1>Comments</h1>
@foreach ($post->comments as $comment)
<div>
    <strong>{{ $comment->commenter_name }}</strong>
    <p>{{ $comment->comment_text }}</p>
</div>
@endforeach

<style>
    .commentername {
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
        box-shadow: 0 0 0 2px #F8C8DC; /* Create a pink shadow effect */
        border: 1px solid transparent; /* Remove default border */
    }


</style>


<!-- create new comments -->

<form action="{{ route('comments.store', $post) }}" method="post">
    @csrf
    <div>
        <label for="commenter_name" class="commentername">Your Name:</label>
        <input type="text" name="commenter_name" id="commenter_name" class="commentername">
    </div>
    <div>
        <label for="comment_text" class="commenttext">Comment:</label>
        <textarea name="comment_text" id="comment_text" cols="30" rows="5" class="commenttext"></textarea>
    </div>
    <button type="submitbutton">Submit</button>
</form>


@endsection
