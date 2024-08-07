@php
        use App\Models\Category;
        use App\Models\FilterPrice;
        use App\Models\FilterService;
        use App\Models\FilterPlatform;

        $filterprice = FilterPrice::all();
        $filterplatform = FilterPlatform::all();
        $filterservice = FilterService::all();

        $category = Category::all("name_category");
@endphp
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
          <form  method="post" action="{{ route('category') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="categoryName" class="form-label">Название категории</label>
              <input type="text" name="name_category" class="form-control" id="categoryName" placeholder="Введите название категории">
              <label for="categoryName"  class="form-label">Описание категории</label>
              <input type="text" name="desc_category" class="form-control" id="categoryName" placeholder="Введите описание категории">
              <label for="categoryName" class="form-label">Фото</label>
              <input type="file" name="file"  class="form-control" id="categoryName" placeholder="Введите название категории">
              <label for="categoryName" class="form-label">Ссылка</label>
              <input type="text" name="path"  class="form-control" id="categoryName" placeholder="Введите ссылку картинки">
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
          <form method="post" action="{{ route('product') }}" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
              <label for="productName" class="form-label">Название товара</label>
              <input type="text" name="product" class="form-control" id="productName" placeholder="Введите название товара">
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать категорию</label>
                <select  class="form-control" id="productName" name="category" id="">
                    @foreach($category as $post)
                    <option value="{{$post->name_category}}">{{$post->name_category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать фильтр по цене</label>
                <select class="form-control" id="productName" name="filter_price">
                    @foreach($filterprice as $post)
                    @if($post->filter_price)
                        <option value="{{$post->filter_price}}">{{$post->filter_price}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать фильтр по платформе</label>

                <select class="form-control" id="productName" name="filter_platform">
                    @foreach($filterplatform as $post)
                        @if($post->filter_platform)
                            <option value="{{$post->filter_platform}}">{{$post->filter_platform}}</option>
                        @endif
                    @endforeach
                </select>

            </div>

            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать фильтр по услуги</label>

                <select class="form-control" id="productName" name="filter_service">
                    @foreach($filterservice as $post)
                        @if($post->filter_service)
                            <option value="{{$post->filter_service}}">{{$post->filter_service}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="productPrice" class="form-label">Цена</label>
              <input type="number" name="price" class="form-control" id="productPrice" placeholder="Введите цену">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Описание товара</label>
                <textarea name="desc_product" id="product_desc" cols="30" rows="10"></textarea>

              </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Фото товара</label>
                <input type="file" multiple name="product_img[]" class="form-control" id="productPrice" placeholder="Введите цену">
              </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Модальное окно для фильтров -->
  <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="filterModalLabel">Добавить фильтр</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Форма для добавления товара -->
          <form method="post" action="{{ route('filter') }}">
            @csrf
            <div class="mb-3">
              <label for="filterPrice" class="form-label">Фильтр по цене</label>
              <input type="text" name="filter_price" class="form-control" id="filterPrice" placeholder="Введите максимальную цену">
            </div>
            <div class="mb-3">
              <label for="filterService" class="form-label">Фильтр по услуге</label>
              <input type="text" name="filter_service" class="form-control" id="filterPrice" placeholder="Введите услугу">
            </div>
            <div class="mb-3">
              <label for="filterPlatform" class="form-label">Фильтр по платформе</label>
              <input type="text" name="filter_platform" class="form-control" id="filterPrice" placeholder="Введите платформу">
            </div>
            <button type="submit" class="btn btn-primary">Применить фильтры</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="blogModalLabel">Добавить пост</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('create_blog') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="filterPrice" class="form-label">Название поста</label>
                  <input type="text" name="name_post" class="form-control" id="filterPrice" placeholder="Введите название">
                </div>
                <div class="mb-3">
                  <label for="filterService" class="form-label">Добавить картинки</label>
                  <input type="file" multiple name="img_post[]" class="form-control" id="productPrice">
                </div>
                <div class="mb-3">
                    <textarea name="content_blog" id="summernote" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cохранить</button>
              </form>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="politicsModal" tabindex="-1" aria-labelledby="politicsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="politicsModalLabel">Добавить политику конфиденциальности</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('create_politics') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <textarea name="content_politics" id="redactor" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cохранить</button>
            </form>

        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm" method="post" {{-- action="{{ route('update_data', $user->id) }}" --}}>
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="balance" class="form-label">Баланс</label>
                        <input type="number" class="form-control" id="balance" name="balance" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Обновить товар</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Форма для добавления товара -->
          <form id="updateForm" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
              <label for="productName" class="form-label">Название товара</label>
              <input type="text" name="product" class="form-control" id="product" placeholder="Введите название товара">
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать категорию</label>
                <select  class="form-control" id="productName" name="category" id="">
                    @foreach($category as $post)
                    <option value="{{$post->name_category}}">{{$post->name_category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать фильтр по цене</label>
                <select class="form-control" id="productName" name="filter_price">
                    @foreach($filterprice as $post)
                    @if($post->filter_price)
                        <option value="{{$post->filter_price}}">{{$post->filter_price}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать фильтр по платформе</label>

                <select class="form-control" id="productName" name="filter_platform">
                    @foreach($filterplatform as $post)
                        @if($post->filter_platform)
                            <option value="{{$post->filter_platform}}">{{$post->filter_platform}}</option>
                        @endif
                    @endforeach
                </select>

            </div>

            <div class="mb-3">
                <label for="productName" class="form-label">Выбрать фильтр по услуги</label>

                <select class="form-control" id="productName" name="filter_service">
                    @foreach($filterservice as $post)
                        @if($post->filter_service)
                            <option value="{{$post->filter_service}}">{{$post->filter_service}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="productPrice" class="form-label">Цена</label>
              <input type="number" name="price" class="form-control" id="price" placeholder="Введите цену">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Описание товара</label>
                <textarea class="desc" name="desc_product" id="desc" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Фото товара</label>
                <input type="file" multiple name="product_img[]" class="form-control" id="productPrice" placeholder="Введите цену">
              </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="purchaseModalLabel">Подвердить покупку</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="purchaseForm" method="post"  >
            @csrf

            <div class="mb-3">
                <label for="productPrice" class="form-label">Статус доставки</label>
                <select name="status_purchase" class="form-control" id="productName">
                            <option value="Доставлен">Доставлен</option>
                            <option value="Неудача">Неудача</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Статус оплаты</label>
                <select name="account_details_purchase" class="form-control" id="productName">
                            <option value="Оплачен">Оплачен</option>
                            <option value="503 ERROR">503 ERROR</option>
                            <option value="Отправить аккаунт">Отправить аккаунт</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Account ID</label>
                <input type="text" name="account_id" class="form-control"  placeholder="Введите данные аккаунта">
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label">Password</label>
                <input type="text" name="account_password" class="form-control"  placeholder="Введите данные аккаунта">
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label">Account email</label>
                <input type="text" name="account_email" class="form-control"  placeholder="Введите данные аккаунта">
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label">Email password</label>
                <input type="text" name="email_password" class="form-control"  placeholder="Введите данные аккаунта">
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label">Email link</label>
                <input type="text" name="email_link" class="form-control"  placeholder="Введите данные аккаунта">
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label">Additional note</label>
                <textarea name="additional" id="purchase_textarea" cols="30" rows="10"></textarea>
              </div>

              {{-- <div id="summernote"><p>Hello Summernote</p></div> --}}
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

