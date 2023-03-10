<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 14</title>
    <style>
table {
  border-collapse: collapse;
  margin: 20px 0;
  background-color: grey;
}

td {
  border: 1px solid black;
  padding: 10px;
  color: yellow;
}
</style>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
/*napisz skrypt tworzący tabliczkę mnożenia dla
 podanej zmiennej n. Na przykład dla $n = 3 wynik będzie następujący:

1 x 1 = 1	1 x 2 = 2	1 x 3 = 3
2 x 1 = 2	2 x 2 = 4	2 x 3 = 6
3 x 1 = 3	3 x 2 = 6	3 x 3 = 9
Do mnożenia liczb użyj operatora *.
Do formatowania tabelki użyj html i css. Pamiętaj 
aby dodać spację pomiędzy liczbami i x oraz =.   */
  $n = 3;

  // Generuję tabliczkę mnożenia z użyciem pętli for
  $table = "<table>";
  for ($i = 1; $i <= $n; $i++) {
      $table .= "<tr>";
      for ($j = 1; $j <= $n; $j++) {
          $table .= "<td>{$i} x {$j} = " . ($i * $j) . "</td>";
      }
      $table .= "</tr>";
  }
  $table .= "</table>";

  // Wyświetlam tabliczkę mnożenia
  echo $table;
  ?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>