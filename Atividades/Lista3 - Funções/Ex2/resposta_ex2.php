<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex2</title>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Exercício 2</h1>
    <h4>Ordem Alfabética</h4>

    <?php
      //Função
      function ordenarNomesAlfabetico($vetNomes){
        if (asort($vetNomes))
        {
          foreach($vetNomes as $v) { echo "- $v<br/>"; }
        } 

        else
          echo "a";  
      }          

      //POST
      for ($i=1; $i<=10; $i++){
        $vetNomes[$i] = $_POST["nome$i"];
      }

      //Chamada Função
      ordenarNomesAlfabetico($vetNomes);
    ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Faça um programa que leia o nome de 10 alunos de uma turma e que ao enviar esses nomes eles
sejam apresentados em ordem alfabética-->