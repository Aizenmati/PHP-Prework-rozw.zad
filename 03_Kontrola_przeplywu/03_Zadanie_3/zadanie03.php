<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 3</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie3.php stwórz pętle, która 10 razy wypisze na stronie tekst "Lubię PHP".
Napisz zarówno pętle for jak i pętlę while.
W sumie na stronie napis będzie widoczny 20 razy.  */

//tworzę pętlę for z wypisaniem tekstu 10 razy
for ($i = 1; $i <= 10; $i++) {
echo 'Lubię PHP <br>';
}

//tworzę pętlę while z wypisaniem tekstu 10 razy
$i = 1;
while ($i <= 10){
    echo 'Lubię PHP <br>';
    $i++;
}

?><!--Powyżej wpisz kod PHP-->
</body>
</html>