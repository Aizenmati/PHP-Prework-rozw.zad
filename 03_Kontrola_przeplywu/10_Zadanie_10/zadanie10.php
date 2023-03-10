<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 10</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/* W pliku zadanie10.php napisz skrypt rysujący na podstawie wartości zmiennej n następujący schemat (tutaj dla $n = 5).
Użyj do tego pętli zagnieżdżonych.

*
* *
* * *
* * * *
* * * * *

Możesz to zadanie rozwiązać na dwa sposoby:

używając pętli zależnych.
używając pętli niezależnych i instrukcji warunkowej if.
Elementy w wierszu mają być oddzielone od siebie znakiem spacji.
Wiersze mają być od siebie oddzielone znakiem nowej linii <br>.

Wzoruj się na poprzednich zadaniach. Trzeba tutaj trochę pomyśleć i rozumieć pętle zagnieżdżone. */

//skrypt rysujący za pomocą pętli niezależnych i instrukcji warunkowej if
$n = 5;
for ($i = 1; $i <= $n; $i++) { //tworzę pętlę for która wykonuje się $n razy 
  for ($j = 1; $j <= $n; $j++) { //tworzę wewnętrzną pętlę for, która wykonuje się $n razy wypisując gwiazdki 
    if ($j <= $i) { //gdy wartość zmiennej $j jest mniejsza lub równa wartości zmiennej $i - wypisuje gwiazdki
      echo "* ";
    } 
  }
  echo "<br>"; //po każdej iteracji wewnętrznej pętli wypisuje znak nowej lini
}


//skrypt rysujący za pomocą pętli zależnych
for($i = 1; $i <= $n; $i++){ //uruchamiam pierwszą pętlę for która wykonuje się $n razy
    for($j = 1; $j <= $i; $j++){ //uruchamiam pętlę wewnętrzna która wykonuje się $i razy wypisując gwiazdki
        echo "* ";
    }
    echo "<br>"; //po każdej iteracji wewnętrznej pętli wypisuje znak nowej lini by przejść do następnego wiersza 
}
?><!--Powyżej wpisz kod PHP-->
</body>
</html>