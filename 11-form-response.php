<?php

$name = $_POST["name"]; //$_POST pega o valor do nome escrito no campo "name" do formulário anterior
$senha = $_POST["password"]; //$_POST pega o valor do senhna escrita no campo "password" do formulário anterior
$messagem;

if ($senha != "qwerty") {
  //header("Location: https://www.google.com"); //O header() função envia um cabeçalho HTTP cru para um cliente.
  //echo "<script>window.history.back();</script>"; JS método que envia a página anterior 
  echo "<script>alert('Acesso negado, tente novamente.');</script>";
  $messagem = "Você não sabe a senha!";
} else {
  echo "<script>alert('Acesso permitido!');</script>";
  $messagem = "Você sabe a senha!";
}


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

  <h1>PHP Condicionais e Processamento de Formulários</h1>

  <?php
    
    echo $messagem;
  
  ?>



</body>

</html>