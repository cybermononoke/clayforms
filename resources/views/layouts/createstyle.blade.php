<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .title-input {
            outline: none;
            width: 100%;
            color: #deefd5;
        }

        .content-input {
            outline: none;
            width: 100%;
            height: 150px;
            color: #deefd5;
        }

        .title-label,
        .content-label {
            font-family: 'MYFONT', sans-serif;
            color: #deefd5;
        }

        .submitbutton {
            font-family: 'MYFONT', sans-serif;
            background-color: transparent;
            border: none;
            color: #deefd5;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            float: right;
        }

        div .journal-content {
            font-family: 'MYFONT', sans-serif;
            color: #deefd5;
            max-height: 150px;
            overflow-y: hidden;
            position: relative;
        }
    </style>
</head>



<body>

    @yield('content')

</body>

</html>