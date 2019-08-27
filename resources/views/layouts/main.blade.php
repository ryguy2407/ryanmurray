<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="/img/icon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <title>Ryan Murray - Web Developer - Brisbane, Queensland, Australia</title>
</head>
<body>

<header>
    <div class="logo text-center py-5">
        <a href="/">
            <img src="/img/logo.svg" alt="" width="300">
        </a>
    </div>
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('work.index') }}">My Work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://drive.google.com/open?id=1iACw1bb06MsRLsqrmUfipJMao1UhpT-V" target="_blank">My CV</a>
            </li>
            @if(Auth::user())
                <li class="nav-item">
                    <form action="/logout" method="post" class="p-2">
                        {{ csrf_field() }}
                        <button class="link">Hi {{ Auth::user()->name }} | Logout?</button>
                    </form>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            @endif
        </ul>
    </div>
</header>

<div class="container">
    @yield('content')

    <hr class="my-5">

    <p class="text-center mb-5">
        <a href="http://laravel.com" target="_blank">Proudly built using Laravel</a> - Ryan Murray {{ date('Y') }}
    </p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>