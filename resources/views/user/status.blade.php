<!-- resources/views/user/status.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>ST4TUS</h1>

    @if ($isLoggedIn)
        <p>you are logged in as {{ $user->name }}</p>
    @else
        <p>you are not logged in.</p>
    @endif
@endsection
