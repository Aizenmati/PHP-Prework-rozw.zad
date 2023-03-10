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
/*W pliku zadanie5.php stwórz zmienną o nazwie counter, wstaw do niej liczbę 145.

Wypisz jej wartość na stronie (w nowej linii <br>).
Za pomocą inkrementacji zwiększ wartość zmiennej counter
Wypisz jej wartość na stronie (w nowej linii <br>).
Za pomocą dekrementacji zmniejsz wartość zmiennej counter
Wypisz jej wartość na stronie (w nowej linii <br>).*/

//tworzę zmienną counter o wartości 145
$counter = 145;
//wypisuję wartość zmiennej na stronie w nowej lini <br>
echo $counter . "<br>";
//zwiększam wartość zmiennej za pomocą inkrementacji (++)
$counter++;
//ponownie wypisuję wartość zmiennej na stronie w nowej lini <br>
echo $counter . "<br>";
//zmniejszam wartość zmiennej za pomocą dekrementacji (--)
$counter--;
//ponownie wypisuję wartość zmiennej na stronie w nowej lini <br>
echo $counter . "<br>";
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>