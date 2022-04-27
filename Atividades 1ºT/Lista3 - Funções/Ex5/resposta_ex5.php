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
    <h4>Divisores</h4>

    <?php
        //Função
        function calculoIMC($altura,$peso){
          if ($altura <= 0 or $peso <= 0)
            echo "Um ou mais valores são inválidos!";

          else{
            $altura = $altura / 100;
            $imc = $peso / ($altura*$altura);

            echo "Valor do IMC calculado: ".number_format($imc,1,',','.')."</br></br>
            Classificação: ";

            if ($imc <= 18.5)
              echo "Abaixo do peso";

            else if ($imc >= 18.6 and $imc <= 24.9)
              echo "Peso ideal (parabéns!)";

            else if ($imc >= 25 and $imc <= 29.9)
              echo "Levemente acima do peso";

            else if ($imc >= 30 and $imc <= 34.9)
              echo "Obesidade grau I";

            else if ($imc >= 35 and $imc <= 39.9)
              echo "Obesidade grau II (severa)";

            else
              echo "Obesidade III (mórbida)";
          }
        }          

        //POST
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];

        //Chamada Função
        calculoIMC($altura,$peso);
    ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Faça um programa que leia a altura e o peso de uma pessoa, e que tenha uma função que calcule o
IMC baseando-se nos valores lidos. Exiba o IMC e a classificação dele na tela.-->