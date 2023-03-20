@extends('layout.layout')

@section('page_title', 'SignIn Page')

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

            <form action="{{ route('auth.signin') }}" method="post" enctype="multipart/form-data" class="signup">
                @csrf

                <input type="email" name="email" placeholder="Почта">
                <input type="password" name="password" placeholder="Пароль">
                <br/>

                <button class="button">Войти</button>
            </form>
        </div>
    </section>
@endsection
