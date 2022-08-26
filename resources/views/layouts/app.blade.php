<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ $mainLink }}" aria-current="page" href="{{ route('home') }}">Главная страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ $articleLink  }}" href="{{ route('article.index') }}">Каталог статей</a>
                    </li>
                </ul>
                <a href="https://github.com/Khudayberdiyev0022" class="d-flex justify-content-end">
                    <i class="bi bi-github" style="font-size: 2rem; color: #000"></i>
                </a>
            </div>
        </div>
    </nav>

    @yield('hero')
    @yield('content')
    @yield('vue')
</div>
</body>
</html>
