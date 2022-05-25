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
                <a class="logo" href="#">NeNetFlix</a>

                <nav>
                    <a class="nav-link active" href="about.php">О нас</a>
                    <a class="nav-link" href="#">Афиша</a>
                    <a class="nav-link" href="#">Где нас найти?</a>

                    <?php
                        if (!isset($_SESSION['user'])) {
                            ?>
                                <a class="nav-link" href="login.php">Аутентификация</a>
                                <a class="nav-link" href="register.php">Регистрация</a>
                            <?php
                        } else {
                            ?>
                                <a class="nav-link logout" href="core/auth/logout.php">Выйти</a>
                            <?php
                        }
                    ?>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">

            </div>
        </section>

        <footer class="footer">
            <div class="container">

            </div>
        </footer>
    </body>
</html>