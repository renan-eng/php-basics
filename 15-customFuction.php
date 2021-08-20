
<?php     
        // Custom Function
        //  - O nome da função pode comecar com uma letra ou undercores _ (não pode começar com número)
        //  - O nome das funções não são case-sensitive
        function umaFuncao($var1, $var2 = "chamada"){

            echo "A função só sera $var1 quando for $var2.";

        }       
        function outraFuncao($var1, $var2 = "chamada"){

          return "A função só sera $var1 quando for $var2.";
          echo "A função não é computada após seu return, logo essa linha de str não será exibida.";

      }
      function saudacao($nome, $dia){

        echo "Olá, $nome! Hoje é $dia.";

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

  <h1>PHP: Funções definidas pelo usuário! </h1>
 
  <?php    
      // Funções permite deixar seu código principal mais limpo, pois as funções podem ficar em um outro
      // arquivo "escondidas", deixando o codigo menor e mais simples de ler 

        umaFuncao("executada");
        echo "<br>";
        echo outraFuncao("executada");
        echo "<br>";
        echo saudacao("Renan", "Sexta-feira");
    
  ?>

</body>

</html>