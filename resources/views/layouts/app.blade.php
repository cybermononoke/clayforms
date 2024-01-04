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
            background: url('{{ asset("images/1.png") }}') no-repeat center center fixed;
            background-size: cover;
            display: grid;
            grid-template-rows: 1fr auto;
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

        footer {
            grid-row: 2;
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


    </style>
</head>
<body>
    @yield('content')

   

</body>
</html>