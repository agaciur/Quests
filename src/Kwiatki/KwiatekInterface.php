<?php

declare(strict_types=1);

namespace Zadania\Kwiatki;

interface KwiatekInterface
{
    public function getPodlejCount(): float;
    public function getGroundType(): string;
    public function isNeedWatering(): bool;
}
