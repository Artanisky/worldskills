@extends('layouts.dashboard')

@section('nav')
    <li class="nav-item">
        <a class="nav-link active" href="{{route('dashboard')}}">Заявки</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('templates')}}">Шаблоны</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('user-logout')}}">Выйти</a>
    </li>
@endsection

@section('content')
    <div>
        qweqeqwe
    </div>
@endsection
