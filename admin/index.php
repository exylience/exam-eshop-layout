<?php
session_start();
require_once '../core/db.php';

if (
    !isset($_SESSION['user']) ||
    $_SESSION['user']['group'] !== 2
) {
    header('Location: /index.php');
}

$query = "SELECT * FROM `sessions`";
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
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <a class="logo" href="#">NeNetFlix</a>

                <nav>
                    <a class="nav-link active" href="#">Сеансы</a>
                    <a class="nav-link" href="genres.php">Жанры</a>
                    <a class="nav-link" href="#">Заказы</a>
                    <a class="nav-link logout" href="../core/auth/logout.php">Выход</a>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Управление сеансами</h3>

                    <a class="section-link" href="sessions/add.php">Добавить сеанс</a>
                </div>

                <table class="admin-table">
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Дата показа</th>
                        <th>Возрастной ценз</th>
                        <th>Цена</th>
                        <th>Действия</th>
                    </tr>

                    <?php
                        foreach ($sessions as $session) {
                            ?>
                                <tr>
                                    <td>#<?= $session['id'] ?></td>
                                    <td><?= $session['title'] ?></td>
                                    <td><?= $session['date_start'] ?></td>
                                    <td><?= $session['age_rating'] ?></td>
                                    <td><?= $session['price'] ?></td>
                                    <td>
                                        <a class="table-link" href="sessions/edit.php?id=<?= $session['id'] ?>">Редактировать</a>
                                        <a class="table-link delete" href="../core/sessions/delete.php?id=<?= $session['id'] ?>">Удалить</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>