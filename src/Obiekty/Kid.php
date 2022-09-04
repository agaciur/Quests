<?php

declare(strict_types=1);

namespace Zadania\Obiekty;

use InvalidArgumentException;

class Kid
{
    private string $firstName;
    private string $lastName;
    private int $birthYear;

    public function __construct(string $firstName, string $lastName, int $birthYear)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setBirthYear($birthYear);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getBirthYear(): int
    {
        return $this->birthYear;
    }

    public function getAge(): int
    {
        return date('Y') - $this->birthYear;
    }

    public function setBirthYear($birthYear): void
    {
        if (date('Y') - $birthYear > 100) {
            throw new InvalidArgumentException('Birth year must be lower than 100.');
        }
        if (date('Y') <= $birthYear){
            throw new InvalidArgumentException('Birth year must be in the past');
        }
        // if (2022 < 3100)

        $this->birthYear = $birthYear;
    }
}
