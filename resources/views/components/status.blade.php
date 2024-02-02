<!-- resources/views/components/status.blade.php -->
<h1>ST4TUS</h1>

@if ($isLoggedIn)
    <p>You are logged in as {{ $user->name }}</p>
@else
    <p>You are not logged in.</p>
@endif
