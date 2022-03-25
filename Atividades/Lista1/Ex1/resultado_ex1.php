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
      $valorpago = $_POST['valorpago']; 
      $valorpreco = $_POST['valorpreco'];
      echo "O valor pago é: $valorpago <br/> 
          O preço do produto é: $valorpreco <br/><br/>";

      $troco = $valorpago - $valorpreco;

      if ($troco > 0)
        echo "O valor do troco é: $troco";

      elseif ($troco < 0)
        echo "Saldo insuficiente para comprar o produto!";

      else
        echo "Não há troco!"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>