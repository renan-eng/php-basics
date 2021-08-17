<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Crash Course - Variáveis</title>
</head>
<body>

  <h1>Cap. 2 - Variáveis em PHP!</h1>

<?php

  /*

  Variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável são case-sensitive.

  Nomes de variável seguem as mesmas regras como outros rótulos no PHP. Um nome de variável válido inicia-se com uma letra ou sublinhado, seguido de qualquer número de letras, números ou sublinhados. (A-z, 0-9 and _)' 

      Nota: $this é uma variável especial que não pode ser atribuída. 

  */

  $numeroUm = "Renan";
  $novaVariavel = 5;
  $floatVar = 10.4;
  $webSite = "StudioWeb.com";
  echo "$numeroUm<br>";
  echo "$novaVariavel<br>";
  echo "$floatVar<br>";
  echo "Eu gosto do site: " . $webSite . "!<br>";

  $x = 4;
  $y = 6;
  echo $x + $y . "<br>";
  echo $x . $y . "<br>";

  //Bolean data type! not case-sensitive:
  $ehVerdadeiro = true;
  $ehFalso = false;

  //Condicionais em PHP:

  if($ehFalso){

    echo "É verdade!"; //condição se if for verdadeiro

  } else {

    echo "É falso!"; //condição se if for falso

  }

?>
  
</body>
</html>