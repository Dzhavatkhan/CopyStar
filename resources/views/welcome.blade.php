<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <style>
.wrapper{
  display: flex;
  max-width: 1200px;
  position: relative;
}
.wrapper i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #fff;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper i:hover{
  background: #f2f2f2;
}
.wrapper i:first-child{
  left: -22px;
  display: none;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  height: 340px;
  object-fit: cover;
  user-select: none;
  margin-left: 14px;
  width: calc(100% / 3);
}
.carousel img:first-child{
  margin-left: 0px;
}
@media screen and (max-width: 900px) {
  .carousel img{
    width: calc(100% / 2);
  }
}
@media screen and (max-width: 550px) {
  .carousel img{
    width: 100%;
  }
}
    </style>
    <header>
        <img src="" alt="" class="logotype">
        <input type="search" name="search" id="">
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
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
              <img src="{{ asset('img/products/a28823cdf04e7b1ad2aacc9033cd5bf12308d418.jpg') }}" alt="img" draggable="false">
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