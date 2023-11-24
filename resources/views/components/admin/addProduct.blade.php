<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Добавить продукт
</button>

 <!-- The Modal -->
  <div class="modal" id="myModal">
    <form  class="addProduct" >
        @csrf
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Добавление товара</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Название товара</label>
                    <input type="text" class="form-control" id="email" placeholder="Название товара" name="name">
                </div>
                <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Цена</label>
                        <input type="text" class="form-control" id="email" placeholder="Цена" name="price">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Кол-во</label>
                    <input type="text" class="form-control" id="email" placeholder="Кол-во" name="quantity">
                </div>
                <div class="mb-3 mt-3">
                        <label for="browser" class="form-label">Выберите категорию</label>
                        <input class="form-control" list="categories" name="category_id" id="browser">
                        <datalist id="categories">
                            @foreach ($categories as $category)
                            <option value="{{$category->name}}">
                            @endforeach
                        </datalist>
                </div>

                <div class="mb-3 mt-3">
                        <label for="" class="form-label">Изобржение</label>
                        <input class="form-control" type="file" name="image">
                </div>


            </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Отправить</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
        </div>
    </div>
    </form>

</div>
</div>
