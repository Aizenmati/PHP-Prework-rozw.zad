<?php
/*Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij numbers.
W pętli for sprawdź, które są parzyste i wypisz je na stronie jedna pod drugą <br>.
Dodaj dodatkową zmienną sumOdd o wartości 0.
Zmodyfikuj pętlę z pkt. 2 w ten sposób aby dodatkowo sumowała liczby nieparzyste.
Wyświetl dodatkowo na stronie komunikat wg. wzoru: Suma liczb nieparzystych to: 87. */

$numbers = array(23, 43, 12, 56, 78, 34, 90, 8, 16, 21); // Tworzę tablicę z 10 liczbami
$sumOdd = 0; // Inicjuję zmienną sumOdd

echo "Parzyste liczby: <br>"; // Wypisuję nagłówek

for ($i = 0; $i < count($numbers); $i++) { //za pomocą pętli for i instrukcji warunkowej if else sprawdzam które liczby są parzyste i je wypisuję na stronie, nieparzyste dodaję do zmiennej sum 
    if ($numbers[$i] % 2 == 0) {
        echo $numbers[$i] . "<br>"; // wypisuję liczby parzyste jedna pod drugą 
    } else {
        $sumOdd += $numbers[$i]; // dodaję liczby nieparzyste do sumy
    }
}

echo "Suma liczb nieparzystych to: " . $sumOdd; // Wypisuję sumę liczb nieparzystych na stronie
?>