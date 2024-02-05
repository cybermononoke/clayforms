<!-- resources/views/admin/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Admin Posts</h1>

    <a href="{{ route('admin.posts.create') }}">Create New Post</a>

    @if ($posts->isEmpty())
        <p>No posts found.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
