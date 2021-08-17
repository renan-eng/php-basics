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

  /*

    1. Indexed array - array numerado.
    2. Array associativo - usa par de nome/valores. Named Keys
    3. Array multidimensional - arrays com arrays dentro

  */

  //2. Array associativo = array('Key' => 'Pair')

  $assocArray = array("Renan" => "31", "Nick" => "24", "Maria" => "22");

  echo "Idade de Renan: " . $assocArray['Renan'] . " anos. <br>";
  echo "Tamanho do array: " . count($assocArray) . "<br>";
  var_dump($assocArray) //exibe a variável na pagina da forma como ela criada


  ?>

</body>

</html>