<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Crash Course - Variáveis</title>
</head>

<body>

  <h1>PHP: Como processar Formulários</h1>

  <form action="10-form-response.php"></form>

  <?php

  /*
      Tem varias várias váriaveis préefinidas em PHP que são chamadas de "superglobais", o que siginifica que elas são sempre acessíveis, independete do escopo - e vc pode
      acessa-las em qualquer função, classe ou arquivo sem nenhuma ação adicional.
			
      Nota: classes são basicamente objetos, que são pacotes de código que contém funções, variáveis e mais.

				Variáveis PHPsuperglobais:

		    $GLOBALS
		    $_SERVER
		    $_REQUEST
		    $_POST
		    $_GET
		    $_FILES
		    $_ENV
		    $_COOKIE
		    $_SESSION

		    Para processari formulários, usamos $_POST and $_GET

		reference: http://www.w3schools.com/php/php_superglobals.asp

		*/

  $name = $_POST["name"]; //$_POST pega o valor do nome escrito no campo "name" do formulário anterior
  $senha = $_POST["password"]; //$_POST pega o valor do senhna escrita no campo "password" do formulário anterior

  if ($senha != "qwerty") {
    echo "Acesso negado, tente novamente.";
  } else {
    echo "Acesso permitido.";
  }


  ?>

</body>

</html>