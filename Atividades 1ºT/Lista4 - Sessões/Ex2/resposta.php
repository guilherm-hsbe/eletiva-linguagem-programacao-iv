<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex2</title>
  </head>
  
  <body class="container">
    <h1>Exercício 2</h1>
    <h4>Lote de Cheques</h4>

    <?php         
        //Receber Variáveis 
        session_start();
        $somaLote = $_SESSION['somaLote'];
        $nCheques = $_SESSION['nCheques'];

        //POST $valCheque e Soma Total do Valor de cada Cheque
        $somaCheque = 0;
        for ($i=1; $i<=$nCheques; $i++){
            $valCheque[$i] = $_POST["valCheque$i"];
            $somaCheque += $valCheque[$i];
        }
        echo "Soma Total do Valor do(s) Cheque(s): R$ $somaCheque <br/>";

        //IMPRIMIR
        if($somaCheque == $somaLote)
          echo "LOTE Ok!";
        
        else if($somaCheque < $somaLote)
          echo "Diferença Negativa!";  
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Escreva um programa para validar um lote de cheques. 

O programa deverá inicialmente solicitar a soma do lote e o número de cheques. 
A seguir deverá ler o valor de cada cheque calculando a soma total. 

Após a digitação de todos os cheques o programa deverá imprimir as seguintes mensagens:
    a. LOTE Ok se a soma informada for igual a soma calculada.
    b. Diferença negativa se a soma calculada for menor que a informada.-->