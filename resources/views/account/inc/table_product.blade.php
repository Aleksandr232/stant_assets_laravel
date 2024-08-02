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
                        {{$post->status_purchase}}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>

