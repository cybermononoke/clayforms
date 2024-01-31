@extends('layouts.app')

@section('content')
    <body style="background-color: #a393eb;">


        <div> 
        
            <h1>
                /record
            </h1>
            <form method="GET" action="{{ route('journals.create') }}">
                <button type="submit" class="recordbutton">>new record<</button>
            </form>
        </div>



        <div>
            <ul style="list-style-type: none; padding: 0;"> 
                @foreach($journals as $journal)
                    <li>
                        <a href="{{ route('journals.show', $journal->id) }}">
                            <button class="journallistbutton">{{ $journal->title }}</button>
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
