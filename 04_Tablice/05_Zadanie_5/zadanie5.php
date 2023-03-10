<?php
/* W pliku zadanie5.php

Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij numbers.
Stwórz zmienną max i przypisz do niej 0.
W pętli for znajdź liczbę, która jest największa, przypisz ją do zmiennej max i wypisz na stronie.
Aby to zrobić przeiteruj tablicę i sprawdź czy aktualny element jest większy o aktualnej wartości max i jeśli tak, zaktualizuj zmienną max.
Sprawdź czy Twój kod będzie działał poprawnie jeśli w tablicy znajdą się tylko liczby ujemne
Spróbuj zmodyfikować kod aby działał on uniwersalnie (podpowiedź: wystarczy zmodyfikować 1 linię kodu)*/

$numbers = array(34, -55, 12, 67, -23, 78, 45, -91, 11, 6);// Tworzę tablicę z 10 dowolnymi liczbami
$max = $numbers[0];// Inicjalizuję zmienną max wartością pierwszego elementu tablicy

//tworzę pętlę for, iteruję tablicę w poszukiwaniu maksymalnej wartości
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}
// Wypisuję wynik na stronie
echo "Największa liczba w tablicy to: " . $max;
?>