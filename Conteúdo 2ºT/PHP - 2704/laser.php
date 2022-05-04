<?php
    class Laser extends Impressora{
        //Properties
        private $capacidadeToner;
        private $frenteVerso;

        //Methods
            //capacidadeToner
        public function getCapacidadeToner(){
            $this->capacidadeToner;
        }
        public function setCapacidadeToner($capacidadeToner){
            return $this->capacidadeToner = $capacidadeToner;
        }

            //frenteVerso
        public function getFrenteVerso(){
            $this->frenteVerso;
        }
        public function setFrenteVerso($frenteVerso){
            return $this->frenteVerso = $frenteVerso;
        }

        //Constructor
        public function __construct($marca,$modelo,$peso,$colorida,$frenteVerso,$capacidadeToner){
            $this->setMarca($marca);
            $this->setModelo($modelo);
            
        }
    }
?>