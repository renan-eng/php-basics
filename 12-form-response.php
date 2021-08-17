<?php

$name = $_POST["name"]; //$_POST pega o valor do nome escrito no campo "name" do formulário anterior
$carro = $_POST["carro"]; //$_POST pega o valor do senhna escrita no campo "password" do formulário anterior
$mensagem;

switch($carro){
    case "Volvo":
        $mensagem = "Seu carro escolhido foi: Volvo.";
        break;
    case "Chev":
        $mensagem = "Seu carro escolhido foi: Chevy";
        break;
    case "Audi":
        $mensagem = "Seu carro escolhido foi: Audi.";
        break;
    case "Ford":
        $mensagem = "Seu carro escolhido foi: Ford.";
        break;
    case "Toyota":
        $mensagem = "Seu carro escolhido foi: Toyota.";
        break;
    case "BMW":
        $mensagem = "Seu carro escolhido foi: Bmw.";
        break;
    default: $mensagem = "Preguiça de ler todas as opções.";
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
    
    echo $mensagem;
  
  ?>



</body>

</html>