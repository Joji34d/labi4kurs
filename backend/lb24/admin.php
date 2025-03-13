<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

include 'header.php';
?>

<h2>Админ-панель</h2>
<div class="admin-panel">
    <p>Добро пожаловать в админку!</p>
    <p>Это защищенная страница.</p>
    <p><a href="logout.php">Выйти</a></p>
</div>

<?php
// Работа с cookies
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits', $visits, time() + 3600 * 24 * 30); // Обновляем куку
    echo "<p>Количество ваших посещений: $visits</p>";
}
?>

</div>
</body>
</html>