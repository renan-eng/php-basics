
<?php     
//Start the session
session_start();
      
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

  <h1>PHP: Sessions </h1>
 
  <?php    
    // PHP Sessions permite rastrear quem esta visitando o seu site
    // Maintaining state
    // PHP Sessions são rastreadas atraves dos arquivos chamdos cookies
    // Sessão são arays associativos com pares Key,Values
    $_SESSION["favcolor"] = "verde";
    $_SESSION["favanimal"] = "gato";
    echo "Variáveis de sessão inicializadas.";
    
  ?>
  <br>
  <a href="http://localhost/16-phpSessions-2.php">Ver Sessão</a>

</body>

</html>