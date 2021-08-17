<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Crash Course - Variáveis</title>
  <style>

    input{
        display: block;
        margin-bottom: 10px;
    }
    select{
        margin-bottom: 10px;
    }

  </style>
</head>

<body>

  <h1>PHP: Como processar Formulários</h1>
  <!-- Method: how to process the for (POST (safest) or GET) | action: where to send the form informations -->
  <form method="POST" action="12-form-response.php">

    Name: <input type="text" name="name">

    Carro: 
    
    <select name="carro">
        <option value="Volvo">Volvo</option>
        <option value="Chev">Chevy</option>
        <option value="Audi">Audi</option>
        <option value="Ford">Ford</option>
        <option value="Toyota">Toyota</option>
        <option value="BMW">BMW</option>
    </select>
    
    
    <input type="submit">
  </form>

</body>

</html>