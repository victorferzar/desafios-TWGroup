<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TWGroup - @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="antialiased">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Desafío 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/desafio2">Desafío 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/desafio3">Desafío 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/desafio4">Desafío 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Desafío 5</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>
