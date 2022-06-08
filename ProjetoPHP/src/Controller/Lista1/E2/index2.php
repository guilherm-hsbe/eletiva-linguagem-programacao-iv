<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E2</title>
  </head>

  <body class="container mt-4">
    <h1>Exercício 2</h1>
    <h4>Peso</h4>
    
    <form class="mt-3 p-4 border border-light border-2 rounded shadow-sm" method="post" action="/resposta2">
      <div class="row">
        <div class="col">
            <label for="valorquilo" class="label-control">
              Informe o valor do quilo (R$): 
            </label>
            <input type="number" name="valorquilo"
              id="valorquilo" class="form-control"/>
        </div>

        <div class="col">
            <label for="quantquilo" class="label-control">
                Informe a quantidade de quilos (kg): 
            </label>
            <input type="number" name="quantquilo"
              id="quantquilo" class="form-control"/>
        </div>
      </div>

      <div class="row">
        <div class="col mt-4">
            <button type="submit" class="btn btn-warning">
              Enviar
            </button>
        </div>
      </div>
    </form>

    <?php
      if (isset($valorquilo,$quantquilo)){
    ?>
    
    <div class="mt-3 p-4 border border-light border-2 rounded shadow-sm">
      <h4>Resposta</h4>

      <?php
        if ($valorquilo <= 0 or $quantquilo <= 0)
            echo ("Um ou mais valores são inválidos!");

        else
            echo "O valor do quilo é: R$ $valorquilo <br/> 
                A quantidade de quilos é: R$ $quantquilo <br/>
                <br/>O valor final a ser pago é de : R$ ".$valorquilo * $quantquilo;
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Faça um programa que receba o valor do quilo de um produto e a
quantidade de quilos do produto consumida, calculando o valor final
a ser pago.-->