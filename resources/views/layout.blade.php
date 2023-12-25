<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tegal Citizen Xperience</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- js --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style>
        .choice{
            background-color: rgb(247, 247, 247);
        }
        .explain{
            position: absolute;
            width: 205px;
            height: 150px;
            background-color: rgb(247, 247, 247); 
            font-weight: bold;
            font-size: 14px;
            opacity: 0;
        }
        .explain:hover{
            opacity: 1;
            transition: 1s;
        }
        .choice:hover{
            cursor: pointer;
        }

    </style>

</head>

<body>
    
    <main class="">
        @yield('content')
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- icon --}}
    <script src="https://kit.fontawesome.com/2a4b093b57.js" crossorigin="anonymous"></script>
</body>

</html>
