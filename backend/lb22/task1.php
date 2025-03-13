<?php
function printWeekdaysInMonth($year, $month) {
    echo "<pre>"; // Используем <pre> для удобного вывода
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $date = "$year-$month-$day";
        $weekday = date('l', strtotime($date));
        echo "$date: $weekday\n";
    }
    echo "</pre>";
}

printWeekdaysInMonth(2023, 10); // Пример для октября 2023 года
?>