<?php
    namespace Aluno\ProjetoPhp\Controller\Lista1\E5;

    class Resposta5
    {
        public static function exibir(){
            require_once("../src/Controller/Lista1/E5/index5.php");
        }
        
        public static function exibirResultado(){
            $n1 = $_POST['n1']; 
            $n2 = $_POST['n2']; 
            $n3 = $_POST['n3']; 
            $n4 = $_POST['n4']; 

            require_once("../src/Controller/Lista1/E5/index5.php");
            }
    }      
?>