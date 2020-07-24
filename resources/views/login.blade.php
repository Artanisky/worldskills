@extends('layouts.app')

@section('title')
    Авторизация в системе
@endsection

@section('content')
    <form action="{{route('user-login')}}" method="POST">
        @csrf
            @error('login')
                <div class="alert alert-warning" role="alert">
                    {{ $message }}
                </div>
            @enderror

            @error('password')
                <div class="alert alert-warning" role="alert">
                    {{ $message }}
                </div>
            @enderror
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-warning" role="alert">
                {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif
        <div class="form-group">
            <label for="inputLogin">Логин</label>
            <input type="text" name="login" class="form-control form-control-lg" id="inputLogin">

        </div>
        <div class="form-group">
            <label for="InputPassword">Пароль</label>
            <input type="password" name="password" class="form-control form-control-lg" id="InputPassword">

        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="remember" type="checkbox" id="Checkbox" value="remember">
            <label class="form-check-label" for="Checkbox">Запомнить меня</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Submit</button>
    </form>
@endsection
