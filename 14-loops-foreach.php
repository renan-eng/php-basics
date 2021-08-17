<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Crash Course - Variáveis</title>
 
</head>

<body>

  <h1>PHP: Foearch Loop used with Arrays</h1>
 
  <?php     
    // //for loop
    // echo "For Loop: <br>";
    // echo "<br>";
    // for ($i=0; $i <= 10 ; $i++) { 
    //     echo "Foor Loop: $i<br>"; //as $variaveis pode ser referenciadas dentro das aspas duplas "$i" sem problemas
    // }      
    // echo "<br>";
    // echo "While Loop: <br>";
    // echo "<br>";
    // $x = 0;
    // while($x <= 10){
    //     echo "While Loop = ".$x."<br>";
    //     $x++;
    // }

    //foreach é projetado especificamente para ser utilizado com ARRAY
    echo "<br>";
    echo "For each: <br>";
    echo "<br>";
    $htmlFolder = scandir("/var/www/html"); //Cria um array com todos os arquivos e pastas dentro do diretorio /var/www/html
    //var_dump($htmlFolder); //var_dump() foi utilizado para debug (exibir o array da forma como ele é capturado pelo PHP)
    foreach ($htmlFolder as $key => $value) {
        echo "$key => $value<br>";
        //echo "$value<br>";
    }

  ?>

</body>

</html>