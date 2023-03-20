@extends('layout.layout')

@section('page_title', 'SignUp Page')

@section('content')
    <section id="main">
        <div class="container">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('auth.signup') }}" method="post" enctype="multipart/form-data" class="signup">
                @csrf
                <input type="text" name="email" placeholder="Почта">
                <input type="text" name="username" placeholder="Имя пользователя">
                <input type="password" name="password" placeholder="Пароль">
                <input type="password" name="re_password" placeholder="Повторите пароль">
                <input type="file" name="photo">
                <br/>
                <button class="button">Зарегистрироваться</button>
            </form>
        </div>
    </section>
@endsection
