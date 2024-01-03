@extends('layouts.app')


<form method="POST" action="{{ route('journals.store') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <label for="content">Content:</label>
    <textarea name="content" required></textarea>
    <button type="submit">Create Journal Entry</button>
</form>
