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
<!--Poniżej wpisz kod PHP-->
<?php
/*W pliku zadanie7.php stwórz dwie zagnieżdżone pętle niezależne i wypisz wartości 
ich liczników (liczniki powinny nazywać sie $i oraz $j) w każdej iteracji.
Każda z pętli ma iterować od 0 do 10 włącznie
Sposób w jaki dane powinny zostać wypisane to: echo "i = $i, j = $j";
Zadanie rozwiąż używając dwóch pętli for */

//tworzę dwie zagnieżdżone pętle niezależne for które iterują od 0 do 10 włącznie - 
//celem wyświetlenia na stronie wyniku iteracji dwóćh pętli

for ($i = 0; $i <= 10; $i++){
    for ($j = 0; $j <=10; $j++){
       echo "i = $i, j = $j <br>";    
      }
    }
   ?>

<!--Powyżej wpisz kod PHP-->
</body>
</html>