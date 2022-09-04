<?php

declare(strict_types=1);

namespace Zadania\Obiekty;

class Teacher
{
    private string $firstName;
    private string $lastName;
    private string $specialization;

    public function __construct(string $firstName, string $lastName, string $specialization)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->specialization = $specialization;
    }
}
