<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 5</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie5.php stwórz zmienną $resultFor oraz $resultWhile i przypisz do nich liczbę 0.
Następnie stwórz pętle, która doda do siebie liczby od 1 do 10 i 
zapisze do zmiennej $resultFor lub $resultWhile.
Pętla powinna co uruchomienie (zwaną także iteracją pętli) 
dodawać do zmiennej $resultFor lub $resultWhile kolejną liczbę z podanego zakresu.
Napisz zarówno pętle for jak i pętlę while. */

//tworzę zmienne i przypisuję im liczbę 0
$resultFor = 0;
$resultWhile = 0;
//tworzę pętlę for która doda do siebie liczby od 1 do 10 i zapisze je w zmiennej $resultWhile - wynik sumowania liczb od 1 do 10 to 55.
for ($i = 1; $i <= 10; $i++){
$resultFor += $i;
}
//wyświetlam wynik pętli for
echo "Wynik pętli for: " . $resultFor . "<br>";
//tworzę pętlę while która doda do siebie liczby od 1 do 10 i zapisze je w zmiennej $resultWhile - wynik sumowania liczb od 1 do 10 to wartość 55.
$j = 1;
while ($j <= 10) {
    $resultWhile += $j;
    $j++;
   }
   //wyświetlam wynik pętli while
echo "Wynik pętli while: " . $resultWhile . "<br>";
?><!--Powyżej wpisz kod PHP-->
</body>
</html>