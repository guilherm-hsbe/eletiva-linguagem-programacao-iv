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
        <h4>Validação de Data</h4>

        <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resposta_ex1.php">
            <div class="row">
                <div class="col">
                    <label for="dia" class="label-control"> Dia: </label>
                    <input type="number" name="dia" id="dia" class="form-control"/>
                </div>

                <div class="col">
                    <label for="mes" class="label-control"> Mês: </label>
                    <input type="number" name="mes" id="mes" class="form-control"/>
                </div>

                <div class="col">
                    <label for="ano" class="label-control"> Ano: </label>
                    <input type="number" name="ano" id="ano" class="form-control"/>
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

<!--Faça um programa que leia uma data e verifique se ela é válida. 
Além disso informe ao usuário seu respectivo dia da semana.-->