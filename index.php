<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main-page.css">
    <link rel="icon" href="./assets/icon.svg">

    <title>Проект</title>
</head>

<body>
    <?php
    include './php/conQuery.php';
    include './php/queryDB.php';

    session_start(); ?>
    <div class="header">
        <div class="container">
            <div class="nav__links">
                <img src="./assets/logo_lab.png" style="width: 50px;">
                <div class="links">
                    <a href="">Главная</a>
                    <a href="#info">Информация</a>
                    <a href="#about">О себе</a>
                    <a href="#contacts">Контакты</a>
                    <a href="#message">Сообщения</a>
                    <a href="./auth.php">
                        <?php
                        include './php/checkSession.php';
                        ?>
                    </a>
                </div>
            </div>
            <dic class="content__header">
                <div class="welcome__header">
                    <img src="./assets/logo_lab.png">
                    <?php
                    echo '
                    <h2>Приветствую, ' . $_SESSION['name_user'] . ' ' . $_SESSION['surname'] . '</h2>

                    '
                    ?>

                    <h2> Это Сайт-визитка</h2>

                </div>
                <div class="request__form">
                    <h2>Хотите отправить сообщение?</h2>
                    <form action="./php/formHandler.php" method="post">
                        <input type="text" name="name" placeholder="Имя" />
                        <textarea name="text" placeholder="Текст сообщения"></textarea>
                        <button name="done" class="send__btn" type="submit">Отправить</button>
                    </form>
                </div>
            </dic>

        </div>
    </div>
    <div class="info" id="info">
        <div class="container">
            <h2 class="header__section">Информация</h2>
            <hr />
            <div class="content__info">
                <div class="avatar__ring"></div>
                <?php
                echo '<h2>' . $info['text'] . '</h2>'; // выводим данные 
                ?>
            </div>
        </div>
    </div>
    <div class="about" id="about">
        <div class="container">
            <h2 class="header__section">О себе</h2>
            <hr />
            <div class="about__contant">
                <div class="block__content">
                    <?php
                    echo "<h4>" . $about_arr[0] . "</h4>";
                    ?>
                    <hr class="content__separator">
                    <p>Frontend разработчик</p>
                    <p>React-dev</p>
                    <p>Web-разработчик</p>
                    <p>Программист</p>
                    <p>Верстальщик</p>
                    <p>Системный администратор</p>
                </div>
                <div class="block__content">
                    <?php
                    echo "<h4>" . $about_arr[1] . "</h4>";
                    ?>
                    <hr class="content__separator">
                    <p>Стажировка в Globerce Capital</p>
                    <p>АУЭС им.Г.Даукеева</p>
                    <p>ВТ(ПИ)-20-3</p>
                    <p>Школа №187 им. Г.Титова</p>
                    <p>Школа №32 им. Н.А. Щорса</p>
                </div>
                <div class="block__content">
                    <?php
                    echo "<h4>" . $about_arr[2] . "</h4>";
                    ?>
                    <hr class="content__separator">
                    <p>Горные походы</p>
                    <p>Катание на сноуборде</p>
                    <p>Велоспорт</p>
                    <p>Активный отдых</p>
                    <p>Катание на коньках</p>
                    <p>Unix-подобные системы</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts" id="contacts">
        <div class="container">
            <h2 class="header__section">Контакты</h2>
            <hr />
            <div class="contacts__block">
                <div>
                    <h2>Почта</h2>
                    <p>pmisha1014@gmail.com</p>
                </div>
                <div>
                    <h2>Время работы</h2>
                    <p>С 9:00 до 17:00</p>
                </div>
                <div>
                    <h2>Рабочий телефон</h2>
                    <p>+7(747)-293-37-67</p>
                </div>
                <div>
                    <h2>Социальные сети</h2>
                    <p>https://vk.com/sudo_s</p>
                </div>
            </div>
        </div>
    </div>
    <div class="message" id="message">
        <div class="container">
            <h2 class="header__section">Сообщения</h2>
            <hr>
            <div class="msg__section">
                <?php
                if (!count($msg_array)) {
                    echo '<h4>Сообщений пока нет </h4>';
                } else {
                    foreach ($msg_array as $msg) {
                        echo
                        '<div class="msg__block">
                                <h4>' . $msg[1] . '</h4>
                                <p>' . $msg[2] . '</p>
                                <form method="post" action="./php/forms/messages/delete.php">
                                    <input name="msg_id" type="hidden" value="' . $msg[0] . '"/>
                                    <button type="submit">&times;</button>
                                </form> 
                            </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <span>Серверное веб-программирование Попков Михаил &copy; 2023</span>
        </div>
    </div>
</body>

</html>