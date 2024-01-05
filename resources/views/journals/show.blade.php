@extends('layouts.app')
@include('layouts.createstyle')

@section('content')
    <div>
        <h1>{{ $journal->title }}</h1>
        <div class="journal-content">
            {{ $journal->content }}
            
        </div>

        @if ($journal->created_at)
            <p>Created on: {{ $journal->created_at->format('Y-m-d H:i:s') }}</p>
        @else
            <p>creation date not available</p>
        @endif

        <a href="{{ route('journals.edit', $journal->id) }}" class="button">3D!T</a>

        <form method="POST" action="{{ route('journals.destroy', $journal->id) }}" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="button" onclick="return confirm('Are you sure you want to delete this entry?')">D3STR0Y</button>
        </form>
    </div>

    <script>
        function toggleReadMore() {
            var content = document.querySelector('.journal-content');
            content.style.maxHeight = content.style.maxHeight === '150px' ? 'none' : '150px';
        }
    </script>
@endsection

