<div id="modal_avatar" class="modal">
    <div class="modal-content">
      <span class="close-button">&times;</span>
      <h2>Добавить аватар</h2>
      <form action="{{ route('addAvatar') }}" method="post">
        @csrf
            <div class="user-image">
                <img  src="{{ asset('site/assets/images/profile/profileIcon.png')}}" alt="Аватар пользователя" id="user-avatar">
                <input name="avatar" type="file" id="avatar-input" class="hidden">
            </div>
            <button type="submit" id="save-avatar">Сохранить</button>
    </form>
    </div>
</div>
