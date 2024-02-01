<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Aduan APP | @yield('title')</title>
    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-text text-capitalize demo menu-text fw-bolder">Aduan APP</span>
                </a>
            </div>
            <hr />
            <div class="menu-inner-shadow"></div>
            <ul class="menu-inner py-1">
                <li class="menu-item {{ request()->routeIs('index-complaint') ? 'active' : '' }}">
                    <a href="{{ route('index-complaint') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-comment"></i>
                        <div>Aduan Masyarakat</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('index-category') ? 'active' : '' }}">
                    <a href="{{ route('index-category') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-category"></i>
                        <div>Kategori Aduan</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('index-response') ? 'active' : '' }}">
                    <a href="{{ route('index-response') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-message"></i>
                        <div>Tanggapan Aduan</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('index-user') ? 'active' : '' }}">
                    <a href="{{ route('index-user') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div>Data Masyarakat</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('index-admin') ? 'active' : '' }}">
                    <a href="{{ route('index-admin') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div>Data Admin</div>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="layout-page">
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">{{auth()->user()->name}}</span>
                                                <small class="text-muted">{{auth()->user()->level}}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                <div class="container mt-5">
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
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/assets/vendor/js/bootstrap.js"></script>
</body>
</html>
