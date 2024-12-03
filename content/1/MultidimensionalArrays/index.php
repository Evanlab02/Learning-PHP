<?php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    echo "{$sum}\n";
}
