<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Form Ex2</title>
    </head>

    <body class="container mt-4">
        <h1>Exercício 2</h1>
        <h4>Lote de Cheques</h4>

        <div class="row">
            <!--Modal {-->
            <div class="col">
                <div class="modal" tabindex="-1" style="display: block;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!--Topo-->
                            <div class="modal-header">
                                <h5 class="modal-title">Lote de Cheques</h5>
                            </div>

                            <!--Formulário-->
                            <div class="modal-body">
                                <form action="valor_cheques.php" method="post"><!--Form {-->
                                    <!--Soma do Lote-->
                                    <div class="row mt-3 mb-2">          
                                        <div class="col">
                                            <label for="somaLote" class="label-control">Informe a soma do lote</label>
                                            <input type="number" name="somaLote" id="somaLote" class="form-control">
                                        </div>
                                    </div>

                                    <!--Número de Cheques-->
                                    <div class="row mt-3 mb-2">          
                                        <div class="col">
                                            <label for="nCheques" class="label-control">Informe o número de cheques</label>
                                            <input type="number" name="nCheques" id="nCheques" class="form-control">
                                        </div>
                                    </div>

                            <!--Submit-->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                </form><!--Form }-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Modal }-->
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<!--Escreva um programa para validar um lote de cheques. 

O programa deverá inicialmente solicitar a soma do lote e o número de cheques. 
A seguir deverá ler o valor de cada cheque calculando a soma total. 

Após a digitação de todos os cheques o programa deverá imprimir as seguintes mensagens:
    a. LOTE Ok se a soma informada for igual a soma calculada.
    b. Diferença negativa se a soma calculada for menor que a informada.-->