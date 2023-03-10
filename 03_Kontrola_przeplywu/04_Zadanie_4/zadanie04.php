<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 4</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*
W pliku zadanie4.php stwórz pętle, która wypisze na stronie liczby od 1 do 100, jedna w jednej linii (<br>).
Napisz zarówno pętle for jak i pętlę while.
W sumie na stronie będzie wypisane 200 liczb.*/

//tworzę pętlę for z wypisaniem tekstu 100 razy w jednej linii 
for ($i = 1; $i <= 100; $i++) {
echo $i . ' ';
}


//tworzę pętlę while z wypisaniem tekstu 100 razy
$i = 1;
while ($i <= 100){
    echo $i . '<br>';
    $i++;
}


//można też wypisać pętlę for z użyciem konkatetacji, żeby liczby były w jednej linii
/*
$liczby = '';
for ($i = 1; $i <= 100; $i++) {
$liczby .= $i . ' ';
}
echo $liczby;
*/


//w przypadku pętli while żeby liczby były w jednej lini można też zastosować inkrementację zmiennej warunkowej
/*
$liczby = "";
$i = 1;
while ($i <= 100) {
    $liczby .= $i . " ";
    $i++;
}
echo $liczby;
*/
?><!--Powyżej wpisz kod PHP-->
</body>
</html>