<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex5</title>
  </head>
  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Exercício 5</h1>
    <h4>Matriz</h4>

    <?php
        //leitura mapa
        for ($i=1; $i<=10; $i++){
            $vet[$i] = $_POST["vl$i"];
        }

        //ordem crescente
        sort($vet);
        echo "Crescente: ";
        foreach($vet as $v) { echo "$v"; }

        //ordem decrescente
        rsort($vet);
        echo "<br/>Decrescente: ";
        foreach($vet as $v) { echo "$v"; }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--
5)
Crie um programa que ordene uma matriz de 10 elementos por ordem
crescente e decrescente.
-->