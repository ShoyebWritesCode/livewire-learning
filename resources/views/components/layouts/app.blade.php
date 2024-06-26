<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <style>
        nav {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
            background-color: #f1f1f1;
        }
    </style>
    <body>
        <nav>
                <a href="/">Clock</a>
                <a href="/counter">Counter</a>
                <a href="/todo">Todo</a>
        </nav>
        {{ $slot }}
    </body>
</html>
