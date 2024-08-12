@extends('admin.layouts.main')

@section('title', 'Чат')

@section('content')
<div class="row mb-4 justify-content-center mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 chat_list">
                @php
                    $authUsersId = auth()->user()->id;
                @endphp
                @foreach($chat as $post)
                <a href="#" class="chat_list-item d-flex align-items-center" data-user-id="{{ $post->id }}" data-auth-id="{{ $authUsersId }}">
                    <div class="chat_list-item-left d-flex align-items-center">
                        <img src="./assets/images/Ellipse 2.png" class="rounded-circle mr-3"/>
                        <div>
                            <h6>{{ $post->name }}</h6>
                            <p class="mb-0">Dinner</p>
                        </div>
                    </div>
                    <div class="chat_list-item-right d-flex flex-column align-items-end">
                        <span>Today, 8:56pm</span>
                        <div class="chat_list-item-right-messages badge badge-primary">2</div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-8 chat profile_chat">
                <div class="chat_header d-flex align-items-center">
                    <div class="chat_header_to d-flex align-items-center">
                        <img src="https://content.freelancehunt.com/profile/photo/225/bonzaznob.png" class="rounded-circle mr-3"/>
                        <span>Admin</span>
                    </div>
                    <div class="chat_header-underline flex-grow-1"></div>
                </div>
                <div class="chat_main">
                    <div class="chat_main_to"></div>
                    <div class="chat_main_from"></div>
                </div>
                <div class="chat_footer">
                    <div class="input-group">
                        <input class="form-control chat_footer-text" id="message" type="text" placeholder="Напишите продавцу перед оплатой">
                        <div class="input-group-append">
                            <label for="file-input" class="btn btn-outline-secondary">
                                <img src="{{ asset('site/assets/images/gallery.svg')}}"/>
                            </label>
                            <input id="file-input" type="file" class="d-none">
                            <button class="btn btn-primary" id="send-button">Відправити</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  </div>
@endsection
