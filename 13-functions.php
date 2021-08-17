<?php 

  
  

  $var = strlen("Aprendendo PHP é importante!");

  //$menssagem = $var;

  $menssagem = date("d/m/y");

  $menssagem2 = scandir("/var/www/html");
  //var_dump($menssagem2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Crash Course - Variáveis</title>
 
</head>

<body>

  <h1>PHP: Functions</h1>
 
  <?php 

    //print_r() é utilizado por devs para verificar valores das variáveis, nesse caso exibimos os arrays retornado pela função scandir()

    echo print_r($menssagem); 
    echo "<br>$menssagem<br>";     
    echo print_r($menssagem2);    
  
  ?>

</body>

</html>