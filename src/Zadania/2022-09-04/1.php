<?php

declare(strict_types=1);

// Napisz program sprawdzający, czy dana liczba naturalna n jest pierwsza.

function czyPierwsza(int $n)
{
    for ($i = $n - 1; $i >= 2; --$i) {
        if ($n % $i === 0) {
            return 'nie pierwsza';
        }
    }

    return 'pierwsza';
}

echo czyPierwsza(18);


