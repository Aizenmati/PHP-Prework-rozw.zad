<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 11</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/* W pliku zadanie11.php napisz skrypt rysujący na podstawie wartości zmiennej n następujący schemat (tutaj dla n = 5):

* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
* * * * *
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5

Elementy w wierszu mają być oddzielone od siebie znakiem spacji.
Wiersze mają być od siebie oddzielone znakiem nowej linii <br>.

Do stworzenia takiego zapisu w środku zagnieżdżonej pętli użyj wyrażenia warunkowego if dzięki któremu zdecydujesz 
czy wypisać gwiazdkę czy licznik z zagnieżdżonej pętli. */

$n = 5; //tworzę zmienną o wartości 5
for ($i = 1; $i <= $n; $i++) { //tworzę pętlę zewnętrzną która iteruje od 1 do $n
  for ($j = 1; $j <= $n; $j++) { //tworzę pętlę wewnętrzną która iteruje od 1 do $n
    if ($j <= $i) { //jeśli wartość $j jest <= $i wyświetla się gwiazdka i spacja
      echo "* ";
    } else { //jeśli nie, wyświetla się wartość $j i spacja
      echo "$j ";
    }
  }
  echo "<br>"; //znacznik <br> by przejść do nowej linii
}
for ($i = 1; $i <= $n; $i++) { //tworzę pętlę drukującą gwiazdki 
  if ($i == 1) { //tworzę warunek, który sprawdza czy to pierwszy wiersz
    for ($k = 1; $k <= $n; $k++) { //tworzę pętlę, któa drukuje gwiazdki w pierwszym wierszu
      echo "* "; //wydruk gwiazdki i spacji
    }
    echo "<br>";  //znacznik <br> by przejść do nowej linii
  }
}
for ($i = $n-1; $i >= 1; $i--) { //tworzę pętlę zewnętrzą, któa oteruje od $n-1 do 1
  for ($j = 1; $j <= $n; $j++) { //tworzę pętlę wewnętrzną, która iteruje od 1 do $n
    if ($j <= $i) { //jeśli wartość $j jest mniejsza lub równa $i wyświetla się gwiazdka i spacja
      echo "* ";
    } else {
      echo "$j "; //jeśli nie, to wyświetla się wartość $j i spacja
    }
  }
  echo "<br>";//znacznik <br> by przejść do nowej linii
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>