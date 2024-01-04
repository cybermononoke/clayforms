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
        <h1>C L 4 Y F 0 R M S
        クレイフォームズ
        </h1>
        <h2></h2>
        <p>organize your story</p>
        <p> by サイバーモノノケ </p>

        <a href="{{ route('journals.index') }}" class="beginbutton">B3G!N</a>
    </main>



    <div class="footer">
    <p>&copy; サイバーモノノケ cybermononoke. all rights ignored.</p>
    </div>
@endsection
