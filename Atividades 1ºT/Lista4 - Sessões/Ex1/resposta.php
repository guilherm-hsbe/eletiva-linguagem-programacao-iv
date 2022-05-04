<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex1</title>
  </head>
  
  <body class="container">
    <h1>Exercício 1</h1>
    <h4>Corrida de Automóveis</h4>

    <?php         
        //Variáveis
        session_start();
        $nVoltas = $_SESSION['nVoltas'];

        for ($i=1; $i<=$nVoltas; $i++){
            $tVoltas[$i] = $_POST["tVoltas$i"];
        }

        //Funções
        $melhorVolta = 0;
        $melhorTempo = $tVoltas[1];
        $media = 0;
        foreach($tVoltas as $chave => $valor){

          //Melhor Tempo
          if($melhorTempo > $valor){
            $melhorTempo = $valor;
            $melhorVolta = $chave;
          }

          //Media
          $media += $valor;
        }

        echo "Melhor tempo: $melhorTempo segundos! <br/>
        Volta: $melhorVolta. <br/><br/>

        Média das $nVoltas voltas: ".number_format($media/$nVoltas,1)." segundos.";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Durante uma corrida de automóveis com N voltas de duração foram anotados para um piloto,
na ordem, os tempos registrados em cada volta. Fazer um programa para ler os tempos das N
voltas, calcular e imprimir: melhor tempo; a volta em que o melhor tempo ocorreu; tempo
médio das N voltas.-->