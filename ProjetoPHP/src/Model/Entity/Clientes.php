<?php
    namespace Aluno\ProjetoPhp\Model\Entity;

    class Clientes{
        //Properties
        private $id;
        private $nome;
        private $email;
        private $idade;

        //Get/Set
            //Id
        public function getTd(){
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

            //Email
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

            //Idade
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
    }
?>