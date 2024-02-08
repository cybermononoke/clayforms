<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')





@section('content')
<main>






    <h1>w e l c o m e
        <br>
        クレイフォームズ
    </h1>


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