@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $journal->title }}</h1>
        <p>{{ $journal->content }}</p>
        <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-primary">Edit</a>

        <form method="POST" action="{{ route('journals.destroy', $journal->id) }}" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
        </form>
    </div>
@endsection
