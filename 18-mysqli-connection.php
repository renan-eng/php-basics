<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="18-styles.css">
  <title>PHP MySQLi: connecting to the database</title>
  <style>
    .d{
     margin-top: 50px;
    }
  </style>
 
</head>

<body>

<nav>
    <ul class="navbar">
        <li class="nav-item active"><a href="#">Início</a></li>
        <li class="nav-item "><a href="#">Página protegida</a></li>
        <li class="nav-item "><a href="#">Contato</a></li>
        <li class="nav-item "><a href="#">Sair</a></li>
    </ul>
</nav>

<div class="d">
   <h1>PHP MySQLi: connecting to the database</h1>

    <?
    $servername = "localhost";
    $username = 'renan';
    $password = 'renan!!!';
    $dbname = 'meubanco';

    //Criando conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexão
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        //exibe toda a infomação das colunas na tabela
        while($row = $result->fetch_assoc()){
            echo "Id: ".$row["id"]." - Name: ".$row["name"]."<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?> 
</div>

</body>

</html>