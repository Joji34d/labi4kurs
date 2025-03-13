<?php
session_start();
include 'header.php';
?>

<p>Добро пожаловать на главную страницу!</p>

<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <p>Вы авторизованы. <a href="admin.php">Перейти в админку</a> | <a href="logout.php">Выйти</a></p>
<?php else: ?>
    <p><a href="login.php">Войти в админку</a></p>
<?php endif; ?>

</div>
</body>
</html>