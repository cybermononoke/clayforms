<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
<main>
    <h1 class="welcome-animation">w e l c o m e</h1>
    <!-- <h1>クレイフォームズ</h1> -->
</main>

<!-- STATUS CONTAINER -->
<div class="status-container">
    <p>ST4TUS</p>
    @if ($isLoggedIn)
    <p>logged in as {{ $user->name }}</p>
    @else
    <p>not logged in</p>
    @endif
</div>

<div class="footer">
    <p>&copy; サイバーモノノケ cybermononoke. all rights ignored.</p>
</div>
@endsection




@push('styles')
<style>
    @keyframes welcome {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .welcome-animation {
        animation: welcome 2s ease-out forwards;
    }
</style>
@endpush
