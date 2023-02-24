<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $to = "muhnnad56@gmail.com";
    $subject = "New message from your website contact form";
    $headers = "From: $name <$email>";
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you-page.html");
        exit();
    } else {
        echo "Error sending message.";
    }
}
?> 

