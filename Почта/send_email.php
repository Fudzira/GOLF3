<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Отправка письма
    $to = "your-email@example.com"; // Замените на свой адрес электронной почты
    $subject = "Сообщение с веб-страницы";
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    $email_message = "От: $name\n\n$message";
    mail($to, $subject, $email_message, $headers);

    // Выводим сообщение об успешной отправке
    echo "Сообщение успешно отправлено!";
}
?>