<?php

declare(strict_types=1);

use Zadania\Kwiatki\Kaktus;
use Zadania\Kwiatki\Monstera;
use Zadania\Kwiatki\Storczyk;
use Zadania\Kwiatki\Sukulent;
use Zadania\Kwiatki\UtrzymanieKwiatkow;

require_once __DIR__ . '/vendor/autoload.php';

$utrzymanie = new UtrzymanieKwiatkow();

//echo $utrzymanie->podlej(new Kaktus()) . PHP_EOL;
//echo $utrzymanie->podlej(new Monstera()) . PHP_EOL;
//echo $utrzymanie->podlej(new Storczyk()) . PHP_EOL;
//echo $utrzymanie->podlej(new Sukulent()) . PHP_EOL;

echo $utrzymanie->przesadz(new Kaktus()) . PHP_EOL;
echo $utrzymanie->przesadz(new Monstera()) . PHP_EOL;
echo $utrzymanie->przesadz(new Storczyk()) . PHP_EOL;
echo $utrzymanie->przesadz(new Sukulent()) . PHP_EOL;
