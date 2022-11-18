<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $checked = $_POST['checked'];


    // Mail send
    $mailto = 'info@resume007.com';
    $subject = 'Xabar';
    $headers = 'From: CV Websahifasi';
    $txt = 'Sizga yangi xabar keldi' . $fname . ".\n\n" . $message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: contact.php?mailsent");


    // Error handling

    if (empty($fname) || empty($email) || empty($message)) {
        header("Location: contact.php?error=empty&fname=$fname&message=$message");
        exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: contact.php?error=invalidemail&fname=$fname&message=$message");
            exit();
        } else {
            if (empty($checked)) {
                header("Location: contact.php?error=notchecked&fname=$fname&message=$message");
                exit();
            } else {
                header("Location: contact.php?error=success");
                exit();
            }
        }
    }
} else {
    header("Location: contact.php");
    exit();
}
