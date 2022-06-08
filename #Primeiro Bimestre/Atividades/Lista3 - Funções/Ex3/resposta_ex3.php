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
    <h4>Menor Número</h4>

    <?php
      //Função
      function menorNumero($nUm,$nDois){
          if ($nUm < $nDois)
              echo "Menor Número: $nUm";

          elseif ($nDois < $nUm)
              echo "Menor Número: $nDois";

          else
              echo "Os números são iguais!";
      }          

      //POST
      $nUm = $_POST['nUm'];
      $nDois = $_POST['nDois'];

      //Chamada Função
      menorNumero($nUm,$nDois);
    ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Escreva um programa que leia dois números inteiros e uma função que retorne o menor número entre eles.-->