<?php
?>

<h2>Форма обратной связи</h2>
<form method="POST" action="send_contact_form.php">
    <label for="first_name">Имя:</label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="last_name">Фамилия:</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Сообщение:</label>
    <textarea name="message" id="message" rows="5" required></textarea>

    <button type="submit">Отправить</button>
</form>

</div>
</body>
</html>