<!-- resources/views/layouts/app.blade.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>

    <script src="{{ mix('js/alpine.js') }}" defer></script>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>


    <!-- Link for Karla font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap">
    <!-- Link for Inconsolata font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap">




    <title>CLAYFORMS</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ mix('css/journals.css') }}">
    <style>
        body {
            overflow: y-auto;

            font-family: 'Inconsolata', sans-serif;
            text-align: center;
            padding: 50px;
            background: url('{{ asset("images/color.png") }}') no-repeat center center fixed;
            background: linear-gradient();
            background-size: cover;
            display: grid;
            grid-template-rows: 1fr auto;
            min-height: 100vh;
        }

        main {
            grid-row: 1;
        }

        h1 {
            font-family: 'Karla', sans-serif;
            color: #F8C8DC;
            font-size: 6em;
            margin-top: 100px;

        }

        p {
            font-family: 'Inconsolata', sans-serif;
            color: #F8C8DC;

        }



        .bg {
            z-index: -1;
            position: fixed;
            top: -50%;
            left: -50%;
            right: -50%;
            bottom: -50%;
            width: 200%;
            height: 200vh;
            background: transparent url('http://assets.iceable.com/img/noise-transparent.png') repeat 0 0;
            background-repeat: repeat;
            animation: bg-animation .2s infinite;
            opacity: .9;
            visibility: visible;
        }



        @keyframes bg-animation {
            0% {
                transform: translate(0, 0)
            }

            10% {
                transform: translate(-5%, -5%)
            }

            20% {
                transform: translate(-10%, 5%)
            }

            30% {
                transform: translate(5%, -10%)
            }

            40% {
                transform: translate(-5%, 15%)
            }

            50% {
                transform: translate(-10%, 5%)
            }

            60% {
                transform: translate(15%, 0)
            }

            70% {
                transform: translate(0, 10%)
            }

            80% {
                transform: translate(-15%, 0)
            }

            90% {
                transform: translate(10%, 5%)
            }

            100% {
                transform: translate(5%, 0)
            }
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-family: 'Inconsolata', sans-serif;
            color: #F8C8DC;
            text-align: center;
        }



        .button {
            font-family: 'Karla', sans-serif;
            background-color: transparent;
            border: none;
            color: #F8C8DC;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

        }

        .button2 {
            font-family: 'Inconsolata', sans-serif;
            background-color: transparent;
            border: none;
            color: #F8C8DC;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

        }



        .journallistbutton {
            font-family: 'Inconsolata', sans-serif;
            background-color: transparent;
            border: none;
            color: #F8C8DC;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .recordbutton {
            font-family: 'Karla', sans-serif;
            background-color: transparent;
            border: none;
            color: #F8C8DC;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 36px;
            margin: 4px 2px;
            cursor: pointer;
        }


        .beginbutton {
            font-family: 'Karla', sans-serif;
            background-color: transparent;
            border: none;
            color: #F8C8DC;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 36px;
            margin: 4px 2px;
            cursor: pointer;

        }

        .title-input {
            font-family: 'Karla', sans-serif;
            background-color: transparent;
            border: 1px solid #F8C8DC;
            padding: 5px;
            margin-bottom: 10px;
            border-color: #F8C8DC;
        }

        .title-input:focus {

            outline: none;

        }

     

        /* focus:border-pink-500 focus:outline-none focus:ring-0 */
        .content-input {
            font-family: 'Karla', sans-serif;
            background-color: transparent;
            border: 1px solid #F8C8DC;
            padding: 5px;
            margin-bottom: 10px;
            resize: vertical;

        }


        .home-button {
            font-family: 'Karla', sans-serif;
            position: fixed;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: transparent;
            color: #F8C8DC;
            text-decoration: none;
            border-radius: 5px;
        }



        .menu-container {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 40px;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 4px;
            z-index: 1000;
        }

        .menu-link {
            padding: 10px;
            color: #F8C8DC;
            text-decoration: none;
            font-family: 'Karla', sans-serif;
        }

        .menu-link:hover {
            background-color: #1a1a1c;

        }



        *:focus {
            outline: 0;
        }

        .status-container {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: transparent;
        padding: 10px;
     
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    </style>

     
<div class="status-container">
    <p>ST4TUS</p>

    @if ($isLoggedIn)
        <p>logged in as {{ $user->name }}</p>
    @else
        <p>not logged in</p>
    @endif
</div>


</head>

<body>






    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>



    <!-- Animated Background -->
    <div class="bg"></div>


</body>



<!-- NAV MENU -->
<div x-data="{ open: false }" @click.away="open = false">
    <button @click="open = !open" class="home-button">M3NU</button>
    <div x-show="open" class="menu-container">
        <a href="/home" class="menu-link">H0M3</a>
        <a href="/journals" class="menu-link">R3C0RDS</a>
        <a href="/random-prompt" class="menu-link">PR0MPT5</a>
        <a href="/login" class="menu-link">L0G!N</a>
        <a href="/register" class="menu-link">R3G!ST3R</a>
        <a href="{{ route('about') }}" class="menu-link">4B0UT</a>
        <a href="/force-logout" class="menu-link">L0G0UT</a>

    </div>
</div>
<!-- NAV MENU -->



</html>