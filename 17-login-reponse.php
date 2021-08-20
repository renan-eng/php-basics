<?php     
//Start the session
session_start();

// Verifica se o usuário digito as informações de login corretamente
// No mundo real existiria um código que busca informações do banco de dados e verifica se
// usuario e senhas foram digitados corretamente.
$userName = $_POST["usuario"];

if (trim($userName) == "Renan") {
    $_SESSION['estaLogado'] = true;
    header('Location: 17-pagina-protegida.php');
} else {
    header('Location: 17-login.php?badUserCredentials=true');
}

?>