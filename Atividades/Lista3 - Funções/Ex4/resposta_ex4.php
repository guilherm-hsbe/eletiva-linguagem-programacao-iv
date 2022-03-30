<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex4</title>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Exercício 4</h1>
    <h4>Divisores</h4>

    <?php
        //Função
        function divisores($vetn){
            foreach($vetn as $v){
                $s = 0;
                for ($n=1; $n<$v; $n++){
                    if ($v % $n == 0)
                        $s = $s + $n;
                echo "- Divisores de $v: $s <br/>";}
            }
        }          

        //POST
        for ($i=1; $i<=5; $i++){
            $vetn[$i] = $_POST["n$i"];}

        //Chamada Função
        divisores($vetn);
    ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Escreva um programa que leia 5 números inteiros positivos. 
Para cada número informado, utilize uma função que escreva a soma de seus divisores (exceto ele mesmo).
Exemplo: divisores de 8: 1+2+4 = 7.-->