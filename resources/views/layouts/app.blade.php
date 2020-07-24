<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

    <style>
        .container {
            max-width: 720px;
        }
    </style>
</head>
<body class="d-flex flex-row align-items-center">
<div class="container">
    <h3 class="text-center mb-4 text-primary">
        @yield('title')
    </h3>
    <div class="jumbotron bg-white shadow-sm border mb-2">
        @yield('content')
    </div>
    @if(\Illuminate\Support\Facades\Route::current()->getName() != 'welcome')
    <div>
        <a href="{{route('welcome')}}">	← в начальную страницу</a>
    </div>
    @endif
</div>
</body>
</html>
