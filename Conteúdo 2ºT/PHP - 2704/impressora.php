    <?php
    //Usa-se $this para acessar propriedades e métodos que fazem escopo de um objeto;
    //Usa-se $self para acessar propriedades e métodos que fazem parte do escopo da classe;

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