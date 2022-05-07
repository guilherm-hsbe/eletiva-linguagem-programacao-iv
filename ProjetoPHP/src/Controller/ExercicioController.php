<?php
/*"Controller" é responsável pelo controle de "View" e "Model";
Controle de métodos incluso;*/ 

namespace Aluno\ProjetoPhp\Controller; //Nome da aplicação;


class ExercicioController
{

    public static function exibir(){
        require_once("../src/view/exemplo.php");
    }

    public static function exibirResultado(){
        $v1 = $_POST['valor1'];
        $v2 = $_POST['valor2'];
        $soma = $v1 + $v2;
        require_once('../src/view/exemplo.php');
    }

}