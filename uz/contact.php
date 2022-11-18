<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
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
    <a href="index.php" class="back-btn"><i class="fa-solid fa-house"></i> Qaytish</a>

    <!-- Main container -->
    <div class="container">
        <h1>Biz Bilan Bog'laning</h1>
        <p>Xatolik ko'rdingizmi? Yoki sizda talab/taklif bormi? Bizga xabar bering.</p>
        <form action="contactget.php" method="post">
            <?php
            if (isset($_GET['fname'])) {
                $fname = $_GET['fname'];
                echo '<input type="text" name="fname" placeholder="Ismingiz" value="' . $fname . '"><br>';
            } else {
                echo '<input type="text" name="fname" placeholder="Ismingiz"><br>';
            }

            if (isset($_GET['email'])) {
                $email = $_GET['email'];
                echo '<input type="text" name="email" placeholder="Email" value="' . $email . '"><br>';
            } else {
                echo '<input type="text" name="email" placeholder="Email"><br>';
            }

            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Yozing...">' . $message . '</textarea><br>';
            } else {
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Yozing..."></textarea><br>';
            }
            ?>

            <div><input type="checkbox" name="checked" value="checked">
                <h5><a class="checked" href="">Shartlar va Shaxsiy ma'lumotlar bilan ishlash qoidalariga</a> roziman</h5>
            </div>

            <input type="submit" name="submit" value="Yuborish">
        </form>
        <?php

        if (!isset($_GET['error'])) {
            exit();
        } else {
            $inputCheck = $_GET['error'];
            if ($inputCheck == "empty") {
                echo "<p class='error'>Iltimos, barcha qatorni to'ldiring!</p>";
                exit();
            } elseif ($inputCheck == "invalidemail") {
                echo "<p class='error'>Iltimos, email formatini to'g'ri kiriting!</p>";
                exit();
            } elseif ($inputCheck == "notchecked") {
                echo "<p class='error'>Iltimos, katakni belgilang!</p>";
                exit();
            } elseif ($inputCheck == "success") {
                echo "<p class='success'>Xabaringiz muvoffaqiyatli yuborildi!</p>";
                exit();
            }
        }
        ?>
    </div>
</body>

</html>