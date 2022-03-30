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
        <h4>Divisores</h4>

        <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resposta_ex4.php">
            <div class="row">

                <?php
                    for ($i=1; $i<=5; $i++){
                ?>
                    <div class="col">
                        <label for="n<?=$i?>" class="label-control"> Informe Número: </label>
                        <input type="number" name="n<?=$i?>" id="n<?=$i?>" class="form-control"/>
                    </div>
                <?php
                    }
                ?>
            </div>

            <div class="row">
                <div class="col mt-4">
                    <button type="submit" class="btn btn-warning"> Enviar </button>
                </div>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<!--Escreva um programa que leia 5 números inteiros positivos. 
Para cada número informado, utilize uma função que escreva a soma de seus divisores (exceto ele mesmo).
Exemplo: divisores de 8: 1+2+4 = 7.-->