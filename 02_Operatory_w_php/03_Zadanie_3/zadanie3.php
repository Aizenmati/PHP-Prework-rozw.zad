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
/*W pliku zadanie3.php stwórz trzy zmienne o nazwach str1, str2, joinedStrings.

Dwie niech przechowują dowolne napisy (stringi)
Jedna o nazwie $joinedStrings, niech przechowuje pusty string np. $joinedStrings = '';
Połącz stringi za pomocą konkatenacji (.) i zapisz wynik w zmiennej $joinedStrings
Wypisz wynik na stronie.*/
$str1 = 'Piękne';
$str2 = 'niebo';
$joinedStrings = '';
//łączę stringi za pomocą konkatenacji i zapisuję wynik w zmiennej $joinedStrings, następnie wyświetlam wynik za pomocą funkcji echo
$joinedStrings = $str1 . ' ' . $str2;
echo $joinedStrings; //Piękne niebo
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>