<?php
/* W pliku zadanie1.php stwórz dwie zmienne o nazwach first, second.

Przypisz do nich dwie różne wartości logiczne jakie znasz.
Porównaj je za pomocą operatora ==, a wynik porównania zapisz do trzeciej zmiennej isFirstEqualSecond.
Użyj var_dump() aby sprawdzić wynik.
Zmień wartość zmiennej second na przeciwną i ponownie sprawdź wynik.
Ustaw obie zmienne na wartość false i ponownie sprawdź wynik. */
//przypisuję do zmiennych wartości true i false
$first = true;
$second = false;
//porównuję funkcje z pomocą operatora ==, wynik zapisuję w zmiennej $isFirstEqualSecond i używam funkcji var_dump() by sprawdzić wynik
$isFirstEqualSecond = $first == $second;
var_dump($isFirstEqualSecond); // wynik = false
//zmieniam wartość zmiennej second na przeciwną i ponownie sprawdzam wynik
$second = true;
$isFirstEqualSecond = $first == $second;
var_dump($isFirstEqualSecond); // wynik = true
//ustawiam wartość obu zmiennych na false i ponownie sprawdzam wynik
$first = false;
$second = false;
$isFirstEqualSecond = $first == $second;
var_dump($isFirstEqualSecond); // wynik = true
?>