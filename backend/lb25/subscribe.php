<?php
include 'header.php'; // Подключаем общий заголовок
?>

<h2>Подписка на рассылку</h2>
<form method="POST" action="send_email.php">
    <label for="email">Введите ваш email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Подписаться</button>
</form>

</div>
</body>
</html>