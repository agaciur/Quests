<?php

declare(strict_types=1);

// Napisz program, który tworzy tablicę o rozmiarze 10, wypełnia ją losowymi liczbami całkowitymi z przedziału [0, 20],
// a następnie podaje liczbę elementów nieparzystych.
// Przykład: 12, 19, 3, 0, 16, 9, 12, 10, 1, 8; liczba elementów nieparzystych: 4.

$nieparzyste = 0;

$tablica = [];
for ($i = 0; $i <= 9; $i++) {
    $tablica[] = random_int(0, 20);
}
print_r($tablica);
foreach ($tablica as $liczba) {
    if ($liczba % 2 === 1) {
        $nieparzyste = $nieparzyste + 1;
    }
}
echo $nieparzyste;