<?php
/*W pliku zadanie7.php stwórz trzy zmienne o nazwach nr1, nr2, result.

Do zmiennych nr1 i nr2 przypisz liczby odpowiednio 7 i 4.
Do zmiennej result przypisz ich sumę i wypisz ją na stronie.
Zmiennej nr1 zmień wartość na 10 ale nie usuwając poprzedniego kodu, pisz w linijkach niżej.
Oblicz ponownie sumę do zmiennej resulti wypisz na stronie.*/

//tworzę zmienne o nazwach nr1, nr2, result, dwóm pierwszym przypisuję kolejno liczby 7 i 4
$nr1 = 7;
$nr2 = 4;
//w trzeciej zmiennej przypisuję sumę zmiennych $nr1 i $nr2 za pomocą operatora +
$result = $nr1 + $nr2;
//wypisuję wynik
echo $result . "<br>";
//zmieniam wartość zmiennej $nr1 i ponownie dokonuję obliczeń sumy zmiennych, wyświetlam nowy wynik
$nr1 = 10;
$result = $nr1 + $nr2;
echo $result . "<br>";
?>