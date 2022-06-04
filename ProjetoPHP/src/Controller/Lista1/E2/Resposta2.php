<?php
    namespace Aluno\ProjetoPhp\Controller\Lista1\E2;

    class Resposta2
    {
        public static function exibir(){
            require_once("../src/Controller/Lista1/E2/index2.php");
        }
        
        public static function exibirResultado(){
            $valorquilo = $_POST['valorquilo']; 
            $quantquilo = $_POST['quantquilo'];

            require_once("../src/Controller/Lista1/E2/index2.php");
            }
    }
?>