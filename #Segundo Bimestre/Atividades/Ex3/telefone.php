<?php
    abstract class Telefone{
        //Propriedades
        protected $ddd;
        protected $num;

        //Encapsulamento
            //DDD
        public function getDdd(){
            return $this->ddd;
        }
        public function setDdd($ddd){
            $this->ddd = $ddd;
        }

            //Número
        public function getNum(){
            return $this->num;
        }
        public function setNum($num){
            $this->num = $num;
        }

        //Método
        abstract protected function calculaCustoLigacao($tempoLigacao);
    }
?>