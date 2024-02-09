<!-- resources/views/admin/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1 class="page-title">/posts</h1>


@can ('isAdmin')
<a href="{{ route('admin.posts.create') }}" class="recordbutton">>new post< </a>
        @endcan


        <br>
        @if ($posts->isEmpty())
        <p>No posts found.</p>
        @else
        <ul class="post-list" style="text-align: left;">
            @foreach ($posts as $post)
            <li>
                <a href="{{ route('admin.posts.show', $post) }}"># {{ $post->title }}</a>
                @if ($post->created_at)
                <p>Created at {{ $post->created_at->format('Y-m-d') }}</p>
                @else
                <p>Creation date not available</p>
                @endif
            </li>
            @endforeach
        </ul>
        @endif
        @endsection