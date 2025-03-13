<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Подключаем автозагрузчик Composer
require 'vendor/autoload.php';

// Подключаем общий заголовок
include 'header.php';

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Базовая валидация email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);

        try {
            // Настройки SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Укажите SMTP-сервер
            $mail->SMTPAuth = true;
            $mail->Username = ''; // Ваш Gmail
            $mail->Password = ''; // Пароль от Gmail или пароль приложения ПАРОЛЬ ЛЕХА СЮДА ВВОДИ ПОСМОТРИ ТУТОРИАЛЫ ЛИБО В ЧАТЕ ГПТ ПОСМОТРИ
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Отправитель и получатель
            $mail->setFrom('no-reply@example.com', 'Contact Form');
            $mail->addAddress(''); // Ваш Gmail

            // Содержание письма
            $mail->isHTML(true);
            $mail->Subject = 'Новое сообщение от ' . $first_name . ' ' . $last_name;
            $mail->Body = "
                <h1>Новое сообщение</h1>
                <p><strong>Имя:</strong> $first_name</p>
                <p><strong>Фамилия:</strong> $last_name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Сообщение:</strong> $message</p>
            ";

            $mail->send();
            echo "<p>Спасибо за ваше сообщение! Письмо отправлено.</p>";
        } catch (Exception $e) {
            echo "<p>Ошибка при отправке письма: {$mail->ErrorInfo}</p>";
        }
    } else {
        echo "<p>Некорректный email.</p>";
    }
} else {
    echo "<p>Форма не была отправлена.</p>";
}
?>

</div>
</body>
</html>