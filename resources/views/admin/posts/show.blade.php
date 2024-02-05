@extends ('layouts.app')

@section ('content')

<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<h2>Comments</h2>
@foreach ($post->comments as $comment)
    <div>
        <strong>{{ $comment->commenter_name }}</strong>
        <p>{{ $comment->comment_text }}</p>
    </div>
@endforeach




<form action="{{ route('comments.store', $post) }}" method="post">
    @csrf
    <div>
        <label for="commenter_name">Your Name:</label>
        <input type="text" name="commenter_name" id="commenter_name">
    </div>
    <div>
        <label for="comment_text">Comment:</label>
        <textarea name="comment_text" id="comment_text" cols="30" rows="5"></textarea>
    </div>
    <button type="submit">Submit</button>
</form>


@endsection