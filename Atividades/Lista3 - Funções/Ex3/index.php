<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Form Ex3</title>
    </head>

    <body class="container mt-4">
        <h1>Exercício 3</h1>
        <h4>Menor Número</h4>

        <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resposta_ex3.php">
            <div class="row">
                    <div class="col">
                        <label for="nUm<?=$i?>" class="label-control"> Informe um Número Inteiro: </label>
                        <input type="number" name="nUm" id="nUm" class="form-control"/>
                    </div>

                    <div class="col">
                        <label for="nDois" class="label-control"> Informe outro Número Inteiro: </label>
                        <input type="number" name="nDois" id="nDois" class="form-control"/>
                    </div>
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

<!--Escreva um programa que leia dois números inteiros e uma função que retorne o menor número entre eles.-->