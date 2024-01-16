<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')





@section('content')
<main>


    <h1>C L 4 Y F 0 R M S
        <br>
        クレイフォームズ
    </h1>

    <p>o r g a n i z e  - y o u r -  s t o r y </p>

    <a href="{{ route('journals.index') }}" class="beginbutton">L 0 G ! N</a>

    <a href="{{ route('about') }}" class="beginbutton">A B 0 U T</a>

    <a href="{{ route('register') }}" class="beginbutton">R 3 G ! S T 3 R</a>

</main>



<div class="footer">
    <p>&copy; サイバーモノノケ cybermononoke. all rights ignored.</p>
</div>




@endsection