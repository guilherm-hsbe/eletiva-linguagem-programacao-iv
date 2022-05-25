<?php

  namespace Aluno\PropetoPhp\Controller\Lista1Refeita\Ex1;

  class ResultadoEx1
  {
    public static function exibir(){
      require_once("../src/Controller/Lista1Refeita/Ex1/indexex1.php");
    }

    public static function exibirResultado(){
      $valorpago = $_POST['valorpago']; 
      $valorpreco = $_POST['valorpreco'];
      echo "O valor pago é: $valorpago <br/> 
          O preço do produto é: $valorpreco <br/><br/>";
    
      $troco = $valorpago - $valorpreco;
 
      require_once("../src/Controller/Lista1Refeita/Ex1/indexex1.php");
    }
  }
?>
<!--Faça um programa que receba um valor pago, um segundo valor que
é o preço do produto e retorne o troco a ser dado.-->