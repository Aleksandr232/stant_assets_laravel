<div id="modal_avatar" class="modal">
    <div class="modal-content">
      <span class="close-button">&times;</span>
      <h2>Добавить аватар</h2>
      <div class="user-image">
        <img for="avatar-input" src="{{ asset('site/assets/images/profile/profileIcon.png')}}" alt="Аватар пользователя" id="user-avatar">
        {{-- <label for="avatar-input" class="upload-button">Загрузить фото</label> --}}
        <input type="file" id="avatar-input" class="hidden">
      </div>
      <button id="save-avatar">Сохранить</button>
    </div>
</div>
