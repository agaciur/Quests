<?php

declare(strict_types=1);

namespace Zadania\Kwiatki;

class Kaktus implements KwiatekInterface
{
    public function getPodlejCount(): float
    {
        return 0.5;
    }

    public function getGroundType(): string
    {
        return 'kaktusów';
    }

    public function isNeedWatering(): bool
    {
        return false;
    }
}
