<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 13</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/* W pliku zadanie13.php napisz skrypt, który wystawi ocenę z testu.

0 - 39 pkt - ocena niedostateczna
40 - 54 pkt - ocena dopuszczająca
55 - 69 pkt - ocena dostateczna
70 - 84 pkt - ocena dobra
85 - 98 pkt - ocena bardzo dobra
99 - 100 pkt - ocena celująca
Stwórz zmienną points, do której będzie przypisany wynik z testu.
Na początku sprawdź czy ilość punktów jest większa bądź równa 0, 
jeśli nie wypisz na stronie komunikat Ilość punktów mniejsza niż 0.
Na początku sprawdź czy ilość punktów jest mniejsza bądź równa 100, 
jeśli nie wypisz na stronie komunikat Ilość punktów większa niż 100.
Następnie sprawdź jaka ocena odpowiada danej ilości punktów i wypisz ją na stronie
 wg. wzoru Wynik: ocena dobra
Rozwiąż to zadanie używając raz konstrukcji if ... elseif ... else 
a drugi raz używając konstrukcji switch. */

$points = 99;

if ($points < 0) {  // sprawdzenie, czy ilość punktów jest mniejsza niż 0
    echo "Ilość punktów mniejsza niż 0"; // jeśli tak, wypisanie komunikatu
} elseif ($points > 100) { // sprawdzenie, czy ilość punktów jest większa niż 100
    echo "Ilość punktów większa niż 100";  // jeśli tak, wypisanie komunikatu
} elseif ($points >= 0 && $points <= 39) { // sprawdzenie, czy ilość punktów odpowiada ocenie niedostatecznej
    echo "Wynik: ocena niedostateczna"; // jeśli tak, wypisanie komunikatu
} elseif ($points >= 40 && $points <= 54) {  // sprawdzenie, czy ilość punktów odpowiada ocenie dopuszczającej
    echo "Wynik: ocena dopuszczająca";  // jeśli tak, wypisanie komunikatu
} elseif ($points >= 55 && $points <= 69) {  // sprawdzenie, czy ilość punktów odpowiada ocenie dostatecznej
    echo "Wynik: ocena dostateczna";   // jeśli tak, wypisanie komunikatu
} elseif ($points >= 70 && $points <= 84) {  // sprawdzenie, czy ilość punktów odpowiada ocenie dobrej
    echo "Wynik: ocena dobra";  // jeśli tak, wypisanie komunikatu
} elseif ($points >= 85 && $points <= 98) { // sprawdzenie, czy ilość punktów odpowiada ocenie bardzo dobrej
    echo "Wynik: ocena bardzo dobra";  // jeśli tak, wypisanie komunikatu
} else  {    // jak wynik powyżej 98 to celująca
    echo "Wynik: ocena celująca";
}

$points = 80;

switch (true) { //tworzę instrukcję switch o wartości true która będzie porównywana z każdym z kolejnych przypadków case do znalezienia pasującego przypadku - jak wyżej 
    case ($points < 0):
        echo "Ilość punktów mniejsza niż 0";
        break;
    case ($points > 100):
        echo "Ilość punktów większa niż 100";
        break;
    case ($points >= 0 && $points <= 39):
        echo "Wynik: ocena niedostateczna";
        break;
    case ($points >= 40 && $points <= 54):
        echo "Wynik: ocena dopuszczająca";
        break;
    case ($points >= 55 && $points <= 69):
        echo "Wynik: ocena dostateczna";
        break;
    case ($points >= 70 && $points <= 84):
        echo "Wynik: ocena dobra";
        break;
    case ($points >= 85 && $points <= 98):
        echo "Wynik: ocena bardzo dobra";
        break;
    case ($points >= 99 && $points <= 100):
        echo "Wynik: ocena celująca";
        break;
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>