<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 12</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie12.php napisz skrypt definiujący trzy liczby w zmiennych: a, b, c.
Skrypt ma wyświetlić podane liczby w kolejności rosnącej.
Przykład:

$a = 2;
$b = 1;
$c = 6;

Skrypt ma wyświetlić komunikat:

Liczby w kolejności rosnącej to: 1, 2, 6*/

//definiuję zmienne 
$a = 2; 
$b = 1; 
$c = 6; 


$tablica = array($a, $b, $c); //tworzę tablicę z wartościami zmiennych

sort($tablica); //sortuję tablicę w kolejności rosnącej

//wyświetlam komunikat z liczbami w kolejności rosnącej:
echo "Liczby w kolejności rosnącej to: " . $tablica[0] . ", " . $tablica[1] . ", " . $tablica[2];
?><!--Powyżej wpisz kod PHP-->
</body>
</html>