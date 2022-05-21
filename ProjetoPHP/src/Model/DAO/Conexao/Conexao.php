<?php
    namespace Aluno\ProjetoPhp\Model\DAO;
    use PDO;
    //"PDO" é uma classe predefinida do BD;
    //"Conexao" é um arquivo padrão para a conexão com BD;

    class Conexao{
        //Static Method
        public static function conectar(){
            return new PDO(
                "mysql:host=localhost; 
                dbname=projetophp",
                "root",
                "");
        }
    }
?>