<?php
  namespace Aluno\ProjetoPhp\Controller\Lista1\E1;

  class Resposta1
  {
    public static function exibir(){
      require_once("../src/Controller/Lista1/E1/index1.php");
    }

    public static function exibirResultado(){
      $valorpago = $_POST['valorpago']; 
      $valorpreco = $_POST['valorpreco'];
    
      $troco = $valorpago - $valorpreco;
 
      require_once("../src/Controller/Lista1/E1/index1.php");
    }
  }
?>
<!--Faça um programa que receba um valor pago, um segundo valor que
é o preço do produto e retorne o troco a ser dado.-->