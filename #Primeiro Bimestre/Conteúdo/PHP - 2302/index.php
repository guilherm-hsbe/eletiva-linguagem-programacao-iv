<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    <h1>Olá! Hoje é dia 
      <?php
          //1
          #2
          /*3*/
          echo "<p>".date ('d/m/Y')."</p>";
          
          #variável pode sofrer substituição de valor no seguimento das linhas de código;
          $umaVariavel = 20;
          $umaVariavel = "G";

          #apresentação/saída de dados:Ç
            #tipos de apresentação:
              //print ("");
              //echo "";

            #mudança de aspas:
              //("Meu nome é $umaVariavel"); #Apresenta o conteúdo da variável
              //('Meu nome é $umaVariavel'); #Apresenta o nome da variável

            #organização do texto apresentado:
              //("Meu nome é ".$umaVariavel); #Fecha aspas no final do texto, seguido de concatenação (".") e nome da variável. 
              //("Meu nome é $umaVariavel"); #Não fecha aspas para mesclar variável no texto. 

          #tipos de incrementos e suas ordens de sinal;
          $total = 30 * 10 / 2 - 4 + 1;
          $total ++; //adiciona valor 1;
          $total --; //subtrai valor 1;
          --$total; //subtrai valor 1 dependendo de ordem;
          echo $total;
      ?>
    </h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<!--Abrir o servidor:
