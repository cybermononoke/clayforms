@extends('layouts.app')
@include('layouts.createstyle')

@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap">

<style>
    .journal-content {
        font-family: 'Inconsolata', sans-serif; 
    }
</style>

<div>
    <h1>{{ $journal->title }}</h1>

    @if ($journal->user_id)
          
          @php
              $creator = \App\Models\User::find($journal->user_id);
          @endphp
          @if ($creator)
              <p> by {{ $creator->name }}</p>
          @else
              <p> Creator not available </p>
          @endif
      @else
          <p> Creator not available </p>
      @endif

      @if ($journal->created_at)
    <p>created at {{ $journal->created_at->format('Y-m-d H:i:s') }}</p>
    @else
    <p>creation date not available</p>
    @endif


    <div class="journal-content">
        {{ $journal->content }}
    </div>

    <a href="{{ route('journals.edit', $journal->id) }}" class="button">3D!T</a>

    <form method="POST" action="{{ route('journals.destroy', $journal->id) }}" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="button" onclick="return confirm('erase history?')">D3STR0Y</button>
    </form>
</div>

<script>
    function toggleReadMore() {
        var content = document.querySelector('.journal-content');
        content.style.maxHeight = content.style.maxHeight === '150px' ? 'none' : '150px';
    }
</script>

<div class="footer">



    <!-- @if ($journal->belongs_to)
    <p> by {{$journal->user->name}}</p>
    @else
    <p> creator not available </>
    @endif -->


 

</div>
@endsection
