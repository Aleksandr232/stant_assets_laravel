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
            @foreach($purchases as $post)
            <tr>
                <td>
                    <div class="item_data">
                        <span>{{$post->date_purchase}}</span>
                    </div>
                </td>
                <td>
                    <div class="item_name">
                        {{$post->product_purchase}}
                    </div>

                </td>
                <td>
                    <div class="item_transactionId">
                        {{$post->transaction_purchase}}
                    </div>
                </td>
                <td>
                    <div class="item_price">
                        {{$post->price_purchase}}
                    </div>
                </td>
                <td>
                    @if($post->account_details_purchase === 'Отправить аккаунт')
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
                                Account ID: <b>{{$post->account_id}}</b>
                            </span>
                            <span class="item_information-row">
                                Password: <b>{{$post->account_password}}</b>
                            </span>
                            <span class="item_information-row wrap">
                                Account email: <b>{{$post->account_email}}</b>
                            </span>
                            <span class="item_information-row wrap">
                                Email password: <b>{{$post->email_password}}</b>
                            </span>
                            <span class="item_information-row wrap">
                                Email link: <b>{{$post->email_link}}</b>
                            </span>
                            <span class="item_information-row wrap">
                                Additional note:
                                <b>
                                    {!! $post->additional !!}
                                </b>
                            </span>
                        </div>


                    </div>
                    @elseif($post->account_details_purchase === 'Оплачен')
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
                    @elseif($post->account_details_purchase === 'Ждем оплату')
                    <div class="item_status">
                        {{$post->account_details_purchase}}
                    </div>
                    @elseif($post->account_details_purchase === '503 ERROR')
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
                    @endif
                </td>
                <td>
                    @if($post->status_purchase === 'Отправлен' || $post->status_purchase === 'Доставлен')
                        <div class="item_status">
                            {{$post->status_purchase}}
                        </div>
                    @elseif($post->status_purchase === 'Неудача')
                        <div class="item_status error">
                            {{$post->status_purchase}}
                        </div>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container_pages">
        <div class="d-flex justify-content-center">
            {{ $purchases->links('vendor.pagination.custom-profile-pagination') }}
        </div>
    </div>


   </div>

