<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post-it Manager</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <h1>Salut les amis!! C'est parti pour gerer les Post-its... 😀</h1>
        <p>Aujourd'hui c'est le {{ date('d-m-Y') }} et il est {{ date('h:i A ') }}</p>
    </body>
</html>
