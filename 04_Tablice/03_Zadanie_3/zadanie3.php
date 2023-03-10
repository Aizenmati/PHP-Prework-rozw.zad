<?php
/*W pliku zadanie3.php

Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij numbers.
Stwórz zmienną sum i przypisz do niej liczbę 0
Za pomocą pętli for oblicz sumę liczb z tablicy.
Wypisz sumę na stronie wg. wzoru: Suma elementów tablicy to: 381. */
$numbers = array(23, 43, 12, 56, 78, 34, 90, 8, 16, 21); // tworzę tablicę z 10 liczbami
$sum = 0; // Inicjuję zmienną sum

for ($i = 0; $i < count($numbers); $i++) { //za pomocą pętli for obliczam sumę liczb z tablicy
    $sum += $numbers[$i]; // Dodaję aktualny element do sumy
}

echo "Suma elementów tablicy to: " . $sum; // Wypisuję sumę na stronie
?>