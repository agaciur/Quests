<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Zadania\Obiekty\Clubhouse;
use Zadania\Obiekty\Kid;
use Zadania\Obiekty\Teacher;

$clubhouse = new Clubhouse();
$clubhouse->setStartTime(new DateTimeImmutable('0001-01-01 07:00:00'));
$clubhouse->setStopTime(new DateTimeImmutable('0001-01-01 20:00:00'));

$clubhouse->addTeacher(new Teacher("John", "Smith", "Maths"));
$clubhouse->addTeacher(new Teacher("Anna", "Kowalska", "j. polski"));
$clubhouse->addTeacher(new Teacher("Xi", "Dzinping", "Politics"));
$clubhouse->addTeacher(new Teacher("Michael", "Kowalsky", "FooBar"));

$clubhouse->addKid(new Kid("Jane", "Kowalsky", 1999));
$clubhouse->addKid(new Kid("John", "Nowaky", 1991));
$clubhouse->addKid(new Kid("Josh", "Dicky", 2015));


$ageSum = 0;
$kids = $clubhouse->getKids();
/** @var Kid $kid */
foreach ($kids as $kid) {
     $ageSum = $ageSum+ $kid->getAge();
}
echo $ageSum;
echo '<pre>';
print_r($kids);