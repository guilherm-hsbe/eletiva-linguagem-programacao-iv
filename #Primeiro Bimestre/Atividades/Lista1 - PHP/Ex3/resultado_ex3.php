<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex3</title>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Exercício 3</h1>
    <h4>Comparação de Valor</h4>

    <?php
      $valor = $_POST['valor']; 
      echo "Valor informado: $valor<br/>";

      if ($valor > 10)
          echo "O valor é maior que 10";

      elseif ($valor < 10)
          echo "O valor é menor que 10"      
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Desenvolva um programa que receba um valor digitado pelo usuário
e imprima o texto "o valor é maior que 10" caso isso seja verdade,
senão imprima "o valor é menor que 10".-->