<?php
    namespace Aluno\ProjetoPhp\Model\Entity;

    class Produtos{
        //Properties
        private $id;
        private $nome;
        private $descricao;
        private $valor;

        //Get/Set
            //Id
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

            //Nome
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

            //Descricao
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

            //Valor
        public function getValor(){
            return $this->valor;
        }
        public function setValor($valor){
            $this->valor = $valor;
        }
    }
?>