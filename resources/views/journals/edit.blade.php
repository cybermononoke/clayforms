@extends('layouts.app')


<form method="POST" action="{{ route('journals.update', $journal->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $journal->title }}" required>
    <label for="content">Content:</label>
    <textarea name="content" required>{{ $journal->content }}</textarea>
    <button type="submit">Update Journal Entry</button>
</form>
