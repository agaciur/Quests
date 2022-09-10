<?php

declare(strict_types=1);

namespace Zadania\Zadania\FizzBuzz;

//Napisz program, który wyświetla liczby od 1 do 100.
// Dla liczb podzielnych przez 3 niech program wyświetli „Fizz”;
//dla liczb podzielnych przez 5 niech wyświetli 'Buzz’;
//a dla liczb podzielnych przez 15 niech wyświetli 'FizzBuzz’.

// Na potrzeby zadania nie zwracaj (return) danych z funkcji lecz wyświetl (echo)

class FizzBuzz
{
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i += 1) {
            echo $i;

            if ($i % 3 === 0) {
                echo ' Fizz';
            }
            if ($i % 5 === 0) {
                echo ' Buzz';
            }

            echo PHP_EOL;
        }
    }
}

$fizz = new FizzBuzz();
$fizz->run();
