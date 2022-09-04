<?php

declare(strict_types=1);

namespace Zadania\Kwiatki;

abstract class AbstractJednePodlejKwiatek implements KwiatekInterface
{
    public function getPodlejCount(): float
    {
        return 1;
    }

    public function isNeedWatering(): bool
    {
        return true;
    }
}
