<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Aduan APP | @yield('title')</title>
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary bg-light">
    <div class="container">
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <b><a class="nav-link text-black " href="{{route('index')}}">Dashboard</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-black " href="{{route('index-complaints')}}">Data Pengaduan</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-black " href="{{route('create-complaint')}}">Pengaduan</a></b>
                </li>
                @auth
                    <li class="nav-item">
                        <b><a class="nav-link text-black ">@ {{auth()->user()->name}}</a></b>
                    </li>
                @endauth
            </ul>
            <div class="d-flex align-items-center">
                @guest
                    <a href="/login" class="btn btn-primary">Login</a>
                @endguest
                @auth
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
<main>
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                {{session()->get('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>
</main>
<script src="/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/assets/vendor/js/bootstrap.js"></script>
</body>
</html>
