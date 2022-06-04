<?php
    namespace Aluno\ProjetoPhp\Controller\Lista1\E3;

    class Resposta3
    {
        public static function exibir(){
            require_once("../src/Controller/Lista1/E3/index3.php");
        }
        
        public static function exibirResultado(){
            $valor = $_POST['valor'];  

            require_once("../src/Controller/Lista1/E3/index3.php");
            }
    }      
?>