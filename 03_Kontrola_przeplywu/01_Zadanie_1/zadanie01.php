<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 1</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
#W pliku zadanie1.php stwórz dwie zmienne, o nazwach nr1, nr2, przechowujące liczby całkowite.
#Następnie za pomocą instrukcji warunkowej if ... else , wypisz na stronie, która z nich jest większa.
#Wypisany string ma być wg. wzoru. Większa liczba to 7.


//tworzę zmienne nr1, nr2, które przechowują liczby całkowite
$nr1 = '50';
$nr2 = '40';

//tworzę instrukcję warunkową if ... else celem wypisania na stronie, która ze zmiennych jest większa
if ($nr1 > $nr2){
echo 'Większa liczba to ' . $nr1;
}
else {
    echo 'Większa liczba to ' . $nr2;
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>