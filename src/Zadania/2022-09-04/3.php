<?php

declare(strict_types=1);

// Napisz program, który tworzy macierz (tablica wielowymiarowa) wymiaru 3x4,
// wypełnia ją losowymi liczbami całkowitymi z przedziału [10, 50],
// a następnie znajduje element maksymalny.
//Przykład:
//23 11 30 36
//41 19 28 33
//27 48 26 19
//Element maksymalny: 48.

$matrix = [];
$maxNum = 0;

for ($rowNumber = 0; $rowNumber <= 2; $rowNumber++) {
    $matrix[$rowNumber] = [];

    for ($colNumber = 0; $colNumber <= 3; $colNumber++) {
        $number = random_int(10, 50);

        if ($maxNum < $number) {
            $maxNum = $number;
        }

        $matrix[$rowNumber][] = $number;
    }
}

echo PHP_EOL . 'Macierz:' . PHP_EOL;

foreach ($matrix as $row) {
    echo implode(', ', $row) . PHP_EOL;
}

echo PHP_EOL . 'Max number: ' . $maxNum . PHP_EOL;