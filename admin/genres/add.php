<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NeNetFlix | Добавление жанра</title>
        <link rel="stylesheet" href="../../assets/css/fonts.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
    <body>
        <div class="sys-message error hidden">
            <div class="msg-wrapper">
                <button class="msg-cls" onclick="closeMessage(event)">X</button>
                <p class="msg-text"></p>
            </div>
        </div>

        <header class="header">
            <div class="container">
                <a class="logo" href="../../index.php">NeNetFlix</a>

                <nav>
                    <a class="nav-link" href="#">Сеансы</a>
                    <a class="nav-link active" href="#">Жанры</a>
                    <a class="nav-link" href="#">Заказы</a>
                    <a class="nav-link logout" href="../../core/auth/logout.php">Выход</a>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Добавление жанра</h3>
                </div>

                <form class="form-main" action="../../core/genres/add.php" method="post">
                    <label>Название</label>
                    <input class="form-input" name="name" type="text">

                    <button class="form-btn" type="submit">Опубликовать</button>
                </form>
            </div>
        </section>
    </body>
</html>