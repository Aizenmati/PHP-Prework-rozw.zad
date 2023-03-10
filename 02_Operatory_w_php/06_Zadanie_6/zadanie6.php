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
/*W pliku zadanie6.php stwórz trzy zmienne o nazwach nr1, nr2, result.

Dwie niech przechowują dowolne liczby całkowite
Jedna o nazwie $result, niech przechowuje wartość null
Sprawdź czy liczba pierwsza jest większa od drugiej za pomocą odpowiedniego operatora i zapisz wynik w zmiennej $result jako wartość logiczna
Wypisz tą zmienną i jej typ na stronie, użyj var_dump(). */

//tworzę trzy zmienne o nazwach nr1, nr2, result, dwóm pierwszym przypisuję liczby całkowite, trzeciej wartość null
$nr1 = 2;
$nr2 = -5;
$result = null;
//sprawdzam czy liczba pierwsza jest większa od drugiej za pomocą operatora > i wynik zapisuję w zmiennej $result
$result = $nr1 > $nr2;
//wynik i jego typ wyświetlam na stronie za pomocą funkcji var_dump() 
var_dump ($result);//otrzymany wynik to wartość logiczna "true" ponieważ liczba $nr1 jest większa od $nr2
?><!--Powyżej wpisz kod PHP-->
</body>
</html>