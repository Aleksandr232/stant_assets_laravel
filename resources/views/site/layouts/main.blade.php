<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="{{ asset('site/assets/scss/style.css')}}?v={{ time() }}">
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body>

    <div class="wrapper {{ request()->routeIs('auth') || request()->routeIs('account')  ? 'autorization-page' : '' }}">
        <header>
            @include('site.inc.header')
        </header>
        <main>
            @yield('content')
        </main>
            @yield('footer_desc')
        <footer>
            @yield('footer')
        </footer>
        @include('site.inc.right__socials')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('site/js/index.js')}}?v={{ time() }}"></script>
    <script>
        const loginLink = document.getElementById('loginLink');
        const signupLink = document.getElementById('signupLink');
        const authorizationForm = document.getElementById('authorizationForm');
        const submitButton = document.getElementById('submitButton');


        loginLink.classList.add('active');
        signupLink.classList.remove('active');
        authorizationForm.action = "{{ route('login') }}";
        submitButton.textContent = 'Войти';

        loginLink.addEventListener('click', () => {
            loginLink.classList.add('active');
            signupLink.classList.remove('active');
            authorizationForm.action = "{{ route('login') }}";
            submitButton.textContent = 'Войти';
        });

        signupLink.addEventListener('click', () => {
            signupLink.classList.add('active');
            loginLink.classList.remove('active');
            authorizationForm.action = "{{ route('register') }}";
            submitButton.textContent = 'Создать';
        });
    </script>
   

</body>

</html>
