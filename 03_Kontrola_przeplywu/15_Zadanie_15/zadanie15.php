<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 15</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$x = 3;
$response = "";

// Skrypt napisany z wykorzystaniem pętli while - wynik 3 x Hello World
$i = 0;
while ($i < $x) {
  $response .= "Hello World<br>";
  $i++;
}

// Skrypt napisany z wykorzystaniem pętli for - wynik 3 x Hello World

for ($j = 0; $j < $x; $j++) {
  $response .= "Hello World<br>";
}

echo $response;
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>