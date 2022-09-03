<?php
//
//function aktualnyWiek (int $rocznik){
//    return date("Y") - $rocznik;
//}
////    echo "Kuba ma " . aktualnyWiek(1991) . " lat";
////    echo "Agata ma " . aktualnyWiek(1988) . " lat";
//
//    $suma = aktualnyWiek(1991)+aktualnyWiek(1988);
//
//echo 'Agata i Kuba mają ' . $suma . " lat";
//
//function mojeImie (string $imie){
//    return $imie;
//}
//echo "Moje imię to " . mojeImie('Agata');
//
//function oblicz(int $a, int $b){
//    return $a+$b . " " . $a-$b . ' ' . $a*$b;
////    return [
////        'liczba1' => $a,
////        'liczba2' => $b,
////        'dodawanie' => $a+$b,
////        'odejmowanie' => $a-$b,
////        'mnożenie' => $a*$b
////    ];
//}
////echo oblicz(10,4);
//
//print_r(oblicz(10,4));

//function czyParzysta(int $a){
//    return $a % 2 === 0;
//}
//var_dump(czyParzysta(57));
//
//function czyPodzielna (int $a){
////    return $a % 5 === 0 && $a % 3 === 0;
//    return $a % 15 === 0;
//}
//var_dump(czyPodzielna(75));

//function potega (int $a){
//    return pow($a,3);
//}
//echo potega(3);

//function pierwiastek (int $a){
//    return sqrt($a);
//}
//echo pierwiastek(9);

//function czyTrojkat(int $a, int $b, int $c)
//{
//    $biggestNumber = max($a, $b, $c);
//
//    if ($a === $biggestNumber) {
//        return $b + $c > $a;
//    }
//
//    if ($b === $biggestNumber) {
//        return $a + $c > $b;
//    }
//
//    if ($c === $biggestNumber) {
//        return $a + $b > $c;
//    }
//}
//function czyTrojkat(int $a, int $b, int $c)
//{
//    $allNumbers = [$a, $b, $c];
//    $biggestNumber = max($allNumbers);
//    $restNumbers = array_diff($allNumbers, [$biggestNumber]);
//    $sumRestNumbers = array_sum($restNumbers);
//    $isTriangle = $biggestNumber < $sumRestNumbers;
//
//    return $isTriangle;
//}
//
//var_dump(czyTrojkat(4,5,9));

#
# #
#   #
#     #
#       #
#         #
#           #
#             #
################

// ----------------------------------------------------------------------------------------------------------- 30.08.2022

//$src = ['jeden', 'dwa', 'trzy'];
//$dest = [];
//$srcCount = count($src);
//
//for ($i = $srcCount - 1; $i >= 0; --$i) {
//    $dest[] = $src[$i];
//}
//
//print_r($src);
//print_r($dest);

//Array
//(
//    [0] => Agata
//    [1] => Kasia
//    [2] => Karol
//)

//$tbl = [];
//
//$tbl[] = 'Agata';
//$tbl[] = 'Kasia';
//$tbl[] = 'Karol';
//
//print_r($tbl);


// Nazwa funkcji celsius2fahrenheit(int $degree)
// TFahrenheit = 9 / 5 * TCelsjusz + 32;

//function celsius2fahrenheit(float $degree): float
//{
//    return 9 / 5 * $degree + 32;
//}
//
//echo sprintf("10 stopni celciusza to %s stopni farenheita" . PHP_EOL, celsius2fahrenheit(10));
//echo sprintf("50 stopni celciusza to %s stopni farenheita" . PHP_EOL, celsius2fahrenheit(50));
//echo sprintf("0 stopni celciusza to %s stopni farenheita" . PHP_EOL, celsius2fahrenheit(0));
//echo sprintf("-32 stopni celciusza to %s stopni farenheita" . PHP_EOL, celsius2fahrenheit(-32));
//echo sprintf("0.5 stopni celciusza to %s stopni farenheita" . PHP_EOL, celsius2fahrenheit(0.5));
//echo sprintf("10.5 stopni celciusza to %s stopni farenheita" . PHP_EOL, celsius2fahrenheit(10.5));


// ---------------------------------------------------------------------------------------------------------------------


////3. Trzy zmienne zostały zdefiniowane:
//    $a = 97;
//    $b = 3.14;
//    $c = "PHP";
////używając zmiennych $a, $b, $c napisz skrypt wyświetlający następujący tekst:
////    97 to liczba pierwsza
////    Liczba PI to: 3.14
////    PHP to język skryptowy
//
//echo $a . ' to liczba pierwsza' . PHP_EOL;
//echo 'Liczba PI to: ' . $b . PHP_EOL;
//echo $c . ' to język skryptowy' .PHP_EOL;


// ----------------------------------------------------------------------------------------------------------- XX.XX.2022

//4. Wyświetl wynik dodawania, odejmowania, mnożenia, dzielenia, reszty z dzielenia i potęgowania dwóch zmiennych:
//$x = 10; $y = 7;
//
//echo 'wynik dodawania: ' . $x + $y . PHP_EOL;
//echo 'wynik odejmowania: ' . $x - $y . PHP_EOL;
//echo  'wynik mnożenia: ' . $x * $y . PHP_EOL;
//echo 'wynik dzielenia: ' . $x / $y . PHP_EOL;
//echo 'wynik potęgi: ' . pow($x,$y);


//5. Napisz skrypt, który zamienia między sobą wartości dwóch zmiennych:
//    $zmienna1 = 1;
//    $zmienna2 = 2;

//list ($zmienna1,$zmienna2) = array ($zmienna2, $zmienna1);
//echo $zmienna1 . $zmienna2;


//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
//6. Napisz skrypt, który oblicza (i wyświetla) pole powierzchni i obwód prostokąta o bokach $a i $b:
//    $a = 10;
//    $b = 50;

//function oblicz(int $a, int $b) : array
//{
////    return  $a * $b . " " . 2 * $a + 2 * $b;
//    return[$a * $b,2 * $a + 2 * $b ];
//}
//print_r(oblicz(10,50));

////
//function oblicz(int $a, int $b){
//
//    return [
//        'liczba1' => $a,
//        'liczba2' => $b,
//        'pole' => $a*$b,
//        'obwód' => 2 * $a + 2 * $b,
//
//   ];
//}
//print_r (oblicz(10,50));


//function pole(int $a, int $b)
//{
//    return $a * $b;
//}
//
//function obwod(int $a, int $b)
//{
//    return 2 * $a + 2 * $b;
//}

//echo "Pole prostokąta " . pole(10, 50) . PHP_EOL;
//echo 'Obwód prostokąta ' . obwod(10, 50);




////7. Napisz skrypt, który sprawdza, czy zmienna $x jest większa od liczby 100 (użyj instrukcji if):
//    $x = 50;
//    // tu umieść swój kod
//if ($x>100) {
//    echo 'liczba jest większa od 100';
//}
//if ($x<=100){
//    echo "liczba jest mniejsza lub równa 100";
//}


////8. Napisz skrypt, który sprawdza, czy zmienna $x jest liczbą trzycyfrową (użyj instrukcji if):
//    $x = 150;
//if ($x>99 && $x<1000){
//        echo "Liczba jest trzycyfrowa";
//    }
//else {
//    echo "Liczba nie jest trzycyfrowa";
//}


//9. Napisz skrypt, który sprawdza, czy zmienna $x jest mniejsza od 0 lub większa od 1000:
//    $x = 15000;
//if ($x<0 || $x>1000){
//    echo 'liczba jest mniejsza od 0 lub większa od 1000';
//}
//else{
//    echo 'liczba nie jest mniejsza od 0 ani większa od 1000';
//}
//
//
//

//10. Napisz skrypt, który sprawdza, czy zmienna $x jest liczbą parzystą, czy nie:
//    $x = 15;
//if ($x % 2 === 0){
//    echo'parzysta';
//}
//else{
//    echo'nieparzyste';
//}


// 11. Napisz skrypt, który w zależności od wartości zmiennej $wiek umieszcza odpowiedni napis w konsoli:
//• jeżeli $wiek mniejszy od 18, wyświetl: "Jeszcze nie możesz głosować"
//• jeżeli $wiek większy lub równy 18, wyświetl: "Możesz tylko głosować"
//• jeżeli $wiek większy lub równy 21, wyświetl: "Możesz głosować i kandydować do Sejmu"
//• jeżeli $wiek większy lub równy 30, wyświetl: "Możesz głosować i kandydować do Sejmu i Senatu"
//• jeżeli $wiek większy lub równy 35, wyświetl: "Możesz głosować, kandydować do Sejmu i Senatu oraz
//na Prezydenta"

//$wiek = 18;
//if ($wiek>=35 ){
//    echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
//
//}
//else if ($wiek>=30){
//    echo "Możesz głosować i kandydować do Sejmu i Senatu";
//}
//else if ($wiek>=21 ){
//    echo "Możesz głosować i kandydować do Sejmu";
//}
//else if ($wiek>=18 ){
//    echo "Możesz tylko głosować";
//}
//else if ($wiek<18){
//    echo "Jeszcze nie możesz głosować";
//}

//
//$wiek = 30;
//switch($wiek) {
//    case ($wiek >= 35);
//        echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
//        break;
//
//    case ($wiek >= 30);
//        echo "Możesz głosować i kandydować do Sejmu i Senatu";
//        break;
//
//    case($wiek >= 21);
//        echo "Możesz głosować i kandydować do Sejmu";
//        break;
//
//    case($wiek >= 18);
//        echo "Możesz tylko głosować";
//        break;
//
//    case($wiek < 18);
//        echo "Jeszcze nie możesz głosować";
//        break;
//}


// 12. Napisz skrypt, używając instrukcji switch, który umieszcza na stronie odpowiednią liczbę znaków + (plus) w zależności od wartości zmiennej $ile:
//• jeżeli $ile równe 1: wyświetl: +
//• jeżeli $ile równe 2: wyświetl: ++
//• jeżeli $ile równe 3: wyświetl: +++ •...
//• jeżeli $ile równe 9: wyświetl: +++++++++
//• jeżeli $ile mniejsze od 1 lub większe od 9: wyświetl: "Wartość poza zakresem"
//    $ile = 5;
//switch($ile) {
//    case ($ile == 1);
//        echo "+";
//        break;
//
//    case ($ile == 2);
//        echo "++";
//        break;
//
//    case($ile== 3);
//        echo "+++";
//        break;
//
//    case($ile == 9);
//        echo "+++++++++";
//        break;
//
//    case($ile<1 || $ile>9);
//        echo "Wartość poza zakresem";
//        break;
//}


// 13. Napisz skrypt, używając instrukcji switch, który umieszcza na stronie napis z numerem kwartału roku w zależności od zmiennej $miesicc:
//• jeżeli $miesiac równe 1,2, lub 3: wyświetl: "Kwartał I"
//• jeżeli $miesiac równe 4,5, lub 6: wyświetl: "Kwartał II"
//• jeżeli $miesiac równe 7,8, lub 9: wyświetl: "Kwartał III"
//• jeżeli $miesiac równe 10,11, lub 12: wyświetl: "Kwartał IV"
//• jeżeli $miesiac mniejsze od 1 lub większe od 12: wyświetl: "Błędny numer miesiąca"
//    $ile = 11;
//switch($ile){
//    case ($ile==1 || $ile==2 || $ile==3);
//        echo "Kwartał I";
//        break;
//
//    case ($ile==4 || $ile==5 || $ile==6);
//        echo "Kwartał II";
//        break;
//
//    case($ile==7 || $ile==8 || $ile==9);
//        echo "Kwartał III";
//        break;
//
//    case($ile==10 || $ile==11 || $ile==12);
//        echo "Kwartał IV";
//        break;
//
//    case($ile < 1 || $ile>12);
//        echo "Błędny numer miesiąca";
//        break;
//}


// 14. Napisz skrypt, który sprawdza, która z wartości zmiennych $a, $b, $c jest największa:
//
//$a = 5;
//$b = 9;
//$c = 15;
//echo max($a,$b,$c);


//15. Wyświetl kolejno liczby od 5 do 15(każda w nowej linii).Użyj pętli for.

//for ($i = 5; $i <=15; $i +=1){
//    echo $i . PHP_EOL;
//}


//16. Wyświetl kolejno liczby od 10 do 0 z krokiem 0.5 - Użyj pętli for.

//for ($i =10; $i >= 0; $i -= 0.5){
//    echo $i. PHP_EOL;
//}
//

//17. Wyświetl: "PHP1 PHP2 PHP3 PHP4 PHP5 PHP6 PHP7 PHP8 PHP9 PHP10". Użyj pętli while.
//
//$i=1;
//while( $i<=10){
//    echo 'PHP'. $i . ' ';
//    $i ++;
//}

// 19. Napisz skrypt sumujący wszystkie liczby nieparzyste z przedziału od 0 do 20. Użyj pętli for i instrukcji continue.
//
//$wynik = 0;
//for ($i=0; $i<=20; ++$i ) {
//    if ($i%2===0){
//        continue;
//
//    }
//    $wynik += $i;
//}
//echo $wynik;

