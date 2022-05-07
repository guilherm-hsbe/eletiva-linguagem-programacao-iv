<!--"View" é responsável pela interação do usuário com as telas do sistema-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body class="container">
    <h2 class='mb-4'>Exemplo 1</h2>

    <form method='post' action='/exemplo-resultado'>
        <div class='row'>
            <div class='col'>
                <label class='label-control'>Valor 1</label>
                <input class='form-control' name='valor1' type='text'/>
            </div>

            <div class='col'>
                <label class='label-control'>Valor 2</label>
                <input class='form-control' name='valor2' type='text'/>
            </div>
        </div>

        <div class='row mt-3'>
            <div class='col'>
                <button type='submit' class='btn btn-success'>Ok</button>
            </div>
        </div>
    </form>

    <?php
        if (isset($soma))
            echo "O valor da soma é $soma";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>