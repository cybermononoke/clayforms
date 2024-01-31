@extends('layouts.app')
@include('layouts.createstyle')

@section('content')
    <div>
        <h1>/edit</h1>

        <form method="POST" action="{{ route('journals.update', $journal->id) }}">
            @csrf
            @method('PUT')

            <label for="title" class="title-label">T ! T L 3:</label>
            <input type="text" name="title" class="title-input" value="{{ $journal->title }}" required>

            <label for="content" class="content-label">C 0 N T 3 N T:</label>
            <textarea name="content" class="content-input" required>{{ $journal->content }}</textarea>

            <button type="submit" class="submitbutton">U P D 4 T 3 3 N T R Y</button>
        </form>
    </div>
@endsection
