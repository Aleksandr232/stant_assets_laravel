<section class="feedback_container">

    <div class="feedback_container_reviews">
        <div class="feedback_container_header">
            <label>{{$order->count_send}} Отзывов</label>
        <div class="reviews_rate">
            <span class="reviews_rate-stars">
                <div>
                    @php
                        $rating = number_format($order->average_rating, 1);
                    @endphp

                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $rating)
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z" fill="#F44E51" stroke="#F44E51" />
                            </svg>
                        @else
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z" />
                            </svg>
                        @endif
                    @endfor
                </div>
                {{ number_format($order->average_rating, 1) }}
            </span>
            <span class="reviews_rate-count"> отзывов</span>
        </div>
        @if (Auth::check())
            @if (Auth::user()->is_admin == 1)
                <a  class="feedback_container_reviews-auth">Вы являетесь админом</a>
            @else
                <a href="#" class="feedback_container_reviews-send">Оставить отзыв</a>
            @endif
        @else
            <a href="{{ route('auth') }}" class="feedback_container_reviews-auth">Оставить отзыв</a>
        @endif
        </div>
        <div class="feedback_container_main">
            @php
                $names = explode(',', $order->name);
                $comments = explode(',', $order->comment);
                $ratings = explode(',', $order->rating);
                $date = explode(',', $order->date_send_rating);
                $avatars = explode(',', $order->avatar);
            @endphp

            <div class="review-container">
                @if (empty($names[0]))
                    <p>Отзывов нет</p>
                @else
                    @foreach ($names as $key => $name)
                        <div class="review {{ $key >= 5 ? 'hidden' : '' }}">
                            <span class="review-date">{{ date('d.m.Y', strtotime($date[$key])) }}</span>
                            <div class="review_info">
                                @if(isset($avatars[$key]) && $avatars[$key])
                                    <img style="border-radius: 35px;" src="{{ asset('avatars/' . $avatars[$key]) }}"/>
                                @else
                                    <img style="border-radius: 35px;" src="{{ asset('site/assets/images/profile/profileIcon.png') }}"/>
                                @endif
                                <span>
                                    {{ $name }}
                                    <div class="review_info-stars">
                                        @php
                                            $rating = min(max(0, $ratings[$key]), 5);
                                        @endphp

                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $rating)
                                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z" fill="#F44E51" stroke="#F44E51" />
                                                </svg>
                                            @else
                                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                </span>
                            </div>
                            <p>
                                {{ $comments[$key] }}
                            </p>
                        </div>
                    @endforeach

            </div>

            <a href="#" class="feedback_container_main-more">Показать еще</a>
            @endif
        </div>

    </div>


    {{-- <div class="chat">
        <div class="chat_header">
            <label>Напишите нам для уточнение товара:</label>
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
                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
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
    </div> --}}
</section>
