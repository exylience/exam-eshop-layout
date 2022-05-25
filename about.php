<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NeNetFlix | О нас</title>
        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <a class="logo" href="index.php">Copy Star</a>

                <nav>
                    <a class="nav-link active" href="#">О нас</a>
                    <a class="nav-link" href="#">Афиша</a>
                    <a class="nav-link" href="#">Где нас найти?</a>
                    <a class="nav-link" href="login.php">Аутентификация</a>
                    <a class="nav-link" href="register.php">Регистрация</a>
                </nav>
            </div>
        </header>

        <section class="about-banner">
            <div class="container">
                <h1 class="banner-title">Copy Star</h1>
                <p class="banner-promo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem blanditiis soluta ut?</p>
            </div>
        </section>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Новинки компании</h3>
                </div>

                <div class="slider">
                    <div class="slider-item">
                        <img src="assets/img/slider-img-1.jpg" alt="#">
                        <a class="slider-item-title" href="#">Товар 1</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/slider-img-2.jpg" alt="#">
                        <a class="slider-item-title" href="#">Товар 2</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/slider-img-3.jpg" alt="#">
                        <a class="slider-item-title" href="#">Товар 3</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/slider-img-4.jpg" alt="#">
                        <a class="slider-item-title" href="#">Товар 4</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/slider-img-5.jpg" alt="#">
                        <a class="slider-item-title" href="#">Товар 5</a>
                    </div>

                    <div class="slider-nav">
                        <a class="slider-nav-btn prev" href="#" onclick="animateSlider(true)"><</a>
                        <a class="slider-nav-btn next" href="#" onclick="animateSlider()">></a>
                    </div>
                </div>
            </div>
        </section>

        <script src="assets/js/slider.js"></script>
    </body>
</html>
