<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 7</title>
</head>
<body>
<!-- tworzę element div, w którym wyświetlę wylosowane liczby -->
<div class="numbersList">

<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie7.php

Stwórz tablicę ze 100 losowymi liczbami z zakresu 0-20, zmienną z tablicą nazwij randNumbers
Użyj do tego pętli for - do otrzymania losowej liczby możesz użyć funkcji mt_rand()
Jak korzystać z tej funkcji możesz znaleźć w [dokumentacji][mt_rand]
Wypisz na stronie wylosowane liczby oddzielone od siebie przecinkiem 18,12,1,3..., 
liczby umieść w elemencie div o klasie numbersList
Oblicz sumę liczb z tablicy do zmiennej sum
Wypisz na stronie, w nowej linii, sumę wg. wzoru: Suma 100 losowych liczb od 0 do 20 to: 876.,
 napis umieść w elemencie div o klasie resul */


// tworzę pustą tablicę o nazwie randNumbers
$randNumbers = [];

// tworzę pętlę for, która wykona się 100 razy
for ($i = 0; $i < 100; $i++) {
  // losuję liczbę z zakresu 0-20 i dodaję ją do tablicy randNumbers
  $randNumbers[] = mt_rand(0, 20);
  // wyświetlam wylosowaną liczbę oddzieloną przecinkiem
  echo $randNumbers[$i] . ",";
}
?>
</div>

<?php
// obliczam sumę liczb z tablicy randNumbers
$sum = array_sum($randNumbers);
?>

<!-- wyświetlam na stronie wynik - sumę liczb z tablicy randNumbers -->
<div class="result">
  <?php echo "Suma 100 losowych liczb od 0 do 20 to: " . $sum . "."; ?>
</div>
</body>
</html>