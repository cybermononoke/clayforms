@extends('layouts.app')
@include('layouts.createstyle')

@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap">

<style>
    /* Apply font-family to .journal-content */
    .journal-content {
        font-family: 'Inconsolata', sans-serif; 
    }
</style>

<div>
    <h1>{{ $journal->title }}</h1>
    <div class="journal-content">
        {{ $journal->content }}
    </div>

    <a href="{{ route('journals.edit', $journal->id) }}" class="button">3D!T</a>

    <form method="POST" action="{{ route('journals.destroy', $journal->id) }}" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="button" onclick="return confirm('erase history?')">D3STR0Y</button>
    </form>
</div>

<script>
    function toggleReadMore() {
        var content = document.querySelector('.journal-content');
        content.style.maxHeight = content.style.maxHeight === '150px' ? 'none' : '150px';
    }
</script>

<div class="footer">
    @if ($journal->created_at)
    <p>Created on: {{ $journal->created_at->format('Y-m-d H:i:s') }}</p>
    @else
    <p>creation date not available</p>
    @endif
</div>
@endsection
