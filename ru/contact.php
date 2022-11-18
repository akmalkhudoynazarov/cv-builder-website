<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакт</title>
    <link rel="stylesheet" href="../styles/contact.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/d0799216f8.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet" />
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- Back button -->
    <a href="index.php" class="back-btn"><i class="fa-solid fa-house"></i> Назад</a>

    <!-- Main container -->
    <div class="container">
        <h1>Напишите нам</h1>
        <p>Нашли ошибку на сайте? Или у вас есть комментарий/предложение? Пожалуйста, напишите нам.</p>
        <form action="contactget.php" method="post">
            <?php
            if (isset($_GET['fname'])) {
                $fname = $_GET['fname'];
                echo '<input type="text" name="fname" placeholder="Ваше Имя" value="' . $fname . '"><br>';
            } else {
                echo '<input type="text" name="fname" placeholder="Ваше имя"><br>';
            }

            if (isset($_GET['email'])) {
                $email = $_GET['email'];
                echo '<input type="text" name="email" placeholder="Эл. адрес" value="' . $email . '"><br>';
            } else {
                echo '<input type="text" name="email" placeholder="Эл. адрес"><br>';
            }

            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Ваше сообщение...">' . $message . '</textarea><br>';
            } else {
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Ваше сообщение..."></textarea><br>';
            }
            ?>

            <div><input type="checkbox" name="checked" value="checked">
                <h5>Я согласен с <a class="checked" href="">Политикой конфиденциальности и Условиями</a></h5>
            </div>

            <input type="submit" name="submit" value="Отправить">
        </form>
        <?php

        if (!isset($_GET['error'])) {
            exit();
        } else {
            $inputCheck = $_GET['error'];
            if ($inputCheck == "empty") {
                echo "<p class='error'>Пожалуйста, заполните все поля!</p>";
                exit();
            } elseif ($inputCheck == "invalidemail") {
                echo "<p class='error'>Пожалуйста, используйте действующий адрес эл.почты!</p>";
                exit();
            } elseif ($inputCheck == "notchecked") {
                echo "<p class='error'>Пожалуйста, согласитесь с условиями!</p>";
                exit();
            } elseif ($inputCheck == "success") {
                echo "<p class='success'>Ваше сообщение было успешно отправлено!</p>";
                exit();
            }
        }
        ?>
    </div>
</body>

</html>