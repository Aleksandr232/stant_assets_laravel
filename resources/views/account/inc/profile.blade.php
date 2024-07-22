<section class="profile">
    <aside class="profile_side">
        <span class="profile_side-name">
            <img src="{{ asset('site/assets/images/profile/profileIcon.png')}}"/>

            <span>Привет,<br/><span class="nickname">{{$user->name}}</span></span>


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
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M18.4167 14.0833H14.0833V18.4167H11.9167V14.0833H7.58333V11.9167H11.9167V7.58333H14.0833V11.9167H18.4167V14.0833ZM20.5833 3.25H5.41667C4.21417 3.25 3.25 4.21417 3.25 5.41667V20.5833C3.25 21.158 3.47827 21.7091 3.8846 22.1154C4.29093 22.5217 4.84203 22.75 5.41667 22.75H20.5833C21.158 22.75 21.7091 22.5217 22.1154 22.1154C22.5217 21.7091 22.75 21.158 22.75 20.5833V5.41667C22.75 4.84203 22.5217 4.29093 22.1154 3.8846C21.7091 3.47827 21.158 3.25 20.5833 3.25Z" fill="white"/>
                      </svg>
                </span>
                <span class="balance-current">12323 <s>BS</s></span>

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

            <a href="#" class="chat_list-item">
                <span class="chat_list-item-left">
                    <img src="{{ asset('site/assets/images/Ellipse 2.png')}}"/>
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
            <a href="" class="chat_list-item">
                <span class="chat_list-item-left">
                    <img src="{{ asset('site/assets/images/Ellipse 2.png')}}"/>
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
                <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/>
                <span>Admin</span>
            </span>
            <span class="chat_header-underline"></span>
            </div>
            <div class="chat_main">
                <div class="chat_main_from">
                    <label class="chat_main_from-date">Сьогодні о 7:15</label>
                    <span>
                        <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/>
                        <p>Lorem ipsum dolor sifdsfdsfdsfst amet, consectetuer</p>
                    </span>
                    <span>
                        <img src=""/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                    </span>

                </div>
                <div class="chat_main_to">
                    <label class="chat_main_to-date">Сьогодні о 7:15</label>
                    <span>
                        <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/>
                        <p>Lorem ipsum dolor sit amet, consectetuer</p>
                    </span>
                    <span>
                        <img src=""/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                    </span>

                </div>

                <div class="chat_main_from">
                    <label class="chat_main_from-date">Сьогодні о 7:15</label>
                    <span>
                        <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png"/>
                        <p>Lorem ipsum dolor sit amet, consectetuer</p>
                    </span>
                    <span>
                        <img src=""/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                    </span>

                </div>
            </div>
            <div class="chat_footer">
                <span>
                   {{--  <div id="chat-messages" class="mb-3"></div>
                <form id="chat-form">
                    <div class="input-group">
                        <input class="chat_footer-text" id="chat-input" type="text" placeholder="Напишите продавцу перед оплатой">
                        <div class="image-upload">
                            <label for="file-input">
                                <img src="./assets/images/gallery.svg"/>
                            </label>

                             <input id="file-input" type="file"/>
                        </div>
                        <button type="submit">Відправити</button>
                    </div>
                </form> --}}
                    <input class="chat_footer-text" type="text" placeholder="Напишите продавцу перед оплатой">
                    <div class="image-upload">
                        <label for="file-input">
                            <img src="./assets/images/gallery.svg"/>
                        </label>

                        <input id="file-input" type="file"/>
                    </div>
                    <button>Відправити</button>
                </span>
            </div>
        </div>
    </div>


   <div style="display: none; width: 100%;" class="profile_history">
    <table>
        <thead>
            <tr>
                <th><button class="head_button">
                        Дата
                        <div class="head_button_row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 10L8 6H2L5 10Z" fill="#F4C038"/>
                                <path d="M5 0L8 4H2L5 0Z" fill="#F4C038"/>
                              </svg>
                        </div>
                    </button></th>
                <th>
                    <button class="head_button">
                        Продукт
                        <div class="head_button_row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 10L8 6H2L5 10Z" fill="#F4C038"/>
                                <path d="M5 0L8 4H2L5 0Z" fill="#F4C038"/>
                              </svg>
                        </div>
                    </button>
                </th>
                <th>
                    <button class="head_button">
                        Transaction ID
                        <div class="head_button_row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 10L8 6H2L5 10Z" fill="#F4C038"/>
                                <path d="M5 0L8 4H2L5 0Z" fill="#F4C038"/>
                              </svg>
                        </div>
                    </button>
                </th>
                <th> <button class="head_button">
                Сумма
                    <div class="head_button_row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                            <path d="M5 10L8 6H2L5 10Z" fill="#F4C038"/>
                            <path d="M5 0L8 4H2L5 0Z" fill="#F4C038"/>
                          </svg>
                    </div>
                </button>
                </th>
                <th>Данные об аккаунте</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">

                         <span class="success">Посмотреть</span>
                         <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5925 8.2775L9.32248 14.5475L6.44873 11.6737L7.18546 10.937L9.32248 13.0688L14.8558 7.54077L15.5925 8.2775Z" fill="#6FFF57"/>
                            <circle cx="11" cy="11" r="9.5" stroke="#6FFF57" stroke-width="3"/>
                            </svg>

                        <div style="display: none;" class="item_information">
                            <a href="#"  class="item_information-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 60 60" fill="none">
                                    <rect x="21.0712" y="37.0712" width="22" height="2" rx="1" transform="rotate(-45 21.0712 37.0712)" fill="#8D97A2"></rect>
                                    <rect x="36.6273" y="38.4854" width="22" height="2" rx="1" transform="rotate(-135 36.6273 38.4854)" fill="#8D97A2"></rect>
                                </svg>
                            </a>


                            <span class="item_information-row header">
                                <b>Game Accouunt #1</b>
                            </span>

                            <span class="item_information-row">
                                Account ID: <b>rwgrsgsdgsddsfger</b>
                            </span>
                            <span class="item_information-row">
                                Password: <b>rwgrsgsdgsd</b>
                            </span>
                            <span class="item_information-row wrap">
                                Account email: <b>rwgrsgsdgsd</b>
                            </span>
                            <span class="item_information-row wrap">
                                Email password: <b>rwgrsgsdgsd</b>
                            </span>
                            <span class="item_information-row wrap">
                                Email link: <b>rwgrsgsdgsd</b>
                            </span>
                            <span class="item_information-row wrap">
                                Additional note:
                                <b>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </b>
                            </span>
                        </div>


                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update"  width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          Оплачен

                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.3 13.2L9 10.3V5H10.5V9.4L15 11.9L14.3 13.2V13.2Z" fill="#4CBF39"/>
                            </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status">
                        Доставлен
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="item_data">
                        20.09.2021
                        <span>19:55</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        ARK : Survival Ascended
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        9467393
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        $12.23
                    </div>
                </td>
                <td>
                    <div class="item_status error">
                        <svg xmlns="http://www.w3.org/2000/svg" class="item_status-update" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2164_525)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.34317 4.34316C2.56642 6.11991 1.79962 8.52332 2.04442 10.8445C2.10235 11.3938 1.70406 11.886 1.15482 11.9439C0.60558 12.0018 0.113378 11.6035 0.0554543 11.0543C-0.249936 8.15855 0.707351 5.15055 2.92896 2.92895C6.8342 -0.976296 13.1659 -0.976296 17.0711 2.92895C17.4974 3.3552 17.8776 3.81102 18.2114 4.29008C18.5272 4.74318 18.4159 5.36648 17.9628 5.68226C17.5097 5.99804 16.8864 5.88671 16.5706 5.43361C16.3039 5.05085 15.9994 4.68567 15.6569 4.34316C12.5327 1.21897 7.46737 1.21897 4.34317 4.34316Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 6V1C19 0.447715 18.5523 0 18 0C17.4477 -1.68587e-07 17 0.447715 17 1L17 4H14C13.4477 4 13 4.44772 13 5C13 5.55228 13.4477 6 14 6H19Z" fill="white"/>
                              <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6569 15.6063C17.4336 13.8296 18.2004 11.4261 17.9556 9.10492C17.8977 8.55568 18.296 8.06348 18.8452 8.00556C19.3945 7.94763 19.8867 8.34592 19.9446 8.89516C20.25 11.7909 19.2927 14.7989 17.0711 17.0205C13.1659 20.9258 6.83421 20.9258 2.92897 17.0205C2.50271 16.5943 2.12248 16.1384 1.78862 15.6594C1.47285 15.2063 1.58417 14.583 2.03728 14.2672C2.49038 13.9514 3.11368 14.0628 3.42946 14.5159C3.69621 14.8986 4.00067 15.2638 4.34318 15.6063C7.46737 18.7305 12.5327 18.7305 15.6569 15.6063Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00007 13.9495V18.9495C1.00007 19.5017 1.44778 19.9495 2.00007 19.9495C2.55235 19.9495 3.00006 19.5017 3.00006 18.9495L3.00007 15.9495H6.00007C6.55235 15.9495 7.00007 15.5017 7.00007 14.9495C7.00007 14.3972 6.55235 13.9495 6.00007 13.9495H1.00007Z" fill="white"/>
                              </g>
                            </g>
                            <defs>
                              <clipPath id="clip0_2164_525">
                                <rect width="20" height="20" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                          503 ERROR

                          <svg xmlns="http://www.w3.org/2000/svg" class="errorIcon errorIcon-active" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="#D93855"/>
                            <g opacity="0.5">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10 6C8.89543 6 8 6.89543 8 8C8 8.55228 7.55228 9 7 9C6.44772 9 6 8.55228 6 8C6 5.79086 7.79086 4 10 4C12.2091 4 14 5.79086 14 8C14 8.88351 13.7486 9.5781 13.3113 10.1232C12.8996 10.6363 12.3746 10.9475 11.9867 11.1636C11.9028 11.2103 11.8267 11.2522 11.7573 11.2904C11.4544 11.457 11.2787 11.5536 11.1388 11.6799C11.0408 11.7684 11 11.8318 11 12C11 12.5523 10.5523 13 10 13C9.44772 13 9 12.5523 9 12C9 11.1973 9.33423 10.6146 9.79866 10.1953C10.1302 9.89603 10.5578 9.66413 10.8631 9.49856C10.9175 9.4691 10.9679 9.44173 11.0133 9.41646C11.3754 9.2147 11.6004 9.05971 11.7512 8.87165C11.8764 8.7156 12 8.47411 12 8C12 6.89543 11.1046 6 10 6Z" fill="#D93855"/>
                              <path d="M11 15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15C9 14.4477 9.44772 14 10 14C10.5523 14 11 14.4477 11 15Z" fill="#D93855"/>
                            </g>
                          </svg>

                    </div>
                </td>
                <td>
                    <div class="item_status error">
                        Неудача
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
   </div>

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
            <form style="display: none;" class="password_change">

                    <label for="">Старый пароль</label>
                    <div class="password-container">
                        <input type="password" id="passwordInput" autocomplete="current-password" placeholder="Введите пароль">

                    </div>
                    <span class="password_change-new">
                        <label for="newPassword">Новый пароль</label>
                        <div class="password-container">
                            <input type="password" id="newPassword" class="newPassword" autocomplete="new-password" placeholder="Введите пароль">
                            <i class="password-icon toggle-password"><img src="./assets/images/password-eye.svg" alt=""></i>
                        </div>
                        <label for="confirmPassword">Повторите новый пароль</label>
                        <div class="password-container">
                            <input type="password" id="confirmPassword" class="newPassword" autocomplete="new-password" placeholder="Введите пароль">
                            <i class="password-icon toggle-password"><img src="./assets/images/password-eye.svg" alt=""></i>
                        </div>
                    </span>

                    <a href="" class="password_change-submit"> Изменить</a>



            </form>
        </div>
    </div>

</section>
