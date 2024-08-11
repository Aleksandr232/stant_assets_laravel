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
   $(document).ready(function() {

    // Инициализация Pusher
    Pusher.logToConsole = true;

    var pusher = new Pusher('13d5f420787d5aa468b8', {
        cluster: 'eu'
    });

    $.ajax({
    url: '{{ route("getAllUsers") }}',
    type: 'GET',
    success: function(data) {
        // Очистить существующий список
        $('.chat_list').empty();

        // Создать элементы списка пользователей
        $.each(data, function(index, user) {
            var $listItem = $('<a>').addClass('chat_list-item').attr('data-user-id', user.id);
            var $leftSpan = $('<span>').addClass('chat_list-item-left');
            var $img = $('<img>').attr('src', './assets/images/Ellipse 2.png');
            var $nameLabel = $('<label>').text(user.name);
            var $emailParagraph = $('<p>').text(user.email);
            var $rightSpan = $('<span>').addClass('chat_list-item-right');
            var $timeSpan = $('<span>').text('Today, 8:56pm');
            var $messagesDiv = $('<div>').addClass('chat_list-item-right-messages').text('2');

            $leftSpan.append($img, $('<span>').append($nameLabel, $emailParagraph));
            $rightSpan.append($timeSpan, $messagesDiv);
            $listItem.append($leftSpan, $rightSpan);
            $('.chat_list').append($listItem);
        });

        // Добавить обработчик клика на элементы списка
        $('.chat_list').on('click', '.chat_list-item', function() {
            var userId = $(this).data('user-id');
            sendMessage(message, userId);
            console.log('Нажато на пользователя с ID:', userId);
            // Выполнить дополнительные действия на основе идентификатора пользователя
        });
    },
    error: function(xhr, status, error) {
        console.error('Error fetching user data:', error);
        // Отобразить сообщение об ошибке пользователю
        $('#error-message').text('Произошла ошибка при загрузке данных. Пожалуйста, попробуйте еще раз позже.');
    }
});

function sendMessage(message, userId) {
    var formData = new FormData();
    formData.append('message', message);
    formData.append('userId', userId);

    $.ajax({
        url: '{{ route('sendMessage', ['id' => 'userId']) }}',
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
            addMessageToChat(data.user, data.message.message);
        },
        error: function(xhr, status, error) {
            console.error('Error sending message:', error);
        }
    });
}


    $('#send-button').click(function(e) {
    e.preventDefault();
    var message = $('#message').val();
    sendMessage(message, {{ $userId }});
    /* var message = $('#message').val(); */



    // Получение сообщений в реальном времени
    var channel = pusher.subscribe('chat.' + {{ $userId }});
    channel.bind('App\\Events\\MessageSent', function(data) {
    console.log('Received data:', data);
    addMessageToChat(data);
    });


    function addMessageToChat(data) {
    // Get the current date
    var today = new Date();
    var messageDate = new Date(data.message.created_at);

    // Check if the message is from the current day
        if (messageDate.getDate() === today.getDate() &&
            messageDate.getMonth() === today.getMonth() &&
            messageDate.getFullYear() === today.getFullYear()) {
            var chatElement = $('<div class="chat_main_to"></div>');
            var dateElement = null;

            // Show the time only for the first message of the day
            if ($('.chat_main_to-date').length === 0) {
            dateElement = $('<label class="chat_main_to-date">Сьогодні о ' + messageDate.getHours() + ':' + messageDate.getMinutes() + '</label>');
            chatElement.append(dateElement);
            }

            var messageElement = $('<span><img src=""/><p>' + data.message.message + '</p></span>');
            chatElement.append(messageElement);

            // Append the new message to the bottom of the chat
            $('.chat_main_to').last().after(chatElement);
        }
    }
});
   })
</script>

</body>
</html>
