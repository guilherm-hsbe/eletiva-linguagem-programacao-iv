<?php
    class Funcionario{
        //Propriedades
        private $nome;
        private $codigo;
        private $salarioBase;
        
        //Encapsulamento
            //Nome
        public function getNome(){
            return $this->nome;
        }
        /*public function setNome($nome){
            $this->nome = $nome;
        }*/

            //Codigo
        public function getCodigo(){
            return $this->codigo;
        }
        /*public function setCodigo($codigo){
            $this->codigo = $codigo;
        }*/

            //SalarioBase
        public function getSalarioBase(){
            return $this->salarioBase;
        }
        public function setSalarioBase($salarioBase){
            $this->salarioBase = $salarioBase;
        }

        //Construtor
        public function __construct($codigo, $nome, $salarioBase){
            $this->$codigo;
            $this->$nome;
            $this->$salarioBase;
        }

        //Métodos
        public function getSalarioLiquido(){
            $inss = $this->salarioBase * 0.1;
            $ir = 0.0;

            if($this->salarioBase > 2000.0){
                $ir = ($this->salarioBase - 2000.0)*0.12;
            }
            return($this->salarioBase - $inss - $ir);
        }

        public function Mostrar(){
            return($this->getClass()->getSimpleName() + 
            "\nCódigo: " + $this->getCodigo() + 
            "\nNome: " + $this->getNome() + 
            "\nSalário Base: " + $this->getSalarioBase() + 
            "\nSalário Líquido " + $this->getSalarioLiquido());
        }
    }
?>