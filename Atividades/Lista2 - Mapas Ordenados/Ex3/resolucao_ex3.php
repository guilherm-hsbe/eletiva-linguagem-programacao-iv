<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cálculo Exercício 3</title>
  </head>
  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h3>Cálculo Exercício 3</h3>

    <?php
        //leitura mapa
        for ($i=1; $i<=4; $i++){
            $vet[$i] = $_POST["vl$i"];
        }

        //função
        foreach($vet as $pos => $vl)
          {
            
          }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--
3)
Crie um programa que leia um conjunto de valores inteiros do usuário e os
coloque em um mapa ordenado. Caso o usuário informe valores repetidos,
esses valores devem ser substituídos por hífen (-). 
Exiba o resultado final desse mapa ao usuário
-->