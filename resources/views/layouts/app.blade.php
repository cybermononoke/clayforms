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



@auth
    <title>CLAYFORMS</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ mix('css/journals.css') }}">
    <style>
        body {
            overflow: y-auto;

            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
            background-image: url('{{ asset(Auth::user()->background_image ?? "grad.png") }}');
            background: linear-gradient();
            background-size: cover;
            display: grid;
            grid-template-rows: 1fr auto;
            /* Adjust the second value as needed */
            min-height: 100vh;
        }

        main {
            grid-row: 1;
        }

        h1 {
            font-family: 'MYFONT', sans-serif;
            color: #fff;
            font-size: 6em;
            margin-top: 100px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-family: 'YOURFONT', sans-serif;
            color: #fff;
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
            font-family: 'YOURFONT', sans-serif;
            color: white;
            text-align: center;
        }



        .button {
            font-family: 'MYFONT', sans-serif;
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .journallistbutton {
            font-family: 'YOURFONT', sans-serif;
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .recordbutton {
            font-family: 'MYFONT', sans-serif;
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 36px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .beginbutton {
            font-family: 'MYFONT', sans-serif;
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 36px;
            margin: 4px 2px;
            cursor: pointer;
        }


        .title-input {
            font-family: 'MYFONT', sans-serif;
            background-color: transparent;
            border: 1px solid #ccc;
            padding: 5px;
            margin-bottom: 10px;
        }

        .content-input {
            font-family: 'MYFONT', sans-serif;
            background-color: transparent;
            border: 1px solid #ccc;
            padding: 5px;
            margin-bottom: 10px;
            resize: vertical;

        }


        .home-button {
            font-family: 'MYFONT', sans-serif;
            position: fixed;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: transparent;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }



        .menu-container {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 40px;
            /* Adjust the distance from the button */
            background-color: transparent;
            /* Your desired background color */
            border: 1px solid #4a5568;
            /* Your desired border color */
            border-radius: 4px;
            z-index: 1000;
            /* Ensure it appears above other elements */
        }

        .menu-link {
            padding: 10px;
            color: #fff;
            /* Your desired text color */
            text-decoration: none;
            font-family: 'MYFONT', sans-serif;
            /* Your font-family */
        }

        .menu-link:hover {
            background-color: #47585C;
            /* Your desired hover background color */
        }
    </style>
@endauth


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
    <div x-data="{ open: false }">
        <button @click="open = !open" class="home-button">M3NU</button>
        <div x-show="open" class="menu-container">
            <a href="/home" class="menu-link">H0M3</a>
            <a href="/journals" class="menu-link">J0URN4LS</a>
            <a href="/login" class="menu-link">L0G!N</a>
            <a href = "/options" class = "menu-link">0PT!0NS</a>
            <a href="/force-logout" class="menu-link">L0G0UT</a>
            
        </div>
    </div>
    <!-- NAV MENU -->



</html>