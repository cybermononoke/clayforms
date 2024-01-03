@extends('layouts.app')


@foreach($journals as $journal)
    <h3>{{ $journal->title }}</h3>
    <p>{{ $journal->content }}</p>
    <a href="{{ route('journals.show', $journal->id) }}">View</a>
    <a href="{{ route('journals.edit', $journal->id) }}">Edit</a>
    <form method="POST" action="{{ route('journals.destroy', $journal->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
