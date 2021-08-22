<?php     
//Start the session
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="17-styles.css">
  <title>PHP Crash Course - Log In Page</title>
 
</head>

<body>

<nav >
    <ul class="navbar">
        <li class="nav-item "><a href="17-login.php">Início</a></li>
        <li class="nav-item "><a href="17-pagina-protegida.php">Página protegida</a></li>
        <li class="nav-item "><a href="#">Contato</a></li>
        <li class="nav-item active"><a href="17-logout.php">Sair</a></li>
    </ul>
</nav>

<main>
    <p>Você desconectou seu usuário!</p>
</main>



</body>

</html>