@extends('layouts.app')
@include('layouts.createstyle')

@section('content')
<style>
    body {
        background: url('{{ asset("images/color.png") }}') no-repeat center center fixed;
        background-repeat: repeat;
    }
    /* Use box-shadow to create a custom focus effect */
    .title-input:focus,
    .content-input:focus {
        box-shadow: 0 0 0 2px #F8C8DC; /* Create a pink shadow effect */
        border: 1px solid transparent; /* Remove default border */
    }
</style>
    <div>
        <h1>/record</h1>

        <form method="POST" action="{{ route('journals.store') }}">
            @csrf

            <label for="title" class="title-label">T ! T L 3</label>
            <input type="text" name="title" class="title-input" required>

            <label for="content" class="content-label">C 0 N T 3 N T</label>
            <textarea name="content" class="content-input" required></textarea>

            <button type="submit" class="submitbutton">R3C0RD 3NTRY</button>
        </form>
    </div>
@endsection
