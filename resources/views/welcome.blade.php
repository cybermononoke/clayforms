<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
<main>
    <h5>w e l c o m e <br>
    </h5>
    <h6>サイバーモノノケ</h6>
</main>


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