<?php

/**
 * Задан массив 5 на 7, который заполнен случайными числами от 1 до 1000.
 * Нужно вывести массив, сумму чисел по строкам и сумму чисел по колонкам.
 */

$lines = 5;
$rows = 7;

$array = [];

// fill array with random values and add leading spaces to make table beautiful
for ($i = 0; $i < $lines; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        $array[$i][$j] = str_pad(rand(1, 1000), 4, ' ', STR_PAD_LEFT);
    }
}

// print lines with sum
// strings are considered as integers for array_sum()
foreach ($array as $line) {
    echo implode(' ', $line) . ' | ' . array_sum($line) . PHP_EOL;
}

echo '------------------------------------' . PHP_EOL;

// print row values sum
// strings are considered as integers for array_sum()
for ($j = 0; $j < $rows; $j++) {
    echo str_pad(array_sum(array_column($array, $j)), 5, ' ', STR_PAD_RIGHT);
}

echo PHP_EOL;
