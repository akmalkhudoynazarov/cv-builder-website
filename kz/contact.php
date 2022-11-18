<!DOCTYPE html>
<html lang="kz">

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
    <a href="index.php" class="back-btn"><i class="fa-solid fa-house"></i> Артқа</a>

    <!-- Main container -->
    <div class="container">
        <h1>Бізбен хабарласыңыз</h1>
        <p>Сіз қатені байқадыңыз ба? Немесе ұсынысыңыз бар ма? Өтінемін, бізге хабарлаңыз.</p>
        <form action="contactget.php" method="post">
            <?php
            if (isset($_GET['fname'])) {
                $fname = $_GET['fname'];
                echo '<input type="text" name="fname" placeholder="Aтыңыз" value="' . $fname . '"><br>';
            } else {
                echo '<input type="text" name="fname" placeholder="Aтыңыз"><br>';
            }

            if (isset($_GET['email'])) {
                $email = $_GET['email'];
                echo '<input type="text" name="email" placeholder="E-mail" value="' . $email . '"><br>';
            } else {
                echo '<input type="text" name="email" placeholder="E-mail"><br>';
            }

            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Жазыңыз...">' . $message . '</textarea><br>';
            } else {
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Жазыңыз..."></textarea><br>';
            }
            ?>

            <div><input type="checkbox" name="checked" value="checked">
                <h5>Мен <a class="checked" href="">Шарттар & Жеке ақпаратен</a> келісемін</h5>
            </div>

            <input type="submit" name="submit" value="Жіберу">
        </form>
        <?php

        if (!isset($_GET['error'])) {
            exit();
        } else {
            $inputCheck = $_GET['error'];
            if ($inputCheck == "empty") {
                echo "<p class='error'>Барлық өрістерді толтырыңыз!</p>";
                exit();
            } elseif ($inputCheck == "invalidemail") {
                echo "<p class='error'>Жарамды электрондық поштаны пайдаланыңыз!</p>";
                exit();
            } elseif ($inputCheck == "notchecked") {
                echo "<p class='error'>Шарттармен келісіңіз!</p>";
                exit();
            } elseif ($inputCheck == "success") {
                echo "<p class='success'>Хабарлама жіберілді!</p>";
                exit();
            }
        }
        ?>
    </div>
</body>

</html>