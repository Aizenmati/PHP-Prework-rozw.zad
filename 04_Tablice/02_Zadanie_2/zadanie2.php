<?php
/*W pliku zadanie2.php stwórz tablicę z listą swoich ulubionych owoców, zmienną z tablicą nazwij fruits.

Następnie:

Wypisz pierwszy owoc na stronie wg. wzoru: Pierwszy owoc to: truskawka.
Wypisz ostatni owoc na stronie wg. wzoru: Ostatni owoc to: malina (skorzystaj z funkcji count).
W pętli wypisz wszystkie owoce każdy w nowej linii <br> (skorzystaj z funkcji count). */
$fruits = array('truskawka', 'banan', 'jabłko', 'gruszka', 'malina'); // Tworzę tablicę z ulubionymi owocami

echo "Pierwszy owoc to: " . $fruits[0] . "<br>"; //wyświetlam pierwszy owoc
echo "Ostatni owoc to: " . $fruits[count($fruits) - 1] . "<br>"; //wyświetlam ostatni owoc z wykorzystaniem funkcji count 

for ($i = 0; $i < count($fruits); $i++) {  //wypisuję wszystkie owoce za pomocą pętli for z użyciem funkcji count, każdy owoc wypisuję w nowej linii
    echo $fruits[$i] . "<br>";
}
?>