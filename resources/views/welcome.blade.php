@extends('layouts.app')

@section('title')
    Система управление пропусками
@endsection

@section('content')
    <div class="text-center">
        <p class="lead">Добро пожаловать на сайт.</p>
        <a class="btn btn-light btn-lg" href="#" role="button">Подать заявку</a>
        <a class="btn btn-light btn-lg" href="{{route('login')}}" role="button">Вход в систему</a>
    </div>
@endsection
