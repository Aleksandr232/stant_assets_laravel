@extends('admin.layouts.main')

@section('title', 'Чат')

@section('content')
<div class="row mb-4 justify-content-center mt-5">
    <div  class="profile_support">

        <div  class="chat_list">
            @php
                $authUsersId = auth()->user()->id;
            @endphp
            @foreach($chat as $post)
            <a href="" class="chat_list-item" data-user-id="{{ $post->id }}" data-auth-id="{{ $authUsersId }}">
                <span class="chat_list-item-left">
                    <img src="./assets/images/Ellipse 2.png"/>
                    <span>
                        <label>{{ $post->name }}</label>
                        <p>Dinner</p>
                    </span>
                </span>
                <span class="chat_list-item-right">
                    <span>Today, 8:56pm</span>
                    <div class="chat_list-item-right-messages">2</div>
                </span>
            </a>
            @endforeach
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
                <div class="chat_main_to"></div>
                <div class="chat_main_from"></div>
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



  </div>
@endsection
