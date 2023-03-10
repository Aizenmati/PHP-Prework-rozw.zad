<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 6</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->

<?php
/* W pliku zadanie6.php

Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij numbers.
Wypisz ją od tyłu używając pętli for, każdy element w nowej linii <br>.
*/// tworzę tablicę z 10 liczbami
$numbers = array(23, 45, 67, 89, 12, 34, 56, 78, 90, 1);

// tworzę pętlę for iterującą od końca tablicy do początku, wypisuje tablicę od tyłu, każdy el w nowej linii
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . "<br>";
}
?>

<!--Powyżej wpisz kod PHP-->
</body>
</html>