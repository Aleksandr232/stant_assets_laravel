<div class="sidebar">
    <h4 class="p-3">Админ панель</h4>
    <ul class="sidebar-nav">
      <li><a href="{{ route('admin') }}"><i class="fas fa fa-home me-2"></i>Главная</a></li>
      <li><a href="{{ route('product.index') }}"><i class="fas fa-store me-2"></i>Товары</a></li>
      <li><a href="{{ route('users.index') }}"><i class="fas fa-user me-2"></i>Пользователи</a></li>
      <li><a href="{{ route('chat.index') }}"><i class="fas fa-comment me-2"></i>Чат</a></li>
      <li><a href="{{ route('blog.index') }}"><i class="fas fa-pencil me-2"></i> Блог</a></li>
      <li><a href="{{ route('politics.index') }}"><i class="fas fa-edit me-2"></i> Политика</a></li>
      <li><a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#h1Modal">
        <i class="fas fa-edit me-2"></i> Загаловок
      </a></li>
      <li><a href="#"><i class="fas fa-language me-2"></i>Языки</a></li>
      <li><a href="{{ route('platform.index') }}"><i class="fas fa-cogs me-2"></i>Настройки</a></li>
      <li>
        <form style="position:absolute; left:50px" method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-primary">Выйти</button>
        </form>
      </li>
    </ul>
  </div>
