<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')


<style>
    body {
        font-family: 'Arial', sans-serif; /* Fallback font */
        text-align: center;
        margin: 50px;
        background: url('{{ asset("images/1.png") }}') no-repeat center center fixed;
        background-size: cover;
        height: 100%; /* Add this line */
        overflow-y: auto; /* Add this line */
    }

    h1 {
        font-family: 'MYFONT', sans-serif; /* Use 'MYFONT' here */
        color: #fff;
        font-size: 8em;
        margin-top: 100px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    h2 {
        font-family: 'MYFONT', sans-serif; /* Use 'MYFONT' here */
        color: #fff;
        font-size: 4em;
        margin-top: 100px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    p {
        font-family: 'YOURFONT', sans-serif; /* Use 'YOURFONT' here */
        color: #fff;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        font-family: 'YOURFONT', sans-serif; /* Use 'YOURFONT' here */
        color: white;
        text-align: center;
    }

    .about-box {
        background-color: rgba(255, 255, 255, 0.0);
        padding: 20px;
        margin: 400px auto;
        border-radius: 10px;
    }


    .btn.primary {
        font-family: "YOURFONT", sans-serif;
        color:white;

    }
</style>





@section('content')
    <main>
        <h1>C L 4 Y F 0 R M S</h1>
        <p>organize your story</p>

        <a href="{{ route('journals.index') }}" class="btn-primary">v!3w t4sk5</a>
    </main>


    <div class="about-box">
        <h2>T H 3   S T 0 R Y</h2>
        <p>record your story</p>
    </div>


    <div class="footer">
    <p>&copy; 2024 cybermononoke. all rights ignored.</p>
    </div>
@endsection
