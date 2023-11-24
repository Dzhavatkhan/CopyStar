<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>

    <header>
        <img src="{{asset('img/main/CopyStar.svg')}}" alt="" class="logotype">
        <input type="search" class="search" name="search" placeholder="Поиск..." id="">
        <nav>
            <ul>
                <li>Каталог</li>
                <li>О нас</li>
                <li>
                    <button>Войти</button>
                </li>
            </ul>
        </nav>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
              <img src="{{ asset('img/products/bbd6e8f5d231394fe05bc35e441dd6a266878d5.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/bcb36e7704bb2399e9320beaad6eac63ddfaa2.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/efeb472d10ed096b0761022b117561f84b77fd.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
          </div>
    </header>

    <main>

    </main>

    <footer>

    </footer>

<script>
const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");
let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}
arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});
</script>
</body>
</html>
