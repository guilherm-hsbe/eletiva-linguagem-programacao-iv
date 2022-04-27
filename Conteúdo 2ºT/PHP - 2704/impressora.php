<?php
    class Impressora {
        //Properties
        private $marca;
        private $modelo;
        private $colorida;
        private $peso;

        //Methods set/get
            //Marca
        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

            //Modelo
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

            //Colorida
        public function getColorida(){
            return $this->colorida;
        }
        public function setColorida($colorida){
            $this->colorida = $colorida;
        }

            //Peso
        public function getPeso(){
            return $this->peso;
        }
        public function setPEso($peso){
            $this->peso = $peso;
        }
    }
?>