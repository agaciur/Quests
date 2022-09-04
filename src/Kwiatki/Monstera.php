<?php

declare(strict_types=1);

namespace Zadania\Kwiatki;

class Monstera extends AbstractJednePodlejKwiatek
{

    public function getGroundType(): string
    {
        return 'roślin zielonych (ziemia uniwersalna)';
    }
}
