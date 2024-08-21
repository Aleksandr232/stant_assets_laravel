
    <nav>
        <a href="{{ route('home') }}"><img class="nav-logo" src="{{ asset('site/assets/images/header/logo.svg')}}" alt="logo" /></a>
        <ul class="nav_ul">
            <li><a href="">Покупка</a></li>
            <li><a href="">Gararafkskf[a[kasf</a></li>
            <li><a href="">Поддержка</a></li>
        </ul>
        <div class="nav_links">
            <div class="nav_links-second">
                <div class="buttons">
                    <div class="buttons-dropdown-other">
                        <button href="" class="buttons-other">
                            Другое
                            <img src="{{ asset('site/assets/images/dropdown.svg')}}" alt="down">
                        </button>
                        <ul class="sub-menu">
                            <li><a href="">Contacts</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Join the US</a></li>
                        </ul>
                    </div>
                    <div class="buttons-dropdown">
                        <button href="" class="buttons-other">
                            USD $
                            <img src="{{ asset('site/assets/images/dropdown.svg')}}" alt="down">

                        </button>
                        <ul class="sub-menu">
                            <li><a href="">UA ₴</a></li>
                            <li><a href="">EURO €</a></li>
                            <li><a href="">RU ₽</a></li>
                        </ul>
                    </div>

                    <div class="buttons-language-container">
                        <button class="buttons-language">
                            <img src="{{ asset('site/assets/images/header/Ru.svg')}}" alt="ru">
                            RU
                            <img src="{{ asset('site/assets/images/dropdown.svg')}}" alt="down">
                        </button>
                        <button class="buttons-language-switch">
                            <img src="{{ asset('site/assets/images/header/EN.png')}}" alt="ru">
                            EN
                            <img style="visibility: hidden;" src="{{ asset('site/assets/images/dropdown.svg')}}" alt="down">
                        </button>
                    </div>


                </div>
                @if(auth()->check() && auth()->user()->is_admin)
                    <a  href="{{ route('admin') }}" class="nav_links-second-profile">Мой кабинет</a>
                @elseif(auth()->check() && auth()->user())
                    <a  href="{{ route('account') }}" class="nav_links-second-profile">Мой кабинет</a>
                @else
                    <a  href="{{ route('auth') }}" class="nav_links-second-profile">Мой кабинет</a>
                @endif

            </div>
        </div>
        <div class="nav_burger-container">
            <button id="burger-btn" class="nav_burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="nav_burger-menu">
                <ul>
                    <li><a href="">Покупка</a></li>
                    <li><a href="">Гарантии</a></li>
                    <li><a href="">Поддержка</a></li>
                    @if(auth()->check() && auth()->user()->is_admin)
                        <li><a href="{{ route('admin') }}">Мой кабинет</a></li>
                    @else
                        <a href="#" class="security"></a>
                    @endif
                </ul>
            </div>


        </div>

    </nav>

    <div class="main-page">
        <div class="main-page-head">
            @foreach ($text as $post)
            <h1>{{$post->text_h1}}</h1>
            <p>{{$post->text_p}}</p>
            @endforeach
        </div>

        <div class="main-page-footer">
            <div class="main-page-footer-buttons">
                <a href=""
                    class="inline-flex w-48 justify-center gap-x-1.5 rounded-md px-3 py-4 shadow-sm ring-1 ring-inset ring-gray-600 items-center hover:bg-green-500">More</a>
                <a href=""
                    class="inline-flex w-48 justify-center gap-x-1.5 rounded-md px-3 py-4 shadow-sm ring-1 ring-inset ring-gray-600 items-center hover:bg-green-500">Contact
                    Us</a>
            </div>
            <!-- Slider indicators -->
            <div class="slider">
                <button class="active" type="button"></button>
                <button type="button"></button>
                <button type="button"></button>
            </div>
        </div>

    </div>


