<!-- resources/views/partials/header.blade.php -->

@if(Route::currentRouteName() !== 'home')
    <a href="{{ route('home') }}" class="home-button">H 0 M 3</a>
@endif
