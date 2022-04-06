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
        <h4>Corrida de Automóveis</h4>

        <div class="row">
            <div class="col"></div>

            <!--Modal {-->
            <div class="col">
                <div class="modal" tabindex="-1" style="display: block;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!--Topo-->
                            <div class="modal-header">
                                <h5 class="modal-title">Acessar</h5>
                            </div>

                            <!--Formulário-->
                            <div class="modal-body">
                                <form action="resposta.php" method="post"><!--Form {-->

                                <!--Email-->
                                <div class="row">
                                    <div class="col">
                                        <label for="email" class="label-control">Informe o email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>

                                <!--Senha-->
                                <div class="row mt-3 mb-2">
                                    <div class="col">
                                        <label for="pass" class="label-control">Informe a senha</label>
                                        <input type="password" name="pass" id="pass" class="form-control">
                                    </div>
                                </div>                 
                            </div>

                            <!--Submit-->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Acessar</button>
                                </form><!--Form }-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Modal }-->

      <div class="col"></div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<!--Durante uma corrida de automóveis com N voltas de duração foram anotados para um piloto,
na ordem, os tempos registrados em cada volta. Fazer um programa para ler os tempos das N
voltas, calcular e imprimir: melhor tempo; a volta em que o melhor tempo ocorreu; tempo
médio das N voltas.-->