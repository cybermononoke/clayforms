<!-- resources/views/layouts/x-guest-layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<style>
    body {
        color: #F8C8DC;
        background-color: #1b1c1e;
    }

    
    .input:focus {
        border-color: #FFF;
       
        outline: none;
       
        box-shadow: none;
       
    }

    .custom-color {
        color: #3b3c40;
    }

    .custom-color:hover {
        color: #3b3c40;
        
    }



    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #1b1c1e inset !important; /* Set the background color */
        -webkit-text-fill-color: #F8C8DC !important; /* Set the text color */
    }

    
</style>

<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent">
        <div>

        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-transparent shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</body>

</html>