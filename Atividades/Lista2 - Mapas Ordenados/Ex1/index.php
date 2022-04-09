<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Ex1</title>
  </head>
  <body class="container mt-4">
    <h1>Exercício 1</h1>
    <h4>Maior Valor</h4>

    <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resolucao_ex1.php">
      <div class="row"><!--linhainput-->
          <?php #abertura e fechamento com o comando desejado dentro;
            for ($i=1; $i<=10; $i++){ #comando de reptição
          ?>
            <div class="col">
                <label for="valor<?=$i?>" class="label-control"> <!--comando PHP linha 21: exibição de valor de acordo com "linha 18"-->
                  Informe valor <?=$i?>:
                </label>
                <input type="number" name="valor<?=$i?>"
                  id="valor<?=$i?>" class="form-control"/>
            </div>
          <?php #abertura e fechamento do comando aberto no começo do laço(os códigos a serem executados ficam entre os "<?php");
            }
          ?>
      </div>

      <div class="row"><!--linhabotão-->
        <div class="col mt-4">
            <button type="submit" class="btn btn-warning">
              Enviar
            </button>
        </div>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Escreva um programa que procure e indique o maior valor (e a respetiva
posição) de um mapa ordenado de 10 posições introduzido pelo usuário.-->