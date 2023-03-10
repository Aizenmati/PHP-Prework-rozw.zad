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
/*W pliku zadanie2.php stwórz trzy zmienne, o nazwach nr1, nr2, nr3 , przechowujące liczby całkowite.
Następnie za pomocą instrukcji warunkowej if ... elseif ... else, wypisz na stronie, która z nich jest największa.
Wypisany string ma być wg. wzoru Największa z liczb 7,2,11 to 11.*/

//tworzę zmienne nr1, nr2, nr3 przechowujące liczby całkowite
$nr1 = '500';
$nr2 = '105';
$nr3 = '158';

//za pomocą instrukcji warunkowej if ... elseif ... else wypisuję, która ze zmiennych jest największa, używam operatorów ">" oraz "&&""
if ($nr1 > $nr2 && $nr1 > $nr3) {
    echo 'Największa z liczb ' . "$nr1, $nr2, $nr3 " . 'to ' . $nr1; 
    }
    elseif ($nr2 > $nr3) {
        echo 'Największa z liczb ' . "$nr1, $nr2, $nr3 " . 'to ' . $nr2;
    }
    else {
        echo 'Największa z liczb ' . "$nr1, $nr2, $nr3 " . 'to ' . $nr3; 
    }

    
    
//w sumie ładniej można napisać używając zmiennej $max, zaś funkcji echo ze stringiem po instrukcji warunkowej: 
/*
$nr1 = 7;
$nr2 = 2;
$nr3 = 11;

if ($nr1 > $nr2 && $nr1 > $nr3) {
  $max = $nr1;
} elseif ($nr2 > $nr3) {
  $max = $nr2;
} else {
  $max = $nr3;
}

echo "Największa z liczb $nr1,$nr2,$nr3 to $max."; 
*/

?><!--Powyżej wpisz kod PHP-->
</body>
</html>