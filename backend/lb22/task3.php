<?php
$array = [-2, -1, 3, 4, 5];
$sumPositive = array_sum(array_filter($array, function($value) {
    return $value > 0;
}));

sort($array);

echo "<pre>";
echo "Исходный массив: " . implode(', ', $array) . "\n";
echo "Сумма положительных элементов: $sumPositive\n";
echo "Отсортированный массив: " . implode(', ', $array) . "\n";
echo "</pre>";
?>