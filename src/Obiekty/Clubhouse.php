<?php

declare(strict_types=1);

namespace Zadania\Obiekty;

use DateTimeImmutable;

class Clubhouse
{
    private array $teachers = [];
    private array $kids = [];
    private ?DateTimeImmutable $startTime = null;
    private ?DateTimeImmutable $stopTime = null;

    public function setStartTime(DateTimeImmutable $time)
    {
        $this->startTime = $time;
    }

    public function setStopTime(DateTimeImmutable $time)
    {
        $this->stopTime = $time;
    }

    public function addTeacher(Teacher $teacher)
    {
        $this->teachers[] = $teacher;
    }

    public function addKid(Kid $kid)
    {
        $this->kids[] = $kid;
    }

    public function getKids(): array
    {
        return $this->kids;
    }
}
