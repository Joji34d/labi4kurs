<?php
echo "<h2>Работа с датой и временем</h2>";

// Текущая дата и время
$now = date("Y-m-d H:i:s");
echo "<pre>Текущая дата и время: $now</pre>";

// Форматирование даты
$formattedDate = date("d.m.Y");
echo "<pre>Форматированная дата: $formattedDate</pre>";

// Разница между двумя датами
$date1 = new DateTime("2023-10-01");
$date2 = new DateTime("2023-10-31");
$interval = $date1->diff($date2);
echo "<pre>Разница между датами: " . $interval->days . " дней</pre>";
?>