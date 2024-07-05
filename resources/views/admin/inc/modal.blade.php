<!-- Модальное окно для категории -->
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="categoryModalLabel">Добавить категорию</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Форма для добавления категории -->
          <form>
            <div class="mb-3">
              <label for="categoryName" class="form-label">Название категории</label>
              <input type="text" class="form-control" id="categoryName" placeholder="Введите название категории">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Модальное окно для товаров -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Добавить товар</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Форма для добавления товара -->
          <form>
            <div class="mb-3">
              <label for="productName" class="form-label">Название товара</label>
              <input type="text" class="form-control" id="productName" placeholder="Введите название товара">
            </div>
            <div class="mb-3">
              <label for="productPrice" class="form-label">Цена</label>
              <input type="number" class="form-control" id="productPrice" placeholder="Введите цену">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
