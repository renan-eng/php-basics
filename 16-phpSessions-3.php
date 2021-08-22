<?php     
//Start the session
session_start();

//Variaveis inicializadas
$_SESSION["favcolor"] = "verde";
$_SESSION["favanimal"] = "gato";
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
  <h2>Variáveis de sessão inicializadas:</h2>
 
  <?php    
    // PHP Sessions permite rastrear quem esta visitando o seu site
    // Maintaining state
    // PHP Sessions são rastreadas atraves ds arquivos chamdos cookies
    // Sessão são arays associativos com pares Key,Values
   echo "Sua cor favorita é ".$_SESSION["favcolor"].".<br>";
   echo "Seu animal favorito é ".$_SESSION["favanimal"].".";
  ?>

<h2>Ver a sessao com print_r</h2>
<?php 
    print_r($_SESSION);
?>

<h2>Resetar as variáveis de Sessão</h2>
<?php 
    $_SESSION["favcolor"] = "azul";
    $_SESSION["favanimal"] = "boi";
    echo "As novas variáveis de sessão são: ";
    print_r($_SESSION);
?>

<h2>Apagar as variáveis de sessão: </h2>
<?php 
    //Remove todas as variaveis de sessão
    session_unset();
    //Destroi toda a sessão
    session_destroy();
    echo "As novas variáveis de sessão são: ";
    print_r($_SESSION);
?>

<h2>Utilizando as variaveis de sessão dentro um condicional </h2>
<?php 
    $_SESSION["favcar"] = "audi";
    
    unset($_SESSION["favcar"]);

    if(isset($_SESSION['favcar'])){
        echo "Foi inicializada. A variável é: ".$_SESSION['favcar'];
    } else{
        echo "A variavel de sessão nao foi inicializada.";
        $_SESSION["foiDefinada"] = "Não";
    }
?>

<h2>Qual a variavel desta sessão</h2>
<?php 
echo "<br>";
print_r($_SESSION);?>

</body>

</html>