<?php
/* W pliku zadanie9.php wykonaj następujące czynności:

Zdefiniuj zmienną x o wartości 16, oraz zmienną y o wartości 15
Zdefiniuj zmienną x_y, która będzie przechowywać wartość logiczną porównania czy x < y
Zdefiniuj zmienną t o wartości logicznej prawdy, oraz zmienną f o wartości logicznej fałszu.
Zdefiniuj zmienną t_f, która będzie przechowywać wartość logiczną porównania t LUB f
Zdefiniuj zmienną last, która będzie przechowywać wartość logiczną porównania x_y i t_f
Sprawdź czy wynik w zmiennej last jest zgodny z oczekiwanym false.*/

//definiuję zmieną x oraz zmienną y
$x = 16;
$y = 15;
//definiuję zmienną x_y, która przechowuje wartość logiczną porównania czy x < y
$x_y = $x < $y;
//definiuję zmienną t o wartości true oraz zmienną f o wartości false
$t = true;
$f = false;
//definiuję zmienną t_f, która przechowuje wartość logiczną porównania t LUB f
$t_f = $t || $f;
//definiuję zmienną last, która przechowuje wartość logiczną porónania x_y i t_f
$last = $x_y && $t_f;
//sprawdzam wynik
var_dump($last); //wynik false
//tworzę instrukcję warunkową if i else by sprawdzić czy wynik w zmiennej last jest zgodny z oczekiwanym false
if ($last === false) {
  echo "Wynik jest zgodny z oczekiwanym false.";
} else {
  echo "Wynik jest niezgodny z oczekiwanym false.";
}
?>