<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "emmanuelirekponor86@gmail.com";
    $header = "Form $email";
    mail($to, $subject, $message, $header);
}
