<?php
define("NUM_E", 2.71828);
echo "Число e равно " . NUM_E . "<br>";

$num_e1 = NUM_E;
echo "Тип переменной \$num_e1: " . gettype($num_e1) . "<br>";

$num_e1 = (string)$num_e1;
echo "Тип переменной \$num_e1 после приведения к строке: " . gettype($num_e1) . ", значение: $num_e1<br>";

$num_e1 = (int)$num_e1;
echo "Тип переменной \$num_e1 после приведения к целому: " . gettype($num_e1) . ", значение: $num_e1<br>";

$num_e1 = (bool)$num_e1;
echo "Тип переменной \$num_e1 после приведения к булевому: " . gettype($num_e1) . ", значение: " . ($num_e1 ? 'true' : 'false') . "<br>";
?>