<?php

declare(strict_types=1);

namespace Zadania\Kwiatki;

class Sukulent extends AbstractJednePodlejKwiatek
{

    public function getGroundType(): string
    {
        return 'sukulentów';
    }
}
