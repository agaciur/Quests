<?php

declare(strict_types=1);

// Uzupełnij klasę Kalkulator tak, by skrypt po uruchomieniu zadziałał i każda metoda zwróciła komunikat o poprawnym 
class Kalkulator // Nazwa klasy może się świecić w PHPStorm na żółto - nie przejmujemy się tym
{

}

$kalkulator = new Kalkulator();

$suma = $kalkulator->suma(2, 5);
echo 'Metoda sum() zwraca ' . ($suma === 7 ? 'poprawny':'niepoprawny') . ' wynik';

$roznica = $kalkulator->roznica(2, 5);
echo 'Metoda sub() zwraca ' . ($roznica === -3 ? 'poprawny':'niepoprawny') . ' wynik';

$potega = $kalkulator->potega(2, 5);
echo 'Metoda sub() zwraca ' . ($potega === 32 ? 'poprawny':'niepoprawny') . ' wynik';

$pierwiastek = $kalkulator->pierwiastek(16);
echo 'Metoda sub() zwraca ' . ($pierwiastek === 4 ? 'poprawny':'niepoprawny') . ' wynik';

