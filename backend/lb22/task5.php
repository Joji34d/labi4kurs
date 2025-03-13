<?php
function calculateFormula($x, $y) {
    if ($x == 0) {
        throw new Exception("Ошибка: деление на ноль.");
    }
    if ($y < 0) {
        throw new Exception("Ошибка: корень из отрицательного числа.");
    }
    return ($x * $x + 18 * $y - sqrt($y)) / (7 * $x * $x);
}

try {
    $result = calculateFormula(2, 4); // Пример значений
    echo "<pre>Результат расчета: $result</pre>";
} catch (Exception $e) {
    echo "<pre>" . $e->getMessage() . "</pre>";
}
?>