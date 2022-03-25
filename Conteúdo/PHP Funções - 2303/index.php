<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Funções</title>
  </head>
  <body>
    <h1>Funções</h1>
    <!--Exemplos-->

    <?= 
      #Data
      date("d/m/Y");?>

    <br/>

    <?= 
      #Hora
      date("h:i");?>

    <br/>

    <?php
      #Formatação de Decimais
      $valor = 10004.71;
      echo "RS ".(number_format($valor,1,',','.'))."<br/>";
    ?>

    <?php
      #Função - Formatação de Decimais
      function formatarNumero ($numero) //function nomeFuncao ($variavel)
      {
          echo "RS ".(number_format($numero,1,',','.'));
      }

      //Passagem de parâmetro
      formatarNumero(10003.731); 
      echo "<br/>";

      formatarNumero(897.111);
      echo "<br/>";

      #Função Retornar - Formatação de Decimais
      function retornarNumero ($numero)
      {
          return "RS ".(number_format($numero,1,',','.'));
      }

      //Passagem de parâmetro
      echo retornarNumero(2000.777);
      
      $numero = retornarNumero(150.66);
      echo "<br/>";
      echo $numero;   
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>