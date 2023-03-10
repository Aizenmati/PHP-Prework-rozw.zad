<?php
/*Zadanie 1
W pliku zadanie1.php

Stwórz tablicę z trzema elementami np. z liczbami, zmienną z tablicą nazwij onlyThree
Następnie wypisz na stronie po kolei elementy tej tablicy rozdzielając je spacją.  */
$onlyThree = array(1, 2, 3); // Tworzę tablicę z trzema liczbami
foreach ($onlyThree as $element) { //Wypisuję elementy tablicy na stronie za pomocą pętli foreach, oddzielając je spacją
    echo $element . ' ';
}
?>