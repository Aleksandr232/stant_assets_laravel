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
            channel.bind('App\\Events\\MessageSent', function(data) {
                // Проверяем, является ли текущий пользователь отправителем или получателем сообщения
                if (data.message.sender_id === authId || data.message.recipient_id === currentActiveUserId) {
                    // Проверяем, было ли это сообщение уже добавлено в чат
                    if ($('.chat_main_to, .chat_main_from').find('span[data-message-id="' + data.message.id + '"]').length === 0) {
                        // Если нет, то добавляем сообщение в чат
                        addMessageToChat(data);
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
            $('.chat_main_to, .chat_main_from').empty();

            // Iterate through the received messages and append them to the HTML
            $.each(data, function(index, message) {
                var today = new Date();
                var messageDate = new Date(message.created_at);

                var chatElement;
                var dateElement = null;
                var avatarElement = null;
                var nameElement = null;

                // Check if the message is from the current user
                if (message.user_id === authId) {
                    chatElement = $('<div class="chat_main_to"></div>');
                } else if(message.user_id === currentActiveUserId) {
                    chatElement = $('<div class="chat_main_from"></div>');
                }

                // Show the time for each message
                var options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', timeZone: 'Europe/Moscow' };
                var formattedDate = messageDate.toLocaleString('ru-RU', options);
                dateElement = $('<label class="chat_main_to-date chat_main_from-date">' + formattedDate + '</label>');
                chatElement.append(dateElement);

                var messageElement = $('<span data-message-id="' + message.id + '"><p>' + message.message + '</p></span>');
                chatElement.append(messageElement);

                // Append the new message to the bottom of the chat
                $('.chat_main_to, .chat_main_from').last().after(chatElement);
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





    function addMessageToChat(data) {
    // Get the current date
    var today = new Date();
    var messageDate = new Date(data.message.created_at);

    // Check if the message is from the current day
    if (messageDate.getDate() === today.getDate() &&
        messageDate.getMonth() === today.getMonth() &&
        messageDate.getFullYear() === today.getFullYear()) {
        var chatElement;
        var dateElement = null;
        var avatarElement = null;
        var nameElement = null;

        // Check if the message is from the current user
        if (data.message.user_id === authId) {
            chatElement = $('<div class="chat_main_to"></div>');
        } else if(data.message.user_id === currentActiveUserId) {
            chatElement = $('<div class="chat_main_from"></div>');

        }

        // Show the time only for the first message of the day
        if ($('.chat_main_to-date, .chat_main_from-date').length === 0 || $('.chat_main_to-date, .chat_main_from-date').last().text() !== 'Сьогодні о ' + messageDate.getHours() + ':' + messageDate.getMinutes()) {
            dateElement = $('<label class="chat_main_to-date chat_main_from-date">Сьогодні о ' + messageDate.getHours() + ':' + messageDate.getMinutes() + '</label>');
            chatElement.append(dateElement);
        }

        var messageElement = $('<span data-message-id="' + data.message.id + '"><p>' + data.message.message + '</p></span>');
        chatElement.append(messageElement);

        // Append the new message to the bottom of the chat
        $('.chat_main_to, .chat_main_from').last().after(chatElement);
    }
}


});
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
