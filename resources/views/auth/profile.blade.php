<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    @vite('resources/css/profile.css')
</head>
<body>
    <div class="nav">
        <button class="tablink" onclick="openPage('Home', this, '#5E9FF2')">Ваша корзина</button>
        <button class="tablink" onclick="openPage('News', this, '#5E9FF2')" id="defaultOpen">Ваши заказы</button>
        <button class="tablink"  id="defaultOpen"><a href="{{ route('logout') }}">Выйти</a></button>
    </div>

        <div id="Home" class="tabcontent">
            <div class="container">
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">

                    </div>
                    <div class="card-inf">
                        <p class="card-name">
                            Name
                        </p>
                        <p class="card-price">
                            Price
                        </p>
                        <p class="card-category">
                            category
                        </p>
                        <p class="card-quantity">
                            1
                        </p>
                        <button class="card-buy">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="News" class="tabcontent">
        <h3>News</h3>
        <p>Some news this fine day!</p>
        </div>


<script>
    function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
</body>
</html>
