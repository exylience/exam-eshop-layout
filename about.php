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
                <a class="logo" href="index.php">NeNetFlix</a>

                <nav>
                    <a class="nav-link active" href="#">О нас</a>
                    <a class="nav-link" href="#">Афиша</a>
                    <a class="nav-link" href="address.php">Где нас найти?</a>
                    <a class="nav-link" href="login.php">Аутентификация</a>
                    <a class="nav-link" href="register.php">Регистрация</a>
                </nav>
            </div>
        </header>

        <section class="about-banner">
            <div class="container">
                <h1 class="banner-title">NeNetFlix</h1>
                <p class="banner-promo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem blanditiis soluta ut?</p>
            </div>
        </section>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Новые сеансы</h3>
                </div>

                <div class="slider">
                    <div class="slider-item">
                        <img src="assets/img/films/gladiator.jfif" alt="#">
                        <a class="slider-item-title" href="#">Гладиатор</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/films/shrek.jfif" alt="#">
                        <a class="slider-item-title" href="#">Шрек</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/films/t5Mai3JtXcIicVJuHD.jfif" alt="#">
                        <a class="slider-item-title" href="#">Король Лев</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/films/t5Mai3JtXcIicVJuHDD3ioNcZR.jfif" alt="#">
                        <a class="slider-item-title" href="#">Остров проклятых</a>
                    </div>

                    <div class="slider-item">
                        <img src="assets/img/films/vVowod5cVVgupNOJbN01SPVmVO3nIecPWlbvTCc2dVZARjMpR4RVo2z.jfif" alt="#">
                        <a class="slider-item-title" href="#">Карты, деньги, два ствола</a>
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
