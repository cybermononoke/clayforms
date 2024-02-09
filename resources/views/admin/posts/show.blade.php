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
        box-shadow: 0 0 0 2px #F8C8DC;
        border: 1px solid transparent;
        
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
@endsection