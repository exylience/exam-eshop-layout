<?php
session_start();
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NeNetFlix</title>
        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <a class="logo" href="index.php">NeNetFlix</a>

                <nav>
                    <a class="nav-link" href="about.php">О нас</a>
                    <a class="nav-link" href="#">Афиша</a>
                    <a class="nav-link active" href="#">Где нас найти?</a>

                    <?php
                        if (!isset($_SESSION['user'])) {
                            ?>
                                <a class="nav-link" href="login.php">Аутентификация</a>
                                <a class="nav-link" href="register.php">Регистрация</a>
                            <?php
                        } else {
                            ?>
                                <a class="nav-link logout" href="core/auth/logout.php">Выход</a>
                            <?php
                        }
                    ?>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Где нас найти?</h3>
                </div>

                <div class="map-wrapper">
                    <img class="map" src="assets/img/map.jpg" alt="#">
                </div>

                <div class="contact-info">
                    <p class="contact-address">ул. Пушкина, 43</p>
                    <p class="contact-phone">8 (800) 555-35-35</p>
                    <p class="contact-email">test@test.ru</p>
                </div>
            </div>
        </section>
    </body>
</html>