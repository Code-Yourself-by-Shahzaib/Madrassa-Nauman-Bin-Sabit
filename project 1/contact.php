<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "qanitshahzad388@gmail.com";
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    mail($to, $subject, $body);
    echo "Message sent successfully!";
}
?>
