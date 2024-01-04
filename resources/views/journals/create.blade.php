@extends('layouts.app')

@section('content')
    <div>
        <h1>RECORD</h1>

        <form method="POST" action="{{ route('journals.store') }}">
            @csrf

            <label for="title">Title:</label>
            <input type="text" name="title" required>

            <label for="content">Content:</label>
            <textarea name="content" required></textarea>

            <button type="submit" class="button">RECORD ENTRY</button>
        </form>
    </div>
@endsection
