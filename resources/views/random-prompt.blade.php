
@extends ('layouts.app')

@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Prompt</title>
</head>
<body>
    <h1>/prompt</h1>
    <p>{{ $randomPrompt->prompt }}</p>
    <form action="{{ route('random.prompt') }}" method="GET">
        <button type="submit" class="button2">>get prompt<</button>
    </form>
</body>
</html>
@endsection