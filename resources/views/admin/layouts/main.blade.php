<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin_panel/css/chat.css')}}?v={{ time() }}">
  <link rel="stylesheet" href="{{asset('admin_panel/css/style.css')}}?v={{ time() }}">
</head>
<body>
  @include('admin.inc.sidebar')
  @include('admin.inc.navbar')
  @include('admin.inc.modal')
<main>
    @yield('content')
</main>


{{-- @if (session()->has('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var successAlert = document.getElementById('success-alert');


            if (successAlert) {
                setTimeout(function() {
                    successAlert.remove();
                }, 1000);
            }
        });
    </script>
@endif --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="{{ asset('site/js/index.js')}}?v={{ time() }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
    const sidebar = document.querySelector('.sidebar');
    const toggleSidebarBtn = document.getElementById('toggleSidebar');
    const content = document.querySelector('.content');

    toggleSidebarBtn.addEventListener('click', () => {
      sidebar.classList.toggle('expanded');
      content.classList.toggle('expanded');
    });
  </script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
    $('#redactor').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
    $('#purchase_textarea').summernote({
      placeholder: 'Введите дополнительно про аккаунт',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
    $('#product_desc').summernote({
      placeholder: 'Введите описание товара',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
    $('#text_textarea').summernote({
      placeholder: 'Введите текст',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
  <script>
    $(document).ready(function() {
        $('.btn-edit').click(function() {
            var userId = $(this).data('user-id');
            var userName = $(this).data('user-name');
            var userEmail = $(this).data('user-email');
            var userBalance = $(this).data('user-balance');

            $('#name').val(userName);
            $('#email').val(userEmail);
            $('#balance').val(userBalance);

            $('#editForm').attr('action', '{{ route("update_data", ":id") }}'.replace(':id', userId));
        });
    });
  </script>

<script>
    $(document).ready(function() {
        $('.btn-update').click(function() {
            var productId= $(this).data('product-id');
            var productName = $(this).data('product-name');
            var productPrice = $(this).data('product-price');
            var productDesc = $(this).data('product-desc');
            var infoShop = $(this).data('product-shop');
            var infoReturn = $(this).data('product-return');


            $('#product').val(productName);
            $('#price').val(productPrice);
            $('#desc').val(productDesc);
            $('#info_shop').val(infoShop);
            $('#product_return').val(infoReturn);


            $('#desc').summernote({
            placeholder:productDesc ,
            tabsize: 2,
            height: 120,
            value:productDesc,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],

        });

            $('#updateForm').attr('action', '{{ route("update_product", ":id") }}'.replace(':id', productId));
        });
    });




  </script>

<script>
    $(document).ready(function() {
        $('.btn-purchase').click(function() {
            var purchaseId= $(this).data('purchase-id');


            $('#purchaseForm').attr('action', '{{ route("update_purchases", ":id") }}'.replace(':id', purchaseId));
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
                url: '{{ route('sendMessageAdmin', [':id', ':userId']) }}'
                .replace(':id', authId)
                .replace(':userId', currentActiveUserId),
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
                if (data.message.sender_id === currentActiveUserId || data.message.recipient_id === authId) {
                    // Проверяем, было ли это сообщение уже добавлено в чат
                    if ($('.chat_main_to, .chat_main_from').find('span[data-message-id="' + data.message.id + '"]').length === 0) {
                        // Если нет, то добавляем сообщение в чат
                        addMessageToChat(data);
                    }

                    // Проверяем, было ли уже показано уведомление для этого сообщения
                    if (data.message.user_id == currentActiveUserId && !shownNotifications[data.message.id]) {
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

            $('.chat_header_to span').text(data[0].sender_name);

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



});
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
