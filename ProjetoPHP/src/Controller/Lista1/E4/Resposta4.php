<?php
    namespace Aluno\ProjetoPhp\Controller\Lista1\E4;

    class Resposta4
    {
        public static function exibir(){
            require_once("../src/Controller/Lista1/E4/index4.php");
        }
        
        public static function exibirResultado(){
            $valor = $_POST['valor'];  

            require_once("../src/Controller/Lista1/E4/index4.php");
            }
    }      
?>