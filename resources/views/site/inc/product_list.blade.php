@php
        use App\Models\FilterPrice;
        use App\Models\FilterService;
        use App\Models\FilterPlatform;

        $filterprice = FilterPrice::all();
        $filterplatform = FilterPlatform::all();
        $filterservice = FilterService::all();

@endphp
<section class="product_list">
    <div class="list-search">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
                <path d="M33.3065 7.0006L24.8917 1.14248C24.4222 0.815707 23.6611 0.815805 23.1917 1.14268C22.9664 1.29959 22.8398 1.5123 22.8397 1.73419V4.24481H14.425C13.7611 4.24481 13.2229 4.61949 13.2229 5.08169C13.2229 5.5439 13.7611 5.91858 14.425 5.91858H24.0419C24.7058 5.91858 25.244 5.5439 25.244 5.08169V3.75435L30.7569 7.59226L25.244 11.4302V10.1029C25.244 9.64067 24.7058 9.26599 24.0419 9.26599H10.8187V6.75537C10.8185 6.29316 10.2802 5.91858 9.61633 5.91868C9.29768 5.91873 8.99206 6.00685 8.76666 6.16371L0.351985 12.0218C-0.117328 12.3487 -0.117328 12.8784 0.351985 13.2052L8.76674 19.0633C8.99213 19.2202 9.29782 19.3085 9.61661 19.3085C9.7746 19.3088 9.93118 19.2872 10.077 19.2449C10.5261 19.1153 10.8188 18.8101 10.8187 18.4716V15.961H19.2334C19.8973 15.961 20.4355 15.5863 20.4355 15.1241C20.4355 14.6619 19.8973 14.2872 19.2334 14.2872H9.61661C8.95269 14.2872 8.41449 14.6619 8.41449 15.1241V16.4514L2.90162 12.6135L8.41449 8.77558V10.1029C8.41449 10.5651 8.95269 10.9398 9.61661 10.9398H22.8397V13.4504C22.8399 13.9126 23.3782 14.2872 24.0421 14.2871C24.3607 14.287 24.6663 14.1989 24.8917 14.042L33.3065 8.18392C33.7757 7.8571 33.7757 7.32737 33.3065 7.0006Z" fill="#2B2B2B"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                    <circle cx="9.01538" cy="9.91309" r="9.01562" fill="#00D254"/>
                    </svg>
        </button>



        {{-- <input value="#" type="text" placeholder="Поиск по играм" /> --}}
        {{-- <form action="{{ route('home') }}" method="GET">
            <input type="text" name="search" placeholder="Search products">
            <button type="submit">Search</button>
        </form> --}}
        <form id="search-form" action="{{ route('home') }}" method="GET">
            <input type="text" id="search-input" name="search" placeholder="Поиск по играм">
        </form>



    </div>

    <div class="product_list_container">
        <div class="container_filter">
            <label class="container_filter-label">Найдено {{count($product)}}  товаров</label>
            <div  class="container_filter-list">
                <div class="container_filter-list-header mobile-filter">
                    <span>Фильтры</span>
                    <button><img src="{{ asset('site/assets/images/refresh.svg') }}" alt="" /></button>
                </div>

                <div class="filter">
                    <form action="{{ route('home') }}" method="GET">
                    <label class="filter_header">Цена</label>
                    <ul class="filter_group">
                        <ul class="filter_group-items">
                                @if(count($filterprice))
                                    @foreach($filterprice as $post)
                                        @if($post->filter_price)
                                            <li class="filter_group-item-right">
                                                <label class="control control-checkbox">
                                                    {{ $post->filter_price }}
                                                    <input name="filter_price[]" type="checkbox" value="{{ $post->filter_price }}" @if(in_array($post->filter_price, request()->input('filter_price', []))) checked @endif onchange="this.form.submit()" />
                                                    <div class="control_indicator"></div>
                                                </label>
                                            </li>
                                        @endif
                                    @endforeach
                                @else
                                    <li class="filter_group-item-right">
                                        <label class="control control-checkbox">
                                            нет данных
                                        </label>
                                    </li>
                                @endif
                        </ul>
                    </form>
                        <li>
                            <div class="double-slider">
                                <div class="double-slider_container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="100" value="30" id="slider-1"
                                        oninput="slideOne()">
                                    <input type="range" min="0" max="100" value="70" id="slider-2"
                                        oninput="slideTwo()">
                                </div>
                                <div class="double-slider_values">
                                    <span class="range-count" id="range1">
                                        0
                                    </span>
                                    <span class="range-dash"></span>
                                    <span class="range-count" id="range2">
                                        100
                                    </span>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

                <div class="filter">
                    {{-- <label class="filter_header">Платформа</label> --}}
                    <form action="{{ route('home') }}" method="GET">
                        <label class="filter_header">Платформа</label>
                        <ul class="filter_group">
                            @if(count($filterplatform))
                                @foreach($filterplatform as $post)
                                    @if($post->filter_platform)
                                        <li class="filter_group-item">
                                            <label class="control control-checkbox control-right">
                                                {{ $post->filter_platform }}
                                                <input name="filter_platform[]" type="checkbox" value="{{ $post->filter_platform }}" @if(in_array($post->filter_platform, request()->input('filter_platform', []))) checked @endif onchange="this.form.submit()" />
                                                <div class="control_indicator control_indicator-right"></div>
                                            </label>
                                        </li>
                                    @endif
                                @endforeach
                            @else
                                <li class="filter_group-item">
                                    <label class="control control-checkbox control-right">
                                        нет данных
                                    </label>
                                </li>
                            @endif
                        </ul>
                    </form>

                        {{-- <li class="filter_group-item">
                            <label class="control control-checkbox control-right">
                                Другие...
                                <input type="checkbox" />
                                <div class="control_indicator control_indicator-right"></div>
                            </label>

                        </li> --}}
                    </ul>
                </div>

                <div class="filter">
                    <form action="{{ route('home') }}" method="GET">
                    <label class="filter_header">Услуги</label>
                    <ul class="filter_group">
                        @if(count($filterservice))
                                @foreach($filterservice as $post)
                                    @if($post->filter_service)
                                        <li class="filter_group-item">
                                            <label class="control control-checkbox control-right">
                                                {{ $post->filter_service }}
                                                <input name="filter_service[]" type="checkbox" value="{{ $post->filter_service }}" @if(in_array($post->filter_service, request()->input('filter_service', []))) checked @endif onchange="this.form.submit()" />
                                                <div class="control_indicator control_indicator-right"></div>
                                            </label>
                                        </li>
                                    @endif
                                @endforeach
                            @else
                                    <li class="filter_group-item">
                                        <label class="control control-checkbox control-right">
                                            нет данных
                                        </label>
                                    </li>
                            @endif
                    </ul>
                </form>
                </div>

                <div class="filter">
                    <label class="filter_header">Длительность(Месяцев)</label>
                    <ul class="filter_group">
                        <li>
                            <div class="double-slider">
                                <div class="double-slider_container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="100" value="30" id="slider-1"
                                        oninput="slideOne()">
                                    <input type="range" min="0" max="100" value="70" id="slider-2"
                                        oninput="slideTwo()">
                                </div>
                                <div class="double-slider_values">
                                    <span class="range-count" id="range1">
                                        0
                                    </span>
                                    <span class="range-dash"></span>
                                    <span class="range-count" id="range2">
                                        100
                                    </span>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

                <div class="filter">
                    <label class="filter_header">
                        <label class="control control-checkbox control-right filter_header">
                            Дополнительные услуги
                            <input type="checkbox" />
                            <div class="control_indicator control_indicator-right"></div>
                        </label>
                    </label>
                </div>

                <div class="filter">
                    <label class="filter_header">
                        <label class="control control-checkbox control-right filter_header">
                            Поддержка
                            <input type="checkbox" />
                            <div class="control_indicator control_indicator-right"></div>
                        </label>
                    </label>
                </div>

            </div>
        </div>
        <div class="container_main">
            <table class="container_products">
                <thead class="container_products_head">
                    <tr>
                        <th><button class="head_button">
                                Игра
                                <div class="head_button_row">
                                    <img src="{{ asset('site/assets/images/sort_arrow.svg') }}" alt="">
                                    <img src="{{ asset('site/assets/images/sort_arrow-down.svg') }}" alt="">
                                </div>
                            </button></th>
                        <th>
                            <button class="head_button">
                                Описание
                                <div class="head_button_row">
                                    <img src="{{ asset('site/assets/images/sort_arrow.svg') }}" alt="">
                                    <img src="{{ asset('site/assets/images/sort_arrow-down.svg') }}" alt="">
                                </div>
                            </button>
                        </th>
                        <th>
                            <button class="head_button">
                                Цена
                                <div class="head_button_row">
                                    <img src="{{ asset('site/assets/images/sort_arrow.svg') }}" alt="">
                                    <img src="{{ asset('site/assets/images/sort_arrow-down.svg') }}" alt="">
                                </div>
                            </button>
                        </th>
                        <th>Время доставки</th>
                        <th class="mobile-table">Особенности</th>
                        <th>Оформление</th>
                    </tr>
                </thead>
                <tbody class="container_products_list">
                    @foreach($product as $post)
                    <tr class="container_products_list-item">
                        <td>
                            <div class="item_name">
                                <div class="item_name-logo">
                                    <img src="{{ asset('site/assets/images/steam-logo.png') }}" alt="" />
                                    <label>Xbox</label>
                                </div>
                                <span>
                                    {{$post->product}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="item_description">
                                <label>{{$post->price}} руб, Торговая площадка</label>
                                <div class="item_description-rate">
                                    <img src="{{ asset('site/assets/images/rate-star.svg') }}" alt="">
                                    <span>4.9</span>
                                </div>
                                <span class="item_description-purchases">Всего покупок: 48</span>
                            </div>

                        </td>
                        <td>
                            <div class="item_price">
                                <span>166 800 <span class="item_price-currency">руб</span></span>
                                <span class="item_price-dollar">1 500$</span>
                            </div>
                        </td>
                        <td>
                            <div class="item_delivery">
                                <div class="item_delivery-clock">
                                    <img src="{{ asset('site/assets/images/clock.svg') }}" alt="clock" />
                                    <span>В любое время</span>
                                </div>
                                <span>от 1 до 12 часов</span>
                            </div>
                        </td>
                        <td class="mobile-table">
                            <div class="item_facility">
                                <div class="item_facility-container">
                                    <div class="item_facility-row">
                                        <div class="item_facility-row-img">
                                            <img src="{{ asset('site/assets/images/developer_icon.svg') }}" />
                                        </div>
                                        <label>Навсегда</label>
                                    </div>
                                    <div class="item_facility-row">
                                        <div class="item_facility-row-img">
                                            <img src="{{ asset('site/assets/images/gamepad_icon.svg') }}" />
                                        </div>
                                        <label>0 часов</label>
                                    </div>
                                    <div class="item_facility-row">
                                        <div class="item_facility-row-img">
                                            <img src="{{ asset('site/assets/images/smartphone_icon.svg') }}" />

                                        </div>
                                        <label>Родная почта</label>
                                    </div>
                                    <div class="item_facility-row">
                                        <div class="item_facility-row-img">
                                            <img src="{{ asset('site/assets/images/platform_icon.svg')}}" />

                                        </div>
                                        <label>Steam[PC]</label>
                                    </div>
                                </div>

                            </div>
                        </td>
                        <td>
                            <div class="item_order">
                                <a href="" class="item_order-take">
                                    <span>
                                        Оформление заказа
                                    </span>
                                </a>
                                <a href="" class="item_order-contact">
                                    <span>
                                        Связаться с нами
                                    </span>
                                </a>
                                <a href="" class="item_order-details mobile-table">
                                    <img src="{{ asset('site/assets/images/shuffle.svg')}}" />
                                    Подробная информация
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- <div class="container_pages">
                <button class="container_pages-button pages_button-active">1</button>
                <button class="container_pages-button">2</button>
                <button class="container_pages-button">3</button>
                <button class="container_pages-button">4</button>
                <span class="container_pages-more">. . .</span>
                <button class="container_pages-button">9</button>
            </div> --}}

            <div class="container_pages">
                <div class="d-flex justify-content-center">
                    {{ $product->links('vendor.pagination.custom') }}
                </div>
            </div>


        </div>

    </div>
</section>
