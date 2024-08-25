<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="{{ asset('site/assets/scss/style.css')}}?v={{ time() }}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>

<body>

    <div class="wrapper {{ request()->routeIs('auth') || request()->routeIs('account')  ? 'autorization-page' : '' }}">
        <header>
            @include('site.inc.header')
        </header>
        <main>
            @yield('content')
        </main>
            @yield('footer_desc')
        <footer>
            @yield('footer')
        </footer>
        @include('site.inc.right__socials')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('site/js/share.js') }}"></script>
   {{--  <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="{{ asset('site/js/index.js')}}?v={{ time() }}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        const loginLink = document.getElementById('loginLink');
        const signupLink = document.getElementById('signupLink');
        const authorizationForm = document.getElementById('authorizationForm');
        const submitButton = document.getElementById('submitButton');


        loginLink.classList.add('active');
        signupLink.classList.remove('active');
        authorizationForm.action = "{{ route('login') }}";
        submitButton.textContent = 'Войти';

        loginLink.addEventListener('click', () => {
            loginLink.classList.add('active');
            signupLink.classList.remove('active');
            authorizationForm.action = "{{ route('login') }}";
            submitButton.textContent = 'Войти';
        });

        signupLink.addEventListener('click', () => {
            signupLink.classList.add('active');
            loginLink.classList.remove('active');
            authorizationForm.action = "{{ route('register') }}";
            submitButton.textContent = 'Создать';
        });
    </script>
    <script>
        $(document).ready(function() {
  const $modal = $("#modal_avatar");
  const $profileSideName = $(".profile_side-name");
  const $closeButton = $(".close-button");
  const $saveAvatarButton = $("#save-avatar");
  const $avatarInput = $("#avatar-input");
  const $userAvatar = $("#user-avatar");

    $userAvatar.on("click", function() {
    $avatarInput.click();
    });

    $avatarInput.on("change", function() {
    const file = this.files[0];
    $userAvatar.attr("src", URL.createObjectURL(file));
    });

  $profileSideName.on("click", function() {
    $modal.css("display", "block");
  });

  $closeButton.on("click", function() {
    $modal.css("display", "none");
  });

  $(window).on("click", function(event) {
    if (event.target == $modal[0]) {
      $modal.css("display", "none");
    }
  });

  $saveAvatarButton.on("click", function() {
    const file = $avatarInput[0].files[0];
    // Здесь вы можете добавить логику для сохранения аватара на сервере
    console.log("Аватар сохранен:", file);
    $modal.css("display", "none");
  });
});
    </script>

   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const reviewContainers = document.querySelectorAll('.review');
        const showMoreButton = document.querySelector('.feedback_container_main-more');
        let currentlyShown = 5;

        // Изначально показываем только 5 отзывов
        for (let i = 5; i < reviewContainers.length; i++) {
            reviewContainers[i].classList.add('hidden');
        }

        showMoreButton.addEventListener('click', function(event) {
            event.preventDefault();

            for (let i = currentlyShown; i < currentlyShown + 5 && i < reviewContainers.length; i++) {
                reviewContainers[i].classList.remove('hidden');
            }

            currentlyShown += 5;

            if (currentlyShown >= reviewContainers.length) {
                this.classList.add('hidden');
            }
        });
    });
</script>
<script>
    var modal = document.getElementById("modal");
var btn = document.getElementById("openModal");
var span = document.getElementsByClassName("close-button")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
    document.querySelectorAll('.feedback_container_reviews-send').forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault(); // Отменяем стандартное поведение ссылки

    const targetElement = document.getElementById('feedback_container');
    targetElement.scrollIntoView({
      behavior: 'smooth', // Плавный скролл
      block: 'start' // Прокручиваем до верха элемента
    });
  });
});
</script>


<script>
    var currentActiveUserId;
    var authId;
    var audio = new Audio('https://co19736.tw1.ru/public/chat/chat.mp3');

    $(document).ready(function() {
        // Инициализация Pusher
        Pusher.logToConsole = true;

        var pusher = new Pusher('13d5f420787d5aa468b8', {
            cluster: 'eu',
            authEndpoint: '/broadcasting/auth',
            auth: {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            }
        });



        // Получаем активный ID пользователя, когда страница загружается
        var activeUserId = $('.chat_list-item').data('user-id');
        var authUserId = $('.chat_list-item').data('auth-id');

        // Сохраняем активный ID пользователя в переменной
        currentActiveUserId = activeUserId;
        authId = authUserId;

        console.log(currentActiveUserId, authId);

        // Обновляем активный ID пользователя, когда элемент списка чата нажимается
        $('.chat_list-item').click(function() {
            currentActiveUserId = $(this).data('user-id');
            loadMessages(currentActiveUserId, authId);
        });

        $('#message').keydown(function(e) {
        if (e.keyCode === 13) { // Check if the pressed key is the Enter key
                e.preventDefault(); // Prevent the default form submission
                $('#send-button').click(); // Trigger the click event on the send button
            }
        });

        $('#send-button').click(function(e) {
            e.preventDefault();
            var message = $('#message').val();

            var formData = new FormData();
            formData.append('message', message);
            formData.append('recipient_id', currentActiveUserId);

            $.ajax({
                url: '{{ route('sendMessage', [':id', ':userId']) }}'
                .replace(':id', currentActiveUserId)
                .replace(':userId', authId),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log('Sent message:', data.message.message, data.user);
                    $('#message').val('');
                   /*  addMessageToChat(data.user, data.message.message); */
                },
                error: function(xhr, status, error) {
                    console.error('Error sending message:', error);
                }
            });



            function getChatChannelName(currentActiveUserId, authId) {
            // Сортируем userId1 и userId2, чтобы порядок всегда был одинаковым
            const sortedIds = [currentActiveUserId, authId].sort((a, b) => a - b);
            return `private-chat.${sortedIds[0]}.${sortedIds[1]}`;
            }

            // Получение сообщений в реальном времени
            /* var channel = pusher.subscribe('chat.' + currentActiveUserId + '-' + authId); */
            /* var channel = pusher.subscribe('private-chat.' + currentActiveUserId + '.' + authId); */
            var channel = pusher.subscribe(getChatChannelName(currentActiveUserId, authId));
            var shownNotifications = {};

            channel.bind('App\\Events\\MessageSent', function(data) {
                // Проверяем, является ли текущий пользователь отправителем или получателем сообщения
                if (data.message.sender_id === authId || data.message.recipient_id === currentActiveUserId) {
                    // Проверяем, было ли это сообщение уже добавлено в чат
                    if ($('.chat_main_to, .chat_main_from').find('span[data-message-id="' + data.message.id + '"]').length === 0) {
                        // Если нет, то добавляем сообщение в чат
                        addMessageToChat(data);
                    }

                    // Проверяем, было ли уже показано уведомление для этого сообщения
                    if (data.message.user_id === currentActiveUserId && !shownNotifications[data.message.id]) {
                        // Показываем уведомление с помощью Toastr
                        toastr.info(data.message.message, 'Новое сообщение');
                        // Отмечаем, что уведомление было показано
                        shownNotifications[data.message.id] = true;
                    }
                }
            });

        });



        function loadMessages(userId, recipientId) {
    $.ajax({
        url: '{{ route('getMessages', [':userId', ':recipientId']) }}'.replace(':userId', userId).replace(':recipientId', recipientId),
        type: 'GET',
        success: function(data) {
            // Очистить содержимое элемента, где будут отображаться сообщения
            $('.chat_main').empty();


            $('.chat_header_to span').text(data[0].recipient_name);

            let prevDate = null;

            // Iterate through the received messages and append them to the HTML
            $.each(data, function(index, message) {
                var messageDate = new Date(message.created_at);
                var today = new Date();
                today.setHours(0, 0, 0, 0);

                var chatElement;
                var dateElement = null;
                var avatarElement = null;
                var nameElement = null;

                // Check if the message is from the current user
                if (message.user_id === authId) {
                    chatElement = $(`<div class="chat_main_to"></div>`);
                } else if (message.user_id === currentActiveUserId) {
                    chatElement = $(`<div class="chat_main_from"></div>`);
                }

                // Show the date only if it's different from the previous message
                if (prevDate === null || messageDate.getDate() !== prevDate.getDate() || messageDate.getMonth() !== prevDate.getMonth() || messageDate.getFullYear() !== prevDate.getFullYear()) {
                    var options = { year: 'numeric', month: 'long', day: 'numeric', timeZone: 'Europe/Moscow' };
                    var formattedDate;
                    if (messageDate.getTime() >= today.getTime()) {
                        formattedDate = 'Сегодня';
                    } else {
                        formattedDate = messageDate.toLocaleString('ru-RU', options);
                    }
                    dateElement = $(`<label class="chat_main_to-date chat_main_from-date">${formattedDate}</label>`);
                    chatElement.append(dateElement);
                    prevDate = messageDate;
                }

                var options = { hour: 'numeric', minute: 'numeric', timeZone: 'Europe/Moscow' };
                var formattedTime = messageDate.toLocaleString('ru-RU', options);
                var messageElement = $(`<span data-message-id="${message.id}"><p>${message.message} <span class="message-time">${formattedTime}</span></p></span>`);
                messageElement.find('.message-time').css({
                    'font-size': '0.6em',
                    'margin-left': '5px',
                    'color': 'black',
                });
                chatElement.append(messageElement);

                // Append the new message to the bottom of the chat
                $('.chat_main').append(chatElement);
            });

            // Scroll to the bottom of the chat
            var chatContainer = $('.chat_main');
            chatContainer.scrollTop(chatContainer[0].scrollHeight);
        },
        error: function(xhr, status, error) {
            console.error('Error loading messages:', error);
        }





    });


}







$.ajax({
    url: '{{ route('get_product') }}',
    type: 'GET',

    success: function(data) {
        // Очищаем существующее содержимое контейнера
        $('.container_products_list').empty();

        // Создаем HTML-структуру для каждого продукта
        $.each(data, function(index, product) {
            var html = createProductHtml(product);
            $('.container_products_list').append(html);

            // Обновляем ссылку на оформление заказа для текущего продукта
            var orderLink = $('.container_products_list-item:last .item_order-take');
            orderLink.attr('href', '{{ route('order', ['id' => 'id', 'name' => 'name']) }}'.replace('id', product.id).replace('name', product.product));
        });

        // Добавляем класс 'active' для первого продукта
        $('.container_products_list-item:first').addClass('active');

        updatePagination(data.current_page, data.last_page);


    },
    error: function(xhr, status, error) {
        console.error(error);
    }
});


function updatePagination(currentPage, lastPage) {
    // Очищаем существующую пагинацию
    

    // Создаем элементы пагинации
    for (var i = 1; i <= lastPage; i++) {
        var pageButton = $('<button>').addClass('container_pages-button');
        if (i === currentPage) {
            pageButton.addClass('pages_button-active');
        }
        pageButton.text(i).click(function(e) {
            e.preventDefault();
            currentPage = $(this).text();
            loadProducts();
        });
        $('.container_pages').append(pageButton);
    }

    // Добавляем кнопку "..."
    if (lastPage > 5) {
        var moreButton = $('<span>').addClass('container_pages-more').text('. . .');
        $('.container_pages').append(moreButton);
    }
}

var currentPage = 1;

function loadProducts() {
    $.ajax({
        url: '{{ route('get_product') }}',
        type: 'GET',
        data: {
            page: currentPage,
            per_page: 5
        },
        success: function(data) {
            // Очищаем существующее содержимое контейнера
            $('.container_products_list').empty();

            // Создаем HTML-структуру для каждого продукта
            $.each(data.data, function(index, product) {
                var html = createProductHtml(product);
                $('.container_products_list').append(html);

                // Обновляем ссылку на оформление заказа для текущего продукта
                var orderLink = $('.container_products_list-item:last .item_order-take');
                orderLink.attr('href', '{{ route('order', ['id' => 'id', 'name' => 'name']) }}'.replace('id', product.id).replace('name', product.product));
            });

            // Добавляем класс 'active' для первого продукта
            $('.container_products_list-item:first').addClass('active');

            // Обновляем пагинацию
            updatePagination(data.current_page, data.last_page);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}


function createProductHtml(product) {
    var imageHtml = '';
    var textHtml = '';
    switch (product.image_platform) {
                case 'Steam':
                    imageHtml = '<img src="{{ asset('site/assets/images/STEAM.png') }}" />';
                    break;
                case 'PS':
                    imageHtml = '<img src="{{ asset('site/assets/images/PS.png') }}" />';
                    break;
                case 'Epic Games':
                    imageHtml = '<img src="{{ asset('site/assets/images/EPIC.png') }}" />';
                    break;
                case 'Ubisoft':
                    imageHtml = '<img src="{{ asset('site/assets/images/ubisoft.png') }}" />';
                    break;
                case 'Rockstar':
                    imageHtml = '<img src="{{ asset('site/assets/images/rockstar.png') }}" />';
                    break;
                default:
                    break;
    }

    switch (product.image_platform) {
                case 'Steam':
                    textHtml = '<label>Steam[PC]</label>';
                    break;
                default:
                    break;
    }

    return `

        <tr class="container_products_list-item">
            <td>
                <div class="item_name">
                    <div class="item_name-logo">
                        ${imageHtml}
                        <label>${product.image_platform}</label>
                    </div>
                    <span>${product.product}</span>
                </div>
            </td>
            <td>
                <div class="item_description">
                    <label>${product.price} руб, Торговая площадка</label>
                        <div class="item_description-rate">
                            <img src="{{ asset('site/assets/images/rate-star.svg') }}" alt="">
                            <span>${(Math.round(product.average_rating * 10) / 10).toFixed(1)}</span>
                        </div>
                    <span class="item_description-purchases">Всего покупок: ${product.count_buy}</span>
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
                                        ${textHtml}
                                    </div>
                                </div>

                            </div>
                        </td>
                        <td>
                            <div class="item_order">
                                <a href="#" class="item_order-take">
                                    <span>Оформление заказа</span>
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

    `;
}




var prevDate = null; // Переменная для хранения даты предыдущего сообщения

function addMessageToChat(data) {
    // Get the current date
    var today = new Date();
    var messageDate = new Date(data.message.created_at);

    var chatElement;
    var dateElement = null;
    var avatarElement = null;
    var nameElement = null;

    // Check if the message is from the current day
    if (messageDate.getDate() === today.getDate() &&
        messageDate.getMonth() === today.getMonth() &&
        messageDate.getFullYear() === today.getFullYear()) {
        // Check if the message is from the current user
        if (data.message.user_id === authId) {
            chatElement = $('<div class="chat_main_to"></div>');
        } else if(data.message.user_id === currentActiveUserId) {
            chatElement = $('<div class="chat_main_from"></div>');
        }

        // Show the date only if it's the first message of the day
        if (prevDate === null || prevDate.getDate() !== messageDate.getDate() || prevDate.getMonth() !== messageDate.getMonth() || prevDate.getFullYear() !== messageDate.getFullYear()) {
            dateElement = $('<label class="chat_main_to-date chat_main_from-date">Сегодня</label>');
            chatElement.prepend(dateElement);
        }

        // Show the time in the message
        var options = { hour: 'numeric', minute: 'numeric', timeZone: 'Europe/Moscow' };
        var formattedTime = messageDate.toLocaleString('ru-RU', options);
        var messageElement = $('<span data-message-id="' + data.message.id + '"><p>' + data.message.message + ' <span class="message-time">' + formattedTime + '</span></p></span>');
        messageElement.find('.message-time').css({
            'font-size': '0.6em',
            'margin-left': '5px',
            'color':'black'
        });
        chatElement.append(messageElement);

        // Append the new message to the bottom of the chat
        $('.chat_main_to, .chat_main_from').last().after(chatElement);

        // Update the prevDate variable
        prevDate = messageDate;
    }
}


function playNotificationSound() {
    // Проверяем, поддерживает ли браузер HTML5 Audio API
    if (audio && audio.play) {
        audio.play();
    }
}


});
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
