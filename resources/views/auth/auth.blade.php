@extends('site.layouts.main')


@section('content')
<main class="autorization" >
<section class="autorization_container" id="autorization_container_main">
    <span class="autorization_container_header">
        <img src="{{ asset('site/assets/images/logoAuth.svg')}}"/>
        SITE NAME
    </span>
    <div class="autorization_container_main" >
        <span class="autorization_container_main-nav">
            <a href="#" id="loginLink" class="active">Войти</a>
            <a href="#" id="signupLink">Создать аккаунт</a>
        </span>
        <form action=""  method="post" id="authorizationForm">
            @csrf
            <input type="text" name="name" placeholder="Введите логин" id="loginInput">
            <input type="email" name="email" class="invalid" placeholder="Введите почтовый адрес" id="emailInput">

            <div class="password-container">
                <input name="password" type="password" id="passwordInput" placeholder="Введите пароль">
                <i class="password-icon" id="togglePassword"><img src="{{ asset('site/assets/images/password-eye.svg')}}" alt=""></i>
            </div>
            <span class="password-recovery">Забыли пароль? <a href="" id="password-recovery">Восстановить</a></span>

        <button type="submit" class="autorization_container_main-submit" id="submitButton"></button>
    </form>
    </div>
    <span class="autorization_container-policy">Создавая аккаунт в “Название” вы соглашаетесь с <a href="">пользовательским соглашением</a></span>
</section>
</main>
@endsection

@section('footer_desc')
    @include('site.inc.footer__auth_desc')
@endsection

@section('footer')
    @include('site.inc.footer_auth')
@endsection

@if(isset($scrollToForm) && $scrollToForm)
<script>
    window.onload = function() {
        var authForm = document.getElementById('autorization_container_main');
        authForm.scrollIntoView({ behavior: 'smooth' });
    };
</script>
@endif
