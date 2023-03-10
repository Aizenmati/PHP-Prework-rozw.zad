<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 2</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie2.php stwórz trzy zmienne o nazwach nr1, nr2, resultModulo.

Dwie niech przechowują dowolne liczby całkowite
Trzecia o nazwie $resultModulo niech przechowuje liczbę 0.
Oblicz resztę z dzielenia (modulo) tych liczb (nr1 modulo nr2) i zapisz wynik w zmiennej $resultModulo
Wypisz zmienną $resultModulo na stronie.
Jeżeli nie do końca rozumiesz działanie operatora modulo, przećwicz to z innymi liczbami.*/
//Operator modulo (oznaczany jako %) zwraca resztę z dzielenia jednej liczby przez drugą.
$nr1 = '10';
$nr2 = '5';
$resultModulo = '0';
$resultModulo = $nr1 % $nr2;
echo $resultModulo; //wynik: 5//
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>