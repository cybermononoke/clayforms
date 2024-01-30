@extends('layouts.app')

@section('content')
    <body style="background-color: #a393eb;">


        <div> 
        
            
            <form method="GET" action="{{ route('journals.create') }}">
                <button type="submit" class="recordbutton">R 3 C 0 R D 3 N T R Y</button>
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
