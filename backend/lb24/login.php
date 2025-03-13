<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: admin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    if ($password === 'admin123') {
        $_SESSION['loggedin'] = true;
        setcookie('visits', 1, time() + 3600 * 24 * 30); // Устанавливаем куку
        header("Location: admin.php");
        exit;
    } else {
        echo "<p style='color: red;'>Неверный пароль!</p>";
    }
}

include 'header.php';
?>

<h2>Вход в админку</h2>
<form method="POST">
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Войти</button>
</form>

</div>
</body>
</html>