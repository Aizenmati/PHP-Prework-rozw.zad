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
/*W pliku zadanie6.php napisz kod, który na podstawie wartości zmiennej np. $n = 5;
wypisuje wszystkie liczby od zera do n. Przy każdej liczbie wypisz, czy liczba jest parzysta czy nie.  */

//tworzę zmienną
$n = 5;
//tworzę pętlę for, która iteruje po liczbach od 0 do n, w pętli tworzę instrukcję warunkową if ... else celem sprawdzenia w każdej iteracji czy aktualna liczba jest parzysta czy nie (wynik dzielenia z resztą porównuję z liczbą 0) 
for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        echo $i . ' jest parzyste<br>';
    } else {
        echo $i . ' jest nieparzyste<br>';
    }
}  
//tworzę pętlę while, która iteruje po liczbach od 0 do n, w pętli tworzę instrukcję warunkową if ... else celem sprawdzenia w każdej iteracji czy aktualna liczba jest parzysta czy nie (wynik dzielenia z resztą porównuję z liczbą 0)
$i = 0;
while ($i <= $n) {
    if ($i % 2 == 0) {
        echo $i . ' jest parzyste<br>';
    } else {
        echo $i . ' jest nieparzyste<br>';
    }
    $i++;
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>