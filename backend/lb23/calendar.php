<?php
echo "<h2>Генерация календаря</h2>";

function generateCalendar($year, $month) {
    echo "<pre>";
    echo "Календарь на " . date("F Y", mktime(0, 0, 0, $month, 1, $year)) . ":\n";
    
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDay = date("N", mktime(0, 0, 0, $month, 1, $year)); // День недели первого дня месяца

    // Заголовок календаря
    echo "Пн Вт Ср Чт Пт Сб Вс\n";

    // Пустые ячейки для первого дня
    for ($i = 1; $i < $firstDay; $i++) {
        echo "   ";
    }

    // Заполнение календаря
    for ($day = 1; $day <= $daysInMonth; $day++) {
        echo str_pad($day, 2, " ", STR_PAD_LEFT) . " ";
        if (($day + $firstDay - 1) % 7 == 0) {
            echo "\n";
        }
    }
    echo "</pre>";
}

generateCalendar(2023, 10); // Пример для октября 2023 года
?>