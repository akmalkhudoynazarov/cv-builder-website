<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
    <!-- Style -->
    <link rel="stylesheet" href="styles/contact.css">

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
    <a href="index.php" class="back-btn"><i class="fa-solid fa-house"></i> Back</a>

    <!-- Main container -->
    <div class="container">
        <h1>Contact Us</h1>
        <p>Did you notice error? Or do you have any suggestion? Please, let us know.</p>
        <form action="contactget.php" method="post">
            <?php
            if (isset($_GET['fname'])) {
                $fname = $_GET['fname'];
                echo '<input type="text" name="fname" placeholder="Your name" value="' . $fname . '"><br>';
            } else {
                echo '<input type="text" name="fname" placeholder="Your name"><br>';
            }

            if (isset($_GET['email'])) {
                $email = $_GET['email'];
                echo '<input type="text" name="email" placeholder="Email" value="' . $email . '"><br>';
            } else {
                echo '<input type="text" name="email" placeholder="Email"><br>';
            }

            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Your message">' . $message . '</textarea><br>';
            } else {
                echo '<textarea name="message" cols="30" rows="5" maxlength="500" placeholder="Your message"></textarea><br>';
            }
            ?>

            <div><input type="checkbox" name="checked" value="checked">
                <h4>I agree with <a class="checked" href="">Privacy Policy</a> and <a class="checked" href="">Terms & Conditions</a></h4>
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
        <?php

        if (!isset($_GET['error'])) {
            exit();
        } else {
            $inputCheck = $_GET['error'];
            if ($inputCheck == "empty") {
                echo "<p class='error'>You did not fill all the fields!</p>";
                exit();
            } elseif ($inputCheck == "invalidemail") {
                echo "<p class='error'>Please, enter a valid email!</p>";
                exit();
            } elseif ($inputCheck == "notchecked") {
                echo "<p class='error'>Please, check the checkbox!</p>";
                exit();
            } elseif ($inputCheck == "success") {
                echo "<p class='success'>Your message was successfully sent!</p>";
                exit();
            }
        }
        ?>
    </div>
</body>

</html>