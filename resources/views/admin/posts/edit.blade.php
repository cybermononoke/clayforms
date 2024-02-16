<!-- resources/views/admin/posts/edit.blade.php -->

@extends('layouts.app')
@include('layouts.createstyle')

@section('content')
<h1>/edit</h1>

<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title" class="title-label">Title:</label>
        
        <input type="text" name="title" class="title-input" value="{{ $post->title }}" required>
    </div>


    <div>
        <label for="content" class="content-label">Content:</label>
        <textarea name="content" class="content-input" required>{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="submitbutton">>update post<</button>
</form>
@endsection