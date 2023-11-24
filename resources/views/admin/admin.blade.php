<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite('resources/css/admin.css')
    <title>Admin</title>
</head>
<body>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Товары</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Заказы</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        <a href="{{route('log_out')}}">Выйти</a>
      </div>

      <div id="London" class="tabcontent">





        @include('components.admin.addProduct')
            <div class="container mt-3">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Название продукта</th>
                      <th>Категория</th>
                      <th>Цена</th>
                      <th>Изображение</th>
                    </tr>
                  </thead>
                  <tbody id="getProducts">

                  </tbody>
                </table>
              </div>

      </div>
        </div>
    </div>

      <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
      </div>

      <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>

      <script>
        $(document).ready(function () {
            getProducts();
        });
        function getProducts(){
            let products = 'products';
            $.ajax({
                type: "GET",
                url: "{{route('getProducts')}}",
                data: {products: products},
                case:false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#getProducts').html(data);
                    console.log("products");
                }
            });
        }
            $('.addProduct').on('submit', function (e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{route('addProduct')}}",
                    data: formData,
                    processData: false,
                    cache:false,
                    contentType:false,
                    success: function (response) {
                        console.log(response);
                        getProducts();
                    },
                    error: function (error){
                        console.log(error);
                    }
                });
            });
            function deleteProduct(id){

                if (confirm("Подтведите свое действие") == true) {
                    $.ajax({
                    type: "GET",
                    url: "{{route('deleteProduct')}}",
                    data: {product_id:id},
                    cache:false,
                    success: function (response) {
                        console.log(response);
                        getProducts();
                    }
                });
                }

            }
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>

</body>
</html>
