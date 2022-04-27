<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex5</title>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Exercício 5</h1>
    <h4>Notas de Aluno</h4>

    <?php
        $n1 = $_POST['n1']; 
        $n2 = $_POST['n2']; 
        $n3 = $_POST['n3']; 
        $n4 = $_POST['n4']; 
        echo "Primeira Nota: $n1<br/>
            Segunda Nota: $n2<br/>
            Terceira Nota: $n3<br/>
            Quarta Nota: $n4<br/>";

        if ($n1 < 0 or $n2 < 0 or $n3 < 0 or $n4 < 0) 
          echo ("<br/>Um ou mais valores são inválidos!");
          
        else
        {
          echo "<br/>Valor da média: ".($media = ($n1 + $n2 + $n3 + $n4) / 4)."<br/>";

          if ($media >= 7)
            echo "Aprovado!";

          else
            echo "Reprovado!";
        }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>