<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prework PHP - zadanie 4</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie4.php stwórz dwie zmienne:

$myNumber = 4;
$myString = "4";

Porównaj te zmienne za pomocą operatorów == oraz === wyniki zapisując do zmiennych o nazwach resultFirst, resultSecond.
Wypisz wyniki na stronie.
Wypisz wyniki na stronie, tym razem używając funkcji var_dump().*/
$myNumber = 4;
$myString = "4";
//porównanie za pomocą ==
$resultFirst = $myNumber == $myString;
//porównanie za pomocą ===
$resultSecond = $myNumber === $myString;
//wypisuję wyniki porównań za pomocą funkcji echo
//wynik porównania za pomocą ==
echo "Porównanie za pomocą ==: ";
echo $resultFirst ? "Prawda" : "Fałsz" ;
echo "<br>";
//wynik porównania za pomocą ===
echo "Porównanie za pomocą ===: ";
echo $resultSecond ? "Prawda" : "Fałsz" ;
echo "<br>";
//wypisuję wyniki za pomocą funkcji var_dump()
//wynik var_dump() dla pierwszego porównania:
echo "Wynik var_dump() dla pierwszego porównania: ";
var_dump($resultFirst);
echo "<br>";
//wynik var_dump() dla drugiego porównania:
echo "Wynik var_dump() dla drugiego porównania: ";
var_dump($resultSecond);
echo "<br>";
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>