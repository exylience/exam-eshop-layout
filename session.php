<?php
session_start();
require_once 'core/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM `sessions` WHERE (`id` = '$id')";
$response = mysqli_query($connection, $query);
if (mysqli_num_rows($response) === 0) {
    header('Location: /index.php');
} else {
    $session = mysqli_fetch_assoc($response);
}
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
                    <a class="nav-link" href="about.php">О нас</a>
                    <a class="nav-link active" href="#">Афиша</a>
                    <a class="nav-link" href="address.php">Где нас найти?</a>

                    <?php
                        if (!isset($_SESSION['user'])) {
                            ?>
                                <a class="nav-link" href="login.php">Аутентификация</a>
                                <a class="nav-link" href="register.php">Регистрация</a>
                            <?php
                        } else {
                            if ($_SESSION['user']['group'] === 2) {
                                ?>
                                    <a class="nav-link" href="admin/index.php">Панель администратора</a>
                                <?php
                            }
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
                    <h3 class="section-title">Сеанс</h3>
                </div>

                <div class="sessions-full">
                    <img class="session-photo" src="uploads/<?= $session['photo_url'] ?>" alt="#">

                    <div class="session-info">
                        <h3 class="session-title"><?= $session['title'] ?></h3>
                        <h3 class="session-date">Дата начала: <?= $session['date_start'] ?></h3>
                        <h3 class="session-age">Возрастной ценз: <?= $session['age_rating'] ?></h3>
                        <h3 class="session-price">Цена: <?= $session['price'] ?></h3>

                        <?php
                            if (isset($_SESSION['user'])) {
                                ?>
                                    <a class="session-cart" href="#">В корзину</a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>