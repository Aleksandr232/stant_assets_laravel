@php
        use App\Models\FilterPrice;
        use App\Models\FilterService;
        use App\Models\FilterPlatform;

        $filterprice = FilterPrice::all();
        $filterplatform = FilterPlatform::all();
        $filterservice = FilterService::all();

        $minPrice = $product->min('price');
        $maxPrice = $product->max('price');

@endphp
<section  style="display: none;" class="product_list-mobile">
    <div class="product_list_header">
         <label>{{count($product)}}  товаров</label>
         <a href="" class="mobile-filter"> Фильтры
             <img src="{{ asset('site/assets/images/refresh.svg')}}" alt="">
         </a>

    </div>
    <div style="display: none;" class="product_list-filters">
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
                @elseif(count($filterprice) == 0)
                    <li class="filter_group-item-right">
                        <label class="control control-checkbox">
                            нет данных
                        </label>
                    </li>
                @endif
                </ul>
            </form>
             <li>
                <form action="{{ route('home') }}">
                    <div class="double-slider">

                        <div class="double-slider_container">
                            <div class="slider-track"></div>
                            <input  type="range" min="{{ $minPrice }}" max="{{ $maxPrice }}"
                            value="0"  id="slider-1" oninput="slideOne()">
                            <input name="price[]" type="range" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ request()->input('price', [])['0'] ?? '' }}" @if(in_array(request()->input('price', [])['0'] ?? '', request()->input('price', []))) checked @endif onchange="this.form.submit()" id="slider-2" oninput="slideTwo()">
                        </div>
                        <div class="double-slider_values">
                            <span class="range-count" id="range1">
                                {{ $minPrice }}
                            </span>
                            <span class="range-dash"></span>
                            <span class="range-count" id="range2">
                                {{ $maxPrice }}
                            </span>
                        </div>

                    </div>
                </form>

             </li>
         </ul>
     </div>

     <div class="filter">
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
     <div class="product_list_main">
        @foreach($product as $post)
         <div class="product_item">
             <span class="product_item-name">Название товара который проадём мы: {{$post->product}}</span>
             <div class="product_item-info">
                 <div class="product_item-info-left">
                     <span>Назв того что продаём: STEAM</span>
                     <span class="product_item-rate">
                         <img src="{{ asset('site/assets/images/rate-star.svg')}}" alt="">
                         {{ $post->average_rating ? number_format($post->average_rating, 1) : '0.0' }}
                     </span>
                     <span class="product_item-sales">Всего покупок: {{$post->count_buy}}</span>
                     <div class="product_item-delivery">
                         <img src="{{ asset('site/assets/images/clock.svg')}}" alt="">
                         <span>В любое время</span>
                         <span>от 1 до 12 часов</span>
                     </div>

                 </div>
                 <div class="product_item-info-right">
                     <span>Цена:</span>
                     <span class="product_item-price">{{$post->price}} руб</span>
                     <span class="product_item-price-dollar">1 500$</span>
                     <div class="product_item-features">
                         <img src="{{ asset('site/assets/images/developer_icon.svg')}}" alt="">
                         Навсегда
                     </div>
                     <div class="product_item-features">
                         <img src="{{ asset('site/assets/images/gamepad_icon.svg')}}" alt="">
                         0 часов
                     </div>
                     <div class="product_item-features">
                         <img src="{{ asset('site/assets/images/smartphone_icon.svg')}}" alt="">
                         Родная почта
                     </div>
                     <div class="product_item-features">
                         <img src="{{ asset('site/assets/images/platform_icon.svg')}}" alt="">
                         Steam [PC]
                     </div>

                 </div>

             </div>
             <div class="product_item-footer">
                 <a  class="product_item-buy" href="{{ route('order', [$post->id, $post->product]) }}">
                     <span>Оформление заказа</span>
                 </a>
                 <a class="product_item-contact" href="">Связаться с нами</a>
             </div>
         </div>
         @endforeach

         <div class="container_pages">
            <div class="d-flex justify-content-center">
                {{ $product->links('vendor.pagination.custom') }}
            </div>
        </div>
     </div>
 </section>
