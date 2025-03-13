<?php
echo "<h2>Работа с файлами</h2>";

// Создание и запись в файл
$filename = "example.txt";
$content = "Сдал ладораторную работу!!";
file_put_contents($filename, $content);
echo "<pre>Файл '$filename' создан и записан.</pre>";

// Чтение из файла
$readContent = file_get_contents($filename);
echo "<pre>Содержимое файла: $readContent</pre>";

// Удаление файла (опционально)
// unlink($filename);
// echo "<pre>Файл '$filename' удален.</pre>";
?>