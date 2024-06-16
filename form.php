<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ошибка, сообщение не отправлено. Пожалуйста, проверьте все поля.";
        exit;
    }

    $to = "Xomyak_Pol9@mail.ru";
    $email_subject = "Новое сообщение обратной связи: " . $subject;
    $email_body = "Вы получили новое сообщение от $name.\n\n".
                  "Email: $email\n\n".
                  "Сообщение:\n$message";
    $headers = "From: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Сообщение отправлено! Пожалуйста, ожидайте ответа.";
    } else {
        echo "Ошибка, сообщение не отправлено. Пожалуйста, проверьте все поля.";
    }
} else {
    echo "Неверный метод отправки данных.";
}
?>
