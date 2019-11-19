<?php

/**
 * Вывести массив от 1 до 100 - лесенкой
 * 1
 * 2 3
 * 4 5 6
 * ...
 */

$lineMembersCount = 0;
$previousLineCount = 0;
$counter = 1;
$counterMax = 100;
while ($counter <= $counterMax) {
    // add check for exceeding the maximum
    while (($lineMembersCount < ($previousLineCount + 1)) && ($counter <= $counterMax)) {
        // add trailing spaces to make triangle beautiful
        echo str_pad($counter++, 3, ' ', STR_PAD_RIGHT) . ' ';
        $lineMembersCount++;
    }
    $previousLineCount = $lineMembersCount;
    $lineMembersCount = 0;
    echo PHP_EOL;
}