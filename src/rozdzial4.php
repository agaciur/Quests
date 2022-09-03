<?php

$loremIpsum = <<< EOT
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu mauris fringilla, eleifend lectus congue, bibendum felis. Phasellus convallis varius lectus id fringilla. Nam mollis nibh sit amet arcu faucibus, vel scelerisque odio ornare. Quisque congue sollicitudin magna. Donec diam turpis, ullamcorper ut dui eu, varius molestie massa. Suspendisse convallis malesuada dui, quis tempor libero imperdiet in. Sed at pharetra nisl. Donec et suscipit urna. Suspendisse pulvinar diam iaculis, dictum tellus at, molestie elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel vulputate elit. Donec odio nunc, interdum et metus non, volutpat rutrum lorem. Phasellus viverra ac dui id eleifend. Sed quis scelerisque felis, quis semper ex. Pellentesque volutpat augue nibh, quis ullamcorper est dapibus at. Maecenas quis rutrum leo.

     Integer tellus sapien, malesuada vitae pellentesque eget, auctor vitae quam. Curabitur in semper leo. Suspendisse potenti. Aliquam vitae nisl ac lacus blandit congue. Suspendisse eu orci lectus. Sed ac laoreet odio, quis gravida mi. Ut consectetur porttitor venenatis. Cras at massa justo. Nunc sem diam, ornare quis lacus eu, dignissim faucibus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis vitae ipsum massa. Integer non metus vel risus varius laoreet. In hendrerit elit id diam blandit congue. Vivamus scelerisque, purus et lacinia feugiat, ex velit varius velit, vitae suscipit urna diam non arcu. Maecenas hendrerit risus ac tellus tempus ornare. Sed et sodales risus, id hendrerit felis.

    In id leo tellus. Nulla consequat augue sit amet ante convallis, id tristique est imperdiet. Nullam a turpis lacinia erat laoreet laoreet. Maecenas vel hendrerit urna, a vulputate magna. Sed nec turpis sed nulla egestas tincidunt sit amet sed sem. Donec interdum vestibulum metus, et pulvinar arcu pellentesque quis. Integer a risus lacus. Cras lobortis ex vitae justo pellentesque dapibus.

   Phasellus ut fringilla neque. Nam varius lacus aliquet sagittis tristique. Duis elit lectus, tincidunt eu varius at, venenatis et turpis. In gravida velit eu neque sollicitudin convallis. Nam bibendum nibh a arcu maximus porttitor. Fusce dui urna, sodales at elit eu, aliquam aliquet orci. Nullam ante massa, aliquet vel nulla quis, auctor ultrices dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce dapibus non ipsum sed porta. In vulputate neque eu metus tempor posuere.

Ut malesuada massa iaculis dolor molestie interdum vel a arcu. Cras feugiat nisl viverra viverra aliquet. Nullam sed scelerisque massa. Donec a orci velit. Cras nec commodo risus. Nullam eu tellus ac eros tristique egestas. Proin rhoncus, dui sit amet accumsan sollicitudin, arcu quam laoreet mauris, vel dapibus quam sem facilisis purus. Nunc nec iaculis neque, id tempor enim. Praesent molestie lacus sem, vitae cursus dolor tincidunt in. Integer commodo vestibulum ullamcorper.     
EOT;

// -----------

//$loremIpsum = trim($loremIpsum);
//
//$searchArray = [
//    '/\n/',
//    '/ /',
//];
//
//$loremIpsum = preg_replace($searchArray, '_', $loremIpsum);

//print_r($loremIpsum);

// -----------

//echo nl2br($loremIpsum);

// -----------

// Wyświetl wszystko dużymi literami - mb_strtoupper()
//echo mb_strtoupper($loremIpsum);

// -----------

//// Wyświetl wszystko małymi literami - mb_strtolower()
//echo mb_strtolower($loremIpsum);
//
//// -----------
//
//// Wyświetl zdania od dużej litery - ucfirst()
//echo ucfirst($loremIpsum);
//
////// -----------
////
////// Wyświetl słowa od dużej - ucwords()
//echo ucwords($loremIpsum);
////
// -----------

// Wyświetl pesel, płeć oraz datę urodzenia osób z tablicy $pesel
$pesels = [
    '65030576653',
    '49021931256',
    '95010731785',
    '78081573951',
    '85021452379',
    '78041019189',
    '67071374623',
    '89090755515',
    '87110194799',
    '75031496551',
];

function getPlec(string $pesel): string
{
//    $czyKobieta = substr($pesel, 9, 1) % 2 === 0;
//
//    if ($czyKobieta) {
//        return 'kobieta'; // jeśli warunek jest prawdą
//    } else {
//        return 'mężczyzna';// jeśli warunek nie jest prawdą
//    }

    return substr($pesel, 9, 1) % 2 === 0 ? 'kobieta' : 'mężczyzna';
}

function getDataUr(string $pesel): string
{
    $rok = substr($pesel, 0, 2);
    $miesiac = substr($pesel, 2, 2);
    $dzien = substr($pesel, 4, 2);

    return $dzien . '.' . $miesiac . '.19' . $rok;
}

echo 'PESEL - Płeć - Data Urodzenia' . PHP_EOL;

function getIloscZnakow(string $pesel): int
{
    return strlen($pesel);
}

foreach ($pesels as $pesel) {
    $plec = getPlec($pesel);
    $dataUr = getDataUr($pesel);
    $ilosc = getIloscZnakow($pesel);

    printf('%s - %s - %s - PESEL ma: %d znaków' . PHP_EOL, $pesel, $plec, $dataUr, $ilosc);
}