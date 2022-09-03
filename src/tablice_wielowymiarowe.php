<?php

//$tablicaWielowymiarowa = [
//    'agata' => [
//        'rodzeństwo' => [
//            'kasia' => 'k',
//            'karol' => 'm'
//        ],
//        'rodzIle' => 2,
//    ],
//    'kasia' => [
//        'rodzeństwo' => [
//            'agata' => 'k',
//            'karol' => 'm'
//        ],
//        'rodzIle' => 2,
//    ],
//    'kuba' => [
//        'rodzeństwo' => [
//            'ela' => 'k'
//        ],
//        'rodzIle' => 1,
//    ],
//    'ela' => [
//        'rodzeństwo' => [
//            'kuba' => 'm'
//        ],
//        'rodzIle' => 1,
//    ],
//];
//
//echo ' ---------------------' . PHP_EOL;
//echo '| Imię | Ile rodzeństwa | Imiona rodzeństwa |' . PHP_EOL;
//echo ' ---------------------' . PHP_EOL;
//foreach ($tablicaWielowymiarowa as $key => $value) {
//    echo ' | ' . $key . ' | ' . $value['rodzIle'] . ' | ' . implode(',', array_keys($value['rodzeństwo'])) . PHP_EOL;
//    echo ' ---------------------' . PHP_EOL;
//}



/////

$lista = [
    'kasia' => 'k',
    'karol' => 'm'
];

$imiona = array_keys($lista);
$imionaString = implode(',', $imiona);

print_r($imionaString);