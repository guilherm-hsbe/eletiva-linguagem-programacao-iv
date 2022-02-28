<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cálculos</title>
  </head>

  <body class="container">
    <h1>Cálculos</h1>

    <?php
      #variável recebe valores de "index" através de "$_POST" (depende do method usado);
      $valor1 = $_POST['valor1']; 
      $valor2 = $_POST['valor2'];
      echo "Valor 1 é: $valor1 <br/> 
        Valor 2 é: $valor2 <br/>";

      #expressões aritméticas podem ser executadas dentro de "echo";
      echo "<br/> Soma: ."($valor1 + $valor2);
      echo "<br/> Subtração: ".($valor1 - $valor2);
      echo "<br/> Multiplicação: ".($valor1 * $valor2);

      if ($valor2 != 0){
        echo "Divisão: "($valor1 / $valor2);}

      else{
        echo "Não é possível realizar divisão por 0!";}

      if ($valor1 % 2 == 0){
        echo "Valor 1 é par!";}        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>