<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex1</title>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Ex1</h1>

    <?php
      function verificarData($dia,$mes,$ano){
        if (checkdate($mes,$dia,$ano))
          echo "Essa é uma data válida!";

        else
          echo "Essa não é uma data válida!";
      }

      $diaIU = $_POST['dia'];
      $mesIU = $_POST['mes'];
      $anoIU = $_POST['ano'];

      verificarData($diaIU,$mesIU,$anoIU);
    ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>