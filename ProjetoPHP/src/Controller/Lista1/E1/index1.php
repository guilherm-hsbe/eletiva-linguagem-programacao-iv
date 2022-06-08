<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E1</title>
  </head>
  <body class="container mt-4">
    <h2>Exercício 1</h2>
    <h4>Valores</h4>

    <form class="mt-3 p-4 border border-light border-2 rounded shadow-sm" method="post" action="/resposta1">
      <div class="row">
        <div class="col">
            <label for="valorpago" class="label-control">
              Informe o valor pago:
            </label>
            <input type="number" name="valorpago"
              id="valorpago" class="form-control"/>
        </div>

        <div class="col">
            <label for="valorpreco" class="label-control">
              Informe o preço do produto:
            </label>
            <input type="number" name="valorpreco"
              id="valorpreco" class="form-control"/>
        </div>
      </div>

      <div class="row">
        <div class="col mt-4">
            <button type="submit" class="btn btn-success">
              Enviar
            </button>
        </div>
      </div>
    </form>
  
    <?php
      if (isset($troco, $valorpago, $valorpreco)){
    ?>

    <div class="mt-3 p-4 border border-light border-2 rounded shadow-sm">
      <h4>Resposta</h4>

      <?php
        echo "O valor pago é: R$ $valorpago <br/> 
          O preço do produto é: R$ $valorpreco <br/><br/>";

        if ($troco > 0)
          echo "O valor do troco é: R$ $troco";
  
        elseif ($troco < 0)
          echo "Saldo insuficiente para comprar o produto!";
  
        else
          echo "Não há troco!";
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

<!--Faça um programa que receba um valor pago, um segundo valor que
é o preço do produto e retorne o troco a ser dado.-->