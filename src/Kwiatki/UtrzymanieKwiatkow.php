<?php

declare(strict_types=1);

namespace Zadania\Kwiatki;

class UtrzymanieKwiatkow
{
    public function podlej(KwiatekInterface $kwiatek): string
    {
        return $kwiatek::class . ' - Podlej ' . $kwiatek->getPodlejCount() . ' razy w tygodniu';
    }

    public function przesadz(KwiatekInterface $kwiatek)
    {
        if ($kwiatek->isNeedWatering()) {
            $watering = 'podlej bardzo obficie';
        } else {
            $watering = 'nie wymaga podlania';
        }

        return implode(PHP_EOL, [
            PHP_EOL,
            'Nazwa kwiatka: ' . $kwiatek::class,
            'przesadź raz do roku',
            'wysyp ziemię z doniczki',
            'otrzep korzenie',
            'wsadź do ziemi dla ' . $kwiatek->getGroundType(),
            $watering,
            'wystaw na słońce',
        ]);
    }
}
