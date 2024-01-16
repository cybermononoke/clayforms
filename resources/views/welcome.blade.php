<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')





@section('content')
<main>


<!-- 
    <style>

body{
  padding: 40px;
  background-color: #121212;  
}

p {
  border-right: solid 3px rgba(0,255,0,.75);
  white-space: nowrap;
  overflow: hidden;    
  font-family: 'YOURFONT';  
  font-size: 28px;
  color: rgba(255,255,255,.70);
}

/* Animation */
p {
  animation: animated-text 4s steps(29,end) 1s 1 normal both,
             animated-cursor 600ms steps(29,end) infinite;
}

/* text animation */

@keyframes animated-text{
  from{width: 0;}
  to{width: 472px;}
}

/* cursor animations */

@keyframes animated-cursor{
  from{border-right-color: rgba(0,255,0,.75);}
  to{border-right-color: transparent;}
}

    </style> -->






    <h1>C L 4 Y F 0 R M S
        <br>
        クレイフォームズ
    </h1>

    <p>o r g a n i z e - y o u r - s t o r y </p>

    <a href="{{ route('register') }}" class="beginbutton">R 3 G ! S T 3 R</a>
    <a href="{{ route('journals.index') }}" class="beginbutton">L 0 G ! N</a>
    <a href="{{ route('about') }}" class="beginbutton">A B 0 U T</a>


</main>



<div class="footer">
    <p>&copy; サイバーモノノケ cybermononoke. all rights ignored.</p>
</div>




@endsection