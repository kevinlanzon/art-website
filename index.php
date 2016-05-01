<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: janiegrout.co.uk';
    $to = 'kevinlanzon@gmail.com';
    $subject = 'Message through website';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if ($name == '' || $email == '') {
            echo "<p>Oops! You didn't enter your name and email address. Please go back and try again!</p>";
        } else if (mail ($to, $subject, $body, $from)) {
            header('Location: thank-you.html');
        }
    }
?>
