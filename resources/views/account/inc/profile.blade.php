<section class="profile">
    <aside class="profile_side" id="account">
        <span class="profile_side-name">
            <img src="{{ asset('site/assets/images/profile/profileIcon.png')}}"/>

            <span>Привет,<br/><span class="nickname">{{$user->name}}</span></span>

            @if (session()->has('success'))
                <div id="success-message" style="color:#06B25F">
                    {{ session('success') }}
                </div>
            @elseif(session()->has('error'))
                <div id="success-message" style="color:red">
                    {{ session('error') }}
                </div>
                <script>
                    // Получаем элемент сообщения
                    var successMessage = document.getElementById('success-message');

                    // Если сообщение существует, то скрываем его через 5 секунд
                    if (successMessage) {
                        setTimeout(function() {
                            successMessage.style.display = 'none';
                        }, 5000); // 5000 миллисекунд = 5 секунд
                    }
                </script>
            @endif
        </span>
        <span class="profile_side-span active-tab" id="profileData">
            <svg width="36" height="37" class="profile-hover" viewBox="0 0 36 37" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.0041 24.975C16.2864 24.975 14.639 24.2928 13.4243 23.0785C12.2097 21.8642 11.5274 20.2173 11.5274 18.5C11.5274 16.7827 12.2097 15.1358 13.4243 13.9215C14.639 12.7072 16.2864 12.025 18.0041 12.025C19.7218 12.025 21.3692 12.7072 22.5838 13.9215C23.7985 15.1358 24.4808 16.7827 24.4808 18.5C24.4808 20.2173 23.7985 21.8642 22.5838 23.0785C21.3692 24.2928 19.7218 24.975 18.0041 24.975ZM31.7533 20.2945C31.8273 19.7025 31.8828 19.1105 31.8828 18.5C31.8828 17.8895 31.8273 17.279 31.7533 16.65L35.6578 13.6345C36.0094 13.357 36.1019 12.8575 35.8799 12.4505L32.1789 6.0495C31.9568 5.6425 31.4572 5.476 31.0501 5.6425L26.4423 7.4925C25.4801 6.771 24.4808 6.142 23.315 5.6795L22.6303 0.777003C22.5927 0.559105 22.4792 0.361543 22.3099 0.219324C22.1405 0.077104 21.9263 -0.000591583 21.7051 3.39192e-06H14.3031C13.8405 3.39192e-06 13.4519 0.333004 13.3778 0.777003L12.6932 5.6795C11.5274 6.142 10.5281 6.771 9.56583 7.4925L4.95809 5.6425C4.55098 5.476 4.05135 5.6425 3.82929 6.0495L0.128298 12.4505C-0.112267 12.8575 -0.00123669 13.357 0.350357 13.6345L4.2549 16.65C4.18088 17.279 4.12537 17.8895 4.12537 18.5C4.12537 19.1105 4.18088 19.7025 4.2549 20.2945L0.350357 23.3655C-0.00123669 23.643 -0.112267 24.1425 0.128298 24.5495L3.82929 30.9505C4.05135 31.3575 4.55098 31.5055 4.95809 31.3575L9.56583 29.489C10.5281 30.229 11.5274 30.858 12.6932 31.3205L13.3778 36.223C13.4519 36.667 13.8405 37 14.3031 37H21.7051C22.1677 37 22.5563 36.667 22.6303 36.223L23.315 31.3205C24.4808 30.8395 25.4801 30.229 26.4423 29.489L31.0501 31.3575C31.4572 31.5055 31.9568 31.3575 32.1789 30.9505L35.8799 24.5495C36.1019 24.1425 36.0094 23.643 35.6578 23.3655L31.7533 20.2945Z"/>
                </svg>

            Личные данные
        </span>
        <span class="profile_side-span" id="purchaseHistory">
            <svg width="36" height="35" class="profile-hover" viewBox="0 0 36 35" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.1053 29.1667V31.1111C34.1053 32.1425 33.706 33.1317 32.9954 33.861C32.2847 34.5903 31.3208 35 30.3158 35H3.78947C2.78444 35 1.82058 34.5903 1.10991 33.861C0.399247 33.1317 0 32.1425 0 31.1111V3.88889C0 2.85749 0.399247 1.86834 1.10991 1.13903C1.82058 0.409721 2.78444 0 3.78947 0H30.3158C31.3208 0 32.2847 0.409721 32.9954 1.13903C33.706 1.86834 34.1053 2.85749 34.1053 3.88889V5.83333H17.0526C16.0476 5.83333 15.0837 6.24305 14.3731 6.97236C13.6624 7.70167 13.2632 8.69082 13.2632 9.72222V25.2778C13.2632 26.3092 13.6624 27.2983 14.3731 28.0276C15.0837 28.7569 16.0476 29.1667 17.0526 29.1667H34.1053ZM17.0526 25.2778H36V9.72222H17.0526V25.2778ZM24.6316 20.4167C23.8778 20.4167 23.1549 20.1094 22.6219 19.5624C22.0889 19.0154 21.7895 18.2735 21.7895 17.5C21.7895 16.7265 22.0889 15.9846 22.6219 15.4376C23.1549 14.8906 23.8778 14.5833 24.6316 14.5833C25.3854 14.5833 26.1083 14.8906 26.6413 15.4376C27.1742 15.9846 27.4737 16.7265 27.4737 17.5C27.4737 18.2735 27.1742 19.0154 26.6413 19.5624C26.1083 20.1094 25.3854 20.4167 24.6316 20.4167Z"/>
                </svg>

            История покупок
        </span>
        <span class="profile_side-span" id="profileMessage">
           <div class="message-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                <path d="M18.1998 1.90039H3.79976C3.32237 1.90039 2.86453 2.09003 2.52696 2.4276C2.1894 2.76516 1.99976 3.223 1.99976 3.70039V19.9004L5.59976 16.3004H18.1998C18.6771 16.3004 19.135 16.1107 19.4725 15.7732C19.8101 15.4356 19.9998 14.9778 19.9998 14.5004V3.70039C19.9998 3.223 19.8101 2.76516 19.4725 2.4276C19.135 2.09003 18.6771 1.90039 18.1998 1.90039ZM5.59976 8.20039H16.3998V10.0004H5.59976V8.20039ZM12.7998 12.7004H5.59976V10.9004H12.7998V12.7004ZM16.3998 7.30039H5.59976V5.50039H16.3998" fill="black"/>
                </svg>
                <span>3</span>
           </div>

            Сообщение
        </span>
        <span class="profile_side-span-last">
            <div class="buttons-language-container profile-language">
                <button class="buttons-language">
                    <img src="{{ asset('site/assets/images/header/EN.png')}}" alt="ru">
                    EN
                    <img src="{{ asset('site/assets/images/dropdown.svg')}}" alt="down">

                </button>
                <button class="buttons-language-switch">
                    <img src="{{ asset('site/assets/images/header/Ru.svg')}}" alt="ru">
                    RU
                    <img style="visibility: hidden;" src="{{ asset('site/assets/images/dropdown.svg')}}" alt="down">

                </button>
            </div>
            <div class="profile_side-span-last-balance">
                <span class="balance-add">Баланс
                    <svg id="openModal"  xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M18.4167 14.0833H14.0833V18.4167H11.9167V14.0833H7.58333V11.9167H11.9167V7.58333H14.0833V11.9167H18.4167V14.0833ZM20.5833 3.25H5.41667C4.21417 3.25 3.25 4.21417 3.25 5.41667V20.5833C3.25 21.158 3.47827 21.7091 3.8846 22.1154C4.29093 22.5217 4.84203 22.75 5.41667 22.75H20.5833C21.158 22.75 21.7091 22.5217 22.1154 22.1154C22.5217 21.7091 22.75 21.158 22.75 20.5833V5.41667C22.75 4.84203 22.5217 4.29093 22.1154 3.8846C21.7091 3.47827 21.158 3.25 20.5833 3.25Z" fill="white"/>
                      </svg>
                </span>
                <span class="balance-current">{{$user->balance}} <s>BS</s></span>

            </div>
            <a href="" class="notification-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M24.2377 21.9625V23.1H3.7627V21.9625L6.0377 19.6875V12.8625C6.0377 9.33625 8.34682 6.23087 11.7252 5.22987V4.9C11.7252 4.29663 11.9649 3.71798 12.3915 3.29133C12.8182 2.86469 13.3968 2.625 14.0002 2.625C14.6036 2.625 15.1822 2.86469 15.6089 3.29133C16.0355 3.71798 16.2752 4.29663 16.2752 4.9V5.22987C19.6536 6.23087 21.9627 9.33625 21.9627 12.8625V19.6875L24.2377 21.9625ZM16.2752 24.2375C16.2752 24.8409 16.0355 25.4195 15.6089 25.8462C15.1822 26.2728 14.6036 26.5125 14.0002 26.5125C13.3968 26.5125 12.8182 26.2728 12.3915 25.8462C11.9649 25.4195 11.7252 24.8409 11.7252 24.2375" fill="black"/>
                  </svg>
                  <span>2</span>
                </a>
        </span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button  type="submit"  class="exit-profile">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 21L19 21C20.11 21 21 20.11 21 19L21 15L19 15L19 19L5 19L5 5L19 5L19 9L21 9L21 5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3L5 3C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21072 3.96086 3 4.46956 3 5L3 19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21ZM13.92 8.42L12.5 7L7.5 12L12.5 17L13.92 15.59L11.33 13L21 13L21 11L11.33 11L13.92 8.42Z" fill="#F13939"/>
                </svg>
                Выйти из аккаунта
            </button>
        </form>
    </aside>

    <div style="display: none;" class="profile_support">
        
        <div class="chat_list">
            <a href="" class="chat_list-item">
                <span class="chat_list-item-left">
                    <img src="./assets/images/Ellipse 2.png"/>
                    <span>
                        <label>Support</label>
                        <p>Dinner</p>
                    </span>
                </span>
                <span class="chat_list-item-right">
                    <span>Today, 8:56pm</span>
                    <div class="chat_list-item-right-messages">2</div>
                </span>
            </a>
        </div>

        <div class="chat profile_chat">
            <div class="chat_header">

            <span class="chat_header_to">
                {{-- <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/> --}}
                <span>Admin</span>
            </span>
            <span class="chat_header-underline"></span>
            </div>
            <div class="chat_main">
                {{-- <div class="chat_main_from">
                    <label class="chat_main_from-date">Сьогодні о 7:15</label>
                    <span>
                        <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/>
                        <p>Lorem ipsum dolor sifdsfdsfdsfst amet, consectetuer</p>
                    </span>
                    <span>
                        <img src=""/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                    </span>

                </div> --}}
                <div class="chat_main_to">
                    {{-- <label class="chat_main_to-date">Сьогодні о 7:15</label>
                    <span>
                        <img src=""/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                    </span> --}}

                </div>

                <div class="chat_main_from">
                    <label class="chat_main_from-date">Сьогодні о 7:15</label>
                    <span>
                        {{-- <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/> --}}
                        <p>123</p>
                    </span>
                    <span>
                        {{-- <img src=""/> --}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p> --}}
                    </span>

                </div>
            </div>
            <div class="chat_footer">
                <span>
                    <input class="chat_footer-text" id="message" type="text" placeholder="Напишите продавцу перед оплатой">
                    <div class="image-upload">
                        <label for="file-input">
                            <img src="{{ asset('site/assets/images/gallery.svg')}}"/>
                        </label>

                        {{-- <input id="file-input" type="file"/> --}}
                    </div>
                    <button id="send-button">Відправити</button>
                </span>
            </div>
        </div>
    </div>


   @include('account.inc.table_product')
   @include('account.inc.modal_balance')

    <div class="profile_settings">
        <div class="profile_settings-item">
            <label>Уведомления</label>
            <div class="profile_settings-item-switch">
                <label class="switch_features" for="checkbox">
                    <input type="checkbox" id="checkbox" checked />
                    <div class="slider_features round"></div>
                    <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                </label>
                Новости платформы
            </div>

        </div>
        <div class="profile_settings-item">
            <label>Язык интерфейса</label>
            <div class="profile_settings-item-switch">
                <span class="profile_settings-item-label">Язык</span>
                <span class="profile_settings-item-language">
                    <img src="{{ asset('site/assets/images/RU.png')}}" alt="">
                    Русский
                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.41 0.580078L6 5.17008L10.59 0.580078L12 2.00008L6 8.00008L0 2.00008L1.41 0.580078Z" fill="#F8F8F8"/>
                        </svg>

                </span>
                <div style="display: none;" class="language_selector">
                    <span class="language_selector-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15.5 14H14.71L14.43 13.73C15.0549 13.0039 15.5117 12.1487 15.7675 11.2256C16.0234 10.3024 16.072 9.33413 15.91 8.38998C15.44 5.60998 13.12 3.38997 10.32 3.04997C9.33559 2.92544 8.33576 3.02775 7.397 3.34906C6.45824 3.67038 5.60542 4.20219 4.90381 4.90381C4.20219 5.60542 3.67038 6.45824 3.34906 7.397C3.02775 8.33576 2.92544 9.33559 3.04997 10.32C3.38997 13.12 5.60998 15.44 8.38998 15.91C9.33413 16.072 10.3024 16.0234 11.2256 15.7675C12.1487 15.5117 13.0039 15.0549 13.73 14.43L14 14.71V15.5L18.25 19.75C18.66 20.16 19.33 20.16 19.74 19.75C20.15 19.34 20.15 18.67 19.74 18.26L15.5 14ZM9.49997 14C7.00997 14 4.99997 11.99 4.99997 9.49997C4.99997 7.00997 7.00997 4.99997 9.49997 4.99997C11.99 4.99997 14 7.00997 14 9.49997C14 11.99 11.99 14 9.49997 14Z" fill="#BFBFBF"/>
                            </svg>
                    <input type="text" placeholder="Поиск">

                    </span>
                    <div class="language_selector_list">
                        <a href="#" class="language_selector_list-item">
                            <img src="{{ asset('site/assets/images/profile/flags/flag.png')}}" alt="">
                            Австрия
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Франция
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Турция
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Грузия
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Украина
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Норвегия
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Испания
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Португалия
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Иерусалим
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Уганда
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Англия
                        </a>
                        <a href="#" class="language_selector_list-item">
                            <img src="./assets/images/profile/flags/flag.png" alt="">
                            Швеция
                        </a>

                    </div>
                </div>
            </div>

        </div>

        <div class="profile_settings-item">
            <label>Данные аккаунта</label>
            <div class="profile_settings-item-data">
                <span class="profile_settings-item-data-row">
                    <span class="profile_settings-item-label">Login:</span>
                    {{$user->name}}
                </span>

                <span class="profile_settings-item-data-row">
                    <span class="profile_settings-item-label">Mail:</span>
                       {{$user->email}}
                </span>

            </div>

        </div>
        <div class="profile_settings-item">
            <label>Изменить пароль</label>
            <a id="changePassword" href="">Изменить</a>
            <form style="display: none;" class="password_change" action="{{ route('changePassword') }}" method="post">
                @csrf
                <label for="">Старый пароль</label>
                <div class="password-container">
                    <input type="password" name="old_password" id="passwordInput" autocomplete="current-password" placeholder="Введите пароль">
                </div>
                <span class="password_change-new">
                    <label for="newPassword">Новый пароль</label>
                    <div class="password-container">
                        <input type="password" name="new_password" id="newPassword" class="newPassword" autocomplete="new-password" placeholder="Введите пароль">
                        <i class="password-icon toggle-password"><img src="{{ asset('site/assets/images/password-eye.svg')}}" alt=""></i>
                    </div>
                    <label for="confirmPassword">Повторите новый пароль</label>
                    <div class="password-container">
                        <input type="password" name="new_password_confirmation" id="confirmPassword" class="newPassword" autocomplete="new-password" placeholder="Введите пароль">
                        <i class="password-icon toggle-password"><img src="{{ asset('site/assets/images/password-eye.svg') }}" alt=""></i>
                    </div>
                </span>
                <button type="submit" class="password_change-submit"> Изменить</button>
            </form>
        </div>
    </div>

</section>
@if(isset($scrollToAccount) && $scrollToAccount)
<script>
    window.onload = function() {
        var scroll = document.getElementById('account');
        scroll.scrollIntoView({ behavior: 'smooth' });
    };
</script>
@endif
