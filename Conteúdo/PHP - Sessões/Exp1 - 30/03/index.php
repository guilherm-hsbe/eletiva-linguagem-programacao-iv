<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema em PHP</title>
  </head>
  
  <body clas="container mt-4">
    <h1>Sistema em PHP</h1>

    <div class="row">
      <div class="col"></div>

      <!--Modal {-->
      <div class="col">
        <div class="modal" tabindex="-1" style="display: block;">
          <div class="modal-dialog">
            <div class="modal-content">

              <!--Acessar-->
              <div class="modal-header">
                  <h5 class="modal-title">Acessar</h5>
              </div>

              <!--Formulário-->
              <div class="modal-body">
                  <form action="resposta.php" method="post">

                    <!--Email-->
                    <div class="row">
                      <div class="col">
                        <lable for="email" class="label-control">
                          Informe o email
                        </lable>
                        <input type="email" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <!--Senha-->
                    <div class="row mt-3 mb-2">
                      <div class="col">
                        <lable for="pass" class="label-control">
                          Informe a senha
                        </lable>
                        <input type="password" name="pass" id="pass" class="form-control">
                      </div>
                    </div>

                  </form>
              </div>

              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-warning">Save changes</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--}-->

      <div class="col"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>