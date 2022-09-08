<?php

declare(strict_types=1);

// Utwórz klasę Student z następującymi składowymi
// - pola przechowujące (zmienna wewnątrz klasy):
// 1. imię (string),
// 2. nazwisko (string),
// 3. numer indeksu (int),
// 4. rok studiów (int),
// 5. listę przedmiotów (tablica - array);
// - konstruktor: 5-argumentowy, przyjmujący imię, nazwisko, numer indeksu, rok, przedmioty;
// - metody (funkcja wewnątrz klasy):
// 1. wypisująca komplet danych, np. w postaci:
// (Jan Kowalski, 234567, rok 2, Programowanie obiektowe, Analiza matematyczna, Rachunek prawdopodobieństwa),
// 2. zwracająca imię i nazwisko,
// 3. zwracająca numer indeksu,
// 4. zwracająca rok studiów,
// 5. zwiększająca rok studiów,
// 6. dodająca przedmiot (przyjmująca parametr typu string).

class Student
{
    private string $name; //todo: learn
    private string $surname;
    private int $indexNo;
    private int $year;
    private array $subjects;

    public function __construct(string $name, string $surname, int $indexNo, int $year, array $subjects)
    {
        $this->name = $name; //todo: learn
        $this->surname = $surname;
        $this->indexNo = $indexNo;
        $this->year = $year;
        $this->subjects = $subjects;
    }

    public function getFullName(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getIndexNo(): int
    {
        return $this->indexNo;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function incrementYear(): void
    {
        $this->year++;
    }
    public function getSubjectsAsString(): string
    {

        return implode(', ', $this->subjects); //todo: learn
    }
    public function addSubject(string $subject): void //todo: learn
    {
        $this->subjects[] = $subject; //todo: learn
    }
}

$student = new Student('Andrzej', 'Majewski', 1234, 3, ['filozofia', 'Językoznawstwo']);
echo $student->getFullName();
echo PHP_EOL;
echo $student->getIndexNo();
echo PHP_EOL;
echo $student->getYear();
$student->incrementYear();
echo PHP_EOL;
echo $student->getYear();
echo PHP_EOL;
echo $student->getSubjectsAsString();
echo PHP_EOL;
$student->addSubject('fizyka');
$student->addSubject('matematyka');
echo PHP_EOL;
echo $student->getSubjectsAsString();
