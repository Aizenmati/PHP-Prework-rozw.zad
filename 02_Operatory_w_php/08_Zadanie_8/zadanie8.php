<?php
/*Wniosek porównania obu tabel ze strony https://www.php.net/manual/en/types.comparisons.php : 
Operator luźnej równości == porównuje tylko wartości zmiennych, bez względu na typ danych, podczas gdy operator ścisłej równości === porównuje wartości oraz typ danych. */
//poniżej przykład:
$a = 10;
$b = "10";
$wynik = $a == $b;
var_dump($wynik) . "<br>"; //wynik: true
$wynik = $a === $b;
var_dump($wynik) . "<br>";//wynik: false
?>