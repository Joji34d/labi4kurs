<?php
echo "<h2>Работа с каталогами</h2>";

// Создание каталога
$dirname = "my_directory";
if (!file_exists($dirname)) {
    mkdir($dirname);
    echo "<pre>Каталог '$dirname' создан.</pre>";
}

// Создание файлов в каталоге
file_put_contents("$dirname/file1.txt", "Файл 1");
file_put_contents("$dirname/file2.txt", "Файл 2");

// Перечисление файлов в каталоге
$files = scandir($dirname);
echo "<pre>Файлы в каталоге '$dirname':\n";
print_r($files);
echo "</pre>";

// Удаление каталога (опционально)
// array_map('unlink', glob("$dirname/*")); // Удаление всех файлов в каталоге
// rmdir($dirname); // Удаление каталога
// echo "<pre>Каталог '$dirname' удален.</pre>";
?>