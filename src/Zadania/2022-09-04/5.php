<?php

declare(strict_types=1);

// Uzupełnij klasę Kalkulator tak, by skrypt po uruchomieniu zadziałał i każda metoda zwróciła komunikat o poprawnym 

// Nazwa klasy może się świecić w PHPStorm na żółto - nie przejmujemy się tym

class Kalkulator
{
    private int $suma;
    private int $roznica;
    private int $potega;
    private int $pierwiastek;

    public function suma (int $i, int $j): int
    {
        return $i + $j;
    }
    public function roznica (int $i, int $j): int
    {
        return $i - $j;
    }
    public function potega (int $i, int $j): int
    {
        return $i ** $j;
    }
    public function pierwiastek (float $k): float
    {
        return sqrt($k);

    }
}

$kalkulator = new Kalkulator();

$suma = $kalkulator->suma(2, 5);
echo 'Metoda sum() zwraca ' . ($suma === 7 ? 'poprawny':'niepoprawny') . ' wynik'.PHP_EOL;

$roznica = $kalkulator->roznica(2, 5);
echo 'Metoda sub() zwraca ' . ($roznica === -3 ? 'poprawny':'niepoprawny') . ' wynik'.PHP_EOL;

$potega = $kalkulator->potega(2, 5);
echo 'Metoda sub() zwraca ' . ($potega === 32 ? 'poprawny':'niepoprawny') . ' wynik'.PHP_EOL;

$pierwiastek = $kalkulator->pierwiastek(16.0);
echo 'Metoda sub() zwraca ' . ($pierwiastek === 4.0 ? 'poprawny':'niepoprawny') . ' wynik'.PHP_EOL;

