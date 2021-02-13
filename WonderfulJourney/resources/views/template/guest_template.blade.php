<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    @if (Auth::check() == false)
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('/guesthome') }}>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href={{ url('/category/1') }}>Beach</a></li>
                                    <li><a class="dropdown-item" href={{ url('/category/2') }}>Mountain</a></li>
                                    <li><a class="dropdown-item" href={{ url('/category/3') }}>Lake</a></li>
                                    <li><a class="dropdown-item" href={{ url('/category/4') }}>River</a></li>
                                    <li><a class="dropdown-item" href={{ url('/category/5') }}>Forest</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('about_us') }}>About Us</a>
                            </li>
                        </ul>
                        <span class="navbar-text" style="margin-right: 20px">
                            <a class="nav-link" href={{ url('/register') }}>Sign Up</a>
                        </span>
                        <span class="navbar-text">
                            <a class="nav-link" href={{ url('/login') }}>Login</a>
                        </span>
                    @else
                        @if (Auth::user()->role == 'Admin')
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/home_admin') }}>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">User</a>
                                </li>
                            </ul>
                            <span class="navbar-text">
                                <a class="nav-link" href={{ url('/login') }}>Logout</a>
                            </span>
                        @elseif(Auth::user()->role == 'User')
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/home_admin') }}>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                            </ul>
                            <span class="navbar-text">
                                <a class="nav-link" href={{ url('/login') }}>Logout</a>
                            </span>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>
