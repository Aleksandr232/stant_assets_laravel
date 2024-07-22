<section class="product_container">
    <div class="product_container_header">
        <h1>Купить {{$order->product}}</h1>
        <span class="product_container_header-rate">
            <div>
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"
                        fill="#F44E51" stroke="#F44E51" />
                </svg>
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"
                        fill="#F44E51" stroke="#F44E51" />
                </svg>
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"
                        fill="#F44E51" stroke="#F44E51" />
                </svg>
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"
                        fill="#F44E51" stroke="#F44E51" />
                </svg>
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z" />
                </svg>


            </div>
            40
            
        </span>
    </div>
    <div class="product_container_main">
        <div class="product_container_main-gallery">

            <span class="gallery-previous"></span>
            <span class="gallery-next"></span>
            <div class="gallery">
                @foreach(explode(',', $order->path_img_product) as $img)
                    <img src="{{$img}}" >
                @endforeach
            </div>
            <div class="gallery_footer">

            </div>
        </div>
        <div class="product_container_main-info">
            <div class="product_features">
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" checked disabled />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />

                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>Steam</span>
                </span>
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>Бесплатно</span>
                </span>
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" checked />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>Роднная почта</span>
                </span>
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" checked />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>Вналичие</span>
                </span>
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" checked />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>Доставка 24-7</span>
                </span>
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" checked />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>Продажа(Навсегда)</span>
                </span>
                <span class="product_features_item">
                    <label class="switch_features" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider_features round"></div>
                        <img class="slider_features-check" src="{{ asset('site/assets/images/check.svg') }}" />
                        <img class="slider_features-cross" src="{{ asset('site/assets/images/cross.svg') }}" />
                    </label>
                    <span>200 часов(новый аккаунт)</span>
                </span>
            </div>

            <div class="product_info">
                <div class="product_info-price">
                    <span class="product_info-price-discont">-50%</span>
                    <span class="product_info-price-red">{{$order->price}} грн</span>
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
                </div>
                <!-- <span class="product_info-price-dollar">
                15$
                </span> -->
                <div class="dropdown-container">
                    <div class="dropdown-toggle click-dropdown">
                        Способ оплаты
                    </div>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#">
                                    <span class="payment">
                                        <span class="payment-type">
                                            <img src="{{ asset('site/assets/images/credit-card.png') }}" alt="">
                                            Банковская карта
                                        </span>
                                        <span class="payment-price">
                                            55.5 $
                                        </span>
                                    </span>
                                </a></li>
                            <li><a href="#">
                                    <span class="payment">
                                        <span class="payment-type">
                                            <img src="{{ asset('site/assets/images/credit-card.png')}}" alt="">
                                            Банковская карта 2
                                        </span>
                                        <span class="payment-price">
                                            55.5 $
                                        </span>
                                    </span>
                                </a></li>
                            <li><a href="#">
                                    <span class="payment">
                                        <span class="payment-type">
                                            <img src="{{ asset('site/assets/images/credit-card.png') }}" alt="">
                                            Банковская карта 3
                                        </span>
                                        <span class="payment-price">
                                            55.5 $
                                        </span>
                                    </span>
                                </a></li>

                        </ul>
                    </div>
                </div>
                <div class="product_info-buttons">
                    <a href="" class="product_info-buttons-pay">Оплатить
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                        <g clip-path="url(#clip0_1_5061)">
                        <path d="M10.9853 26.1545C11.6456 26.1545 12.181 25.6271 12.181 24.9765C12.181 24.3259 11.6456 23.7985 10.9853 23.7985C10.3249 23.7985 9.78961 24.3259 9.78961 24.9765C9.78961 25.6271 10.3249 26.1545 10.9853 26.1545Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M24.1378 26.1545C24.7981 26.1545 25.3334 25.6271 25.3334 24.9765C25.3334 24.3259 24.7981 23.7985 24.1378 23.7985C23.4774 23.7985 22.9421 24.3259 22.9421 24.9765C22.9421 25.6271 23.4774 26.1545 24.1378 26.1545Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.41986 1.41577H6.20258L9.407 17.1896C9.51634 17.732 9.81581 18.2192 10.253 18.5659C10.6902 18.9126 11.2372 19.0968 11.7984 19.0862H23.4204C23.9815 19.0968 24.5285 18.9126 24.9657 18.5659C25.4029 18.2192 25.7024 17.732 25.8117 17.1896L27.7248 7.30593H7.39826" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1_5061">
                        <rect width="28.6963" height="28.2727" fill="white" transform="translate(0.224182 0.237793)"/>
                        </clipPath>
                        </defs>
                        </svg></a>
                    <button class="product_info-buttons-favourite add-favourite" id="add-favourite" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"  viewBox="0 0 32 33" stroke="#2C2C31" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" fill="none">
                            <path d="M27.3023 6.70155C26.6337 6.0327 25.84 5.50212 24.9663 5.14012C24.0927 4.77812 23.1562 4.5918 22.2106 4.5918C21.2649 4.5918 20.3285 4.77812 19.4548 5.14012C18.5812 5.50212 17.7874 6.0327 17.1189 6.70155L15.7314 8.08901L14.3439 6.70155C12.9935 5.35115 11.162 4.5925 9.25222 4.5925C7.34246 4.5925 5.51091 5.35115 4.16051 6.70155C2.8101 8.05196 2.05145 9.8835 2.05145 11.7933C2.05145 13.703 2.8101 15.5346 4.16051 16.885L5.54797 18.2724L15.7314 28.4559L25.9148 18.2724L27.3023 16.885C27.9711 16.2164 28.5017 15.4227 28.8637 14.549C29.2257 13.6754 29.412 12.7389 29.412 11.7933C29.412 10.8476 29.2257 9.91117 28.8637 9.03752C28.5017 8.16386 27.9711 7.37009 27.3023 6.70155V6.70155Z" />
                            </svg>
                    </button>
                </div>
                <a href="" class="product_info-buttons-select">Выбрать тип услуги
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="23" viewBox="0 0 28 23" fill="none">
                        <path d="M27.7235 14.5245L24.6875 12.6212C24.745 12.2532 24.7882 11.8795 24.7882 11.5C24.7882 11.1205 24.745 10.7467 24.6875 10.3787L27.7307 8.47546C28.0041 8.30296 28.0833 7.99246 27.9034 7.73948L25.0256 3.75473C24.8457 3.50746 24.4716 3.40396 24.1479 3.50746L20.565 4.66321C19.8239 4.20894 19.011 3.82373 18.1333 3.53048L17.5937 0.483C17.5289 0.212768 17.2339 0 16.8742 0H11.1186C10.7589 0 10.4639 0.212768 10.4064 0.483L9.86678 3.53048C8.98908 3.82373 8.17605 4.20323 7.43506 4.66321L3.85219 3.50746C3.52844 3.40973 3.1543 3.50746 2.97448 3.75473L0.096587 7.73948C-0.0832984 7.98675 -0.00411373 8.29725 0.269255 8.47546L3.30532 10.3787C3.24778 10.7467 3.20462 11.1205 3.20462 11.5C3.20462 11.8795 3.24778 12.2532 3.30532 12.6212L0.269255 14.5245C-0.00411373 14.697 -0.0832984 15.0075 0.096587 15.2605L2.97442 19.2452C3.1543 19.4925 3.52837 19.596 3.85212 19.4925L7.43499 18.3367C8.17605 18.791 8.98901 19.1762 9.86672 19.4695L10.4063 22.517C10.4638 22.7872 10.7589 23 11.1186 23H16.8742C17.2339 23 17.5289 22.7872 17.5864 22.517L18.126 19.4695C19.0037 19.1762 19.8167 18.7967 20.5577 18.3367L24.1406 19.4925C24.4643 19.5902 24.8385 19.4925 25.0183 19.2452L27.8961 15.2605C28.0761 15.0133 27.9969 14.7028 27.7235 14.5245ZM13.9964 15.525C11.2121 15.525 8.96021 13.7252 8.96021 11.5C8.96021 9.27473 11.2121 7.47501 13.9964 7.47501C16.7807 7.47501 19.0326 9.27478 19.0326 11.5C19.0326 13.7253 16.7807 15.525 13.9964 15.525Z" fill="white"/>
                      </svg>
                </a>
                <div class="product_info-list">
                    <span>
                        Описание товара
                        <p>
                            <b>Описание товара</b>
                            <br/>
                            Платье из коллекции Mango. прямая модель выполнена из гладкого трикотажа.
                            <br/>
                            <br/>
                            - органический хлопок выращивают без использования опасных для здоровья химикатов, химических пестицидов или искусственных удобрений.
                            <br/>
                            - круглый вырез.
                            <br/>
                            - прямой фасон.
                            <br/>
                            - гладкий трикотаж.
                            <br/>
                            - длина: 98 см.
                            <br/>
                            - ширина подмышками: 43 см.
                            <br/>
                            - параметры указаны для размера: S
                            <br/>
                            <br/>
                            Состав:
                            100% органический хлопок
                            ID товара: 9by8-sud0b9_90x
                            Код производителя: 019922.c678
                        </p>
                    </span>
                    <span>
                        Доставка
                        <p>
                            <b>Доставка</b>
                            <br/>
                            Платье из коллекции Mango. прямая модель выполнена из гладкого трикотажа.
                            <br/>
                            <br/>
                            - органический хлопок выращивают без использования опасных для здоровья химикатов, химических пестицидов или искусственных удобрений.
                            <br/>
                            - круглый вырез.
                            <br/>
                            - прямой фасон.
                            <br/>
                            - гладкий трикотаж.
                            <br/>
                            - длина: 98 см.
                            <br/>
                            - ширина подмышками: 43 см.
                            <br/>
                            - параметры указаны для размера: S
                            <br/>
                            <br/>
                            Состав:
                            100% органический хлопок
                            ID товара: 9by8-sud0b9_90x
                            Код производителя: 019922.c678
                        </p>
                    </span>
                    <span>
                        Возврат обмен
                        <p>
                            <b>Возврат обмен</b>
                            <br/>
                            Платье из коллекции Mango. прямая модель выполнена из гладкого трикотажа.
                            <br/>
                            <br/>
                            - органический хлопок выращивают без использования опасных для здоровья химикатов, химических пестицидов или искусственных удобрений.
                            <br/>
                            - круглый вырез.
                            <br/>
                            - прямой фасон.
                            <br/>
                            - гладкий трикотаж.
                            <br/>
                            - длина: 98 см.
                            <br/>
                            - ширина подмышками: 43 см.
                            <br/>
                            - параметры указаны для размера: S
                            <br/>
                            <br/>
                            Состав:
                            100% органический хлопок
                            ID товара: 9by8-sud0b9_90x
                            Код производителя: 019922.c678
                        </p>
                    </span>
                    <span>
                        Задать вопрос о товаре
                        <p>
                            <b>Задать вопрос о товаре</b>
                            <br/>
                            Платье из коллекции Mango. прямая модель выполнена из гладкого трикотажа.
                            <br/>
                            <br/>
                            - органический хлопок выращивают без использования опасных для здоровья химикатов, химических пестицидов или искусственных удобрений.
                            <br/>
                            - круглый вырез.
                            <br/>
                            - прямой фасон.
                            <br/>
                            - гладкий трикотаж.
                            <br/>
                            - длина: 98 см.
                            <br/>
                            - ширина подмышками: 43 см.
                            <br/>
                            - параметры указаны для размера: S
                            <br/>
                            <br/>
                            Состав:
                            100% органический хлопок
                            ID товара: 9by8-sud0b9_90x
                            Код производителя: 019922.c678
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>

</section>
