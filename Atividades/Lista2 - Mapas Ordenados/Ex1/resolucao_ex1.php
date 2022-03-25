<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cálculo Exercício 1</title>
  </head>
  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h3>Cálculo Exercício 1</h3>

    <?php
      for ($i=1; $i<=10; $i++){
          $vetor[$i] = $_POST["valor$i"];
      }

      $posicao = 0;
      $maior = 0;

      //var_dump($vetor);
      foreach($vetor as $chave => $valor){
          echo "#Pos ($chave) Val ($valor)<br/>";

          if ($valor > $maior){
            $maior = $valor;
            $posicao = $chave;
          }
      }

      echo "<br/>Maior valor: Pos ($posicao) Val ($maior)";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>