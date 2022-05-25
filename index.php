<?php
session_start();
require_once 'core/db.php';

$now = date('Y-m-d H:i:s', time());
$query = "SELECT * FROM `sessions` WHERE (DATE(`date_start`) > DATE(NOW())) ORDER BY `id` DESC";
$response = mysqli_query($connection, $query);
$sessions = mysqli_fetch_all($response, MYSQLI_ASSOC);
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
                    <h3 class="section-title">Афиша</h3>
                </div>

                <div class="sessions-list">
                    <?php
                        foreach ($sessions as $session) {
                            ?>
                                <a href="session.php?id=<?= $session['id'] ?>">
                                    <div class="session">
                                        <?php
                                            if (isset($_SESSION['user'])) {
                                                ?>
                                                    <a class="session-cart-sm" href="#">В корзину</a>
                                                <?php
                                            }
                                        ?>

                                        <img class="session-photo <?= !isset($_SESSION['user']) ? 'rounded' : '' ?>" src="uploads/<?= $session['photo_url'] ?>" alt="#">


                                        <div class="session-btm">
                                            <h3 class="session-title"><?= $session['title'] ?></h3>
                                            <p class="session-price"><?= $session['price'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>