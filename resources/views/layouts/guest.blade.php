

<!-- resources/views/layouts/x-guest-layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        body {
            color: #F8C8DC;
            background-color: #1b1c1e;
        }

        /* Remove focus rings */
        *:focus {
            outline: none;
        }
    </style>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-transparent shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
   
</body>
</html>
