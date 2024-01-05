<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"> -->

    <title>CLAYFORMS</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ mix('css/journals.css') }}">
    <style>

    
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
            background: url('{{ asset("images/grad.png") }}') no-repeat center center fixed;
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
            color: #deefd5;
            font-size: 6em;
            margin-top: 100px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-family: 'YOURFONT', sans-serif;
            color: #deefd5;
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
            color: #deefd5;
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
            color: #deefd5;
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
            color: #deefd5;
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
            color: #deefd5;
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
            color: #deefd5;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>

</head>











<body>
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>
    <!-- Animated Background -->
    <div class="bg"></div>
</body>




</html>