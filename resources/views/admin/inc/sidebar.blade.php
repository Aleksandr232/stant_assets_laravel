<div class="sidebar">
    <h4 class="p-3">Админ панель</h4>
    <ul class="sidebar-nav">
      <li><a href="#"><i class="fas fa fa-home me-2"></i>Главная</a></li>
      <li><a href="#"><i class="fas fa-store me-2"></i>Товары</a></li>
      <li><a href="#"><i class="fas fa-language me-2"></i>Языки</a></li>
      <li><a href="#"><i class="fas fa-cogs me-2"></i>Настройки</a></li>
      <li>
        <form style="position:absolute; left:50px" method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-primary">Выйти</button>
        </form>
      </li>
    </ul>
  </div>
