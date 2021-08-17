<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Crash Course - Variáveis</title>
</head>
<body>

<h1>PHP Arrays</h1>

<?php 

  $foodCart = array("bananas", "hamburger", "frango", "manteiga");

  $arraySize = count($foodCart);

  //O for loop abaixo exibe todos os elementos do arry na pagina.

  for ($i=0; $i < $arraySize ; $i++) { 
    echo $foodCart[$i] . "<br>";
  }

  echo "<br>";

  for ($i=0; $i < count($foodCart) ; $i++) { 
    echo $foodCart[$i] . "<br>";
  }

?> 
  
</body>
</html>