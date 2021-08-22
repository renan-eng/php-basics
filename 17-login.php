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
  <link rel="stylesheet" href="17-styles.css">
  <title>PHP Crash Course - Log In Page</title>
 
</head>

<body>

<nav >
    <ul class="navbar">
        <li class="nav-item active"><a href="17-login.php">Início</a></li>
        <li class="nav-item "><a href="17-pagina-protegida.php">Página protegida</a></li>
        <li class="nav-item "><a href="#">Contato</a></li>
        <li class="nav-item "><a href="17-logout.php">Sair</a></li>
    </ul>
</nav>

<main>

<?php 
//Verifica se o usuário está logado
if(isset($_SESSION['estaLogado'])){
    echo "<p>Você já está logado!<p>";    
} else {
//usandoo Heredoc, para exibir o formulário atraves de um echo
$oFormulario = <<<THERFORM

<form method="POST" action="17-login-reponse.php" id="logIn">
    <p>Bem Vindo à página de Login</p>
    Usuário:
    <input type="text" name="usuario" id="usuario">
    <br>
    Senha:
    <input type="password" name="senha" id="senha">
    <input type="submit" id="botaoLogin" value="Entrar">
</form>

THERFORM;
}

echo $oFormulario;
?>

<?php 

 $isBlock = $_GET['isBlock'];
 $badUserCredentials = $_GET['badUserCredentials'];

 if (isset($isBlock)) {
    echo "Faça login antes de acessar a página protegida!!!";
    echo "<script>document.getElementById('usuario').focus();</script>";
} else if ($badUserCredentials){
    echo "<p>Usuário ou senha errada, tente novamente!</p>";
    echo "<script>document.getElementById('usuario').focus();</script>";
}
?>


</main>

</body>

</html>