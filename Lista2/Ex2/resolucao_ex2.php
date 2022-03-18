<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cálculo Exercício 2</title>
  </head>
  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h3>Cálculo Exercício 2</h3>

    <?php
      for ($i=1; $i<=20; $i++){
          $vet[$i] = $_POST["vl$i"];
      }

      if ($vet[$i] >= 1 and $vet[$i] <= 10){
          echo "a";
      }

      /* /var_dump($vetor);
      foreach($vetor as $chave => $valor){
          echo "#Pos ($chave) Val ($valor)<br/><br/>";

          if ($valor > $maior){
            $maior = $valor;
            $posicao = $chave;
          }
      }

      echo "<br/>Maior valor: Pos ($posicao) Val ($maior)"; */
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>