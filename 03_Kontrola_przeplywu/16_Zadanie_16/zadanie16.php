<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 16</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie16.php

Dodaj 2 zmienne x i y będące dodatnimi liczbami całkowitymi.
Napisz skrypt sprawdzający czy liczba y jest podzielna przez liczbę x
Skrypt powinien wyświetlać komunikat dla wartości $x = 10; oraz $y = 5; */
//dodaję zmienne
$x = 10;
$y = 5;

//tworzę instrukcję warunkową if else celem sprawdzenia czy liczba $y jest podzielna przez $x   i wyświetlam komunikat
if ($y % $x == 0) {
  echo "Liczba $y jest podzielna przez liczbę $x";
} else {
  echo "Liczba $y nie jest podzielna przez liczbę $x";
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>