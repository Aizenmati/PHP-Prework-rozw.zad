<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 9</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*napisz skrypt rysujący na podstawie wartości zmiennej n następujący schemat:

dla $n = 5
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *

dla $n = 3

* 2 3
* * 3
* * *

Elementy w wierszu mają być oddzielone od siebie znakiem spacji.
Wiersze mają być od siebie oddzielone znakiem nowej linii <br>.

Do stworzenia takiego zapisu w środku zagnieżdżonej pętli użyj 
wyrażenia warunkowego if dzięki któremu zdecydujesz czy wypisać gwiazdkę czy licznik z zagnieżdżonej pętli. */

$n = 5; //tworzę zmienną o wartości 5
echo "Skrypt rysujący na podstawie wartości zmiennej n = 5: <br>";
for ($i = 1; $i <= $n; $i++) { //tworzę pętlę for która wykonuje się $n razy 
  for ($j = 1; $j <= $n; $j++) { //tworzę wewnętrzną pętlę for, która wykonuje się $n razy wypisująć gwiazdki lub liczby 
    if ($j <= $i) { //gdy wartość zmiennej $j jest mniejsza lub równa wartości zmiennej $i - wypisuje gwiazdkę, w przeciwnym wypadku wypisuje wartość zmiennej $j
      echo "* ";
    } else {
      echo $j." ";
    }
  }
  echo "<br>"; //po każdej iteracji wewnętrznej pętli wypisuje znak nowej lini
}

$n = 3; //tworzę zmienną o wartości 3
echo "Skrypt rysujący na podstawie wartości zmiennej n = 3: <br>";
for ($i = 1; $i <= $n; $i++) { //tworzę pętlę for która wykonuje się $n razy 
  for ($j = 1; $j <= $n; $j++) { //tworzę wewnętrzną pętlę for, która wykonuje się $n razy wypisująć gwiazdki lub liczby 
    if ($j <= $i) { //gdy wartość zmiennej $j jest mniejsza lub równa wartości zmiennej $i - wypisuje gwiazdkę, w przeciwnym wypadku wypisuje wartość zmiennej $j
      echo "* ";
    } else {
      echo $j." ";
    }
  }
  echo "<br>"; //po każdej iteracji wewnętrznej pętli wypisuje znak nowej lini
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>