<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Orientação a Objetos em PHP</title>
  </head>
  
  <body>
    <h1>Orientação a Objetos em PHP</h1>

    <?php
      require_once("impressora.php");
      require_once("matricial.php");
      require_once("laser.php");

      $impressora = new Impressora();
      $impressora->setMarca("Classe Impressora!");

      $matricial = new Matricial("HP","01",10,true,true,10);

      var_dump($impressora);
      echo"<br/>";

      var_dump($matricial);

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>