@extends('layouts.app')

@section('content')
    <body style="background-color: #a393eb;">
        <div> 
            <h1>G A L L 3 R Y</h1>
            <form method="GET" action="{{ route('journals.create') }}">
                <button type="submit" class="button">RECORD</button>
            </form>
        </div>

        <div>
            <ul style="list-style-type: none; padding: 0;"> <!-- Add inline styles to remove bullet points -->
                @foreach($journals as $journal)
                    <li>
                        <a href="{{ route('journals.show', $journal->id) }}">
                            <button class="button">{{ $journal->title }}</button>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>

    <div class="footer">
    <p>&copy; サイバーモノノケ cybermononoke. all rights ignored.</p>
    </div>
@endsection
