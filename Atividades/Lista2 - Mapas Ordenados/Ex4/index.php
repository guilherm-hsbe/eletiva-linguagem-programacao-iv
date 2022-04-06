<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Ex4</title>
  </head>
  <body class="container mt-4">
    <h1>Exercício 4</h1>
    <h4>Números Reais</h4>

    <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resolucao_ex4.php">
      <div class="row">
      
          <?php 
            for ($i=1; $i<=10; $i++){ 
          ?>

            <div class="col">
                <label for="vl<?=$i?>" class="label-control"> 
                  Informe valor <?=$i?>:
                </label>
                <input type="text" name="vl<?=$i?>"
                  id="vl<?=$i?>" class="form-control"/>
            </div>
          <?php 
            }
          ?>
          
      </div>

      <div class="row">
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

<!--
4)
Crie um programa que leia 10 números reais, coloque-os num mapa
ordenado e calcule a sua média.
-->