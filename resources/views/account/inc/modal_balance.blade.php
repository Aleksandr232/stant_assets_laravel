<div id="modal" class="modal">
    <div class="modal-content">
      <span class="close-button">&times;</span>
      <h2>Пополнить баланс</h2>
      <div class="form-container">
        <form action="{{ route('addBalance') }}" method="post" class="balance-form">
            @csrf
            <input type="number" name="amount"  class="balance-input"  placeholder="Введите сумму">
          <button class="btn_balance" type="submit">Пополнить</button>
        </form>
      </div>
    </div>
  </div>
