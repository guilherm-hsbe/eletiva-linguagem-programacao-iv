<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Alterar Produto</title>
  </head>
  
  <body class="container mt-4">
    <?php require_once "barra_navegacao_produto.php"; ?>
    
    <form class="row g-3 mt-3 p-4 border border-light border-2 rounded" action="/produto/editar/<?=$params[1]?>" method="post">
      <h2 class="mb-4">Alterar Produto</h2>

      <div class="col-4">
          <label for="nome" class="label-control">Informe o nome</label>
          <input type="text" class="form-control" name="nome" id="nome" value="<?=$resultado['nome']?>">
      </div>

      <div class="col-4">
          <label for="descricao" class="label-control">Informe a descrição</label>
          <input type="text" class="form-control" name="descricao" id="descricao" value="<?=$resultado['descricao']?>">
      </div>

      <div class="col-4">
          <label for="valor" class="label-control">Informe o valor</label>
          <input type="number" class="form-control" name="valor" id="valor" value="<?=$resultado['valor']?>">
      </div>

      <div class="col-12 mt-4">
          <button type="submit" class="btn btn-primary btn-warning">Enviar</button>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>