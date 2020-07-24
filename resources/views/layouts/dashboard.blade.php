<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head>
<body>
<nav class="py-3 navbar navbar-light bg-white border-bottom">
    <span class="navbar-brand mb-0 h1 text-primary">Панель управление администратора</span>
    <ul class="nav nav-pills">
        @yield('nav')
    </ul>
</nav>
<div class="content pt-4">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>
