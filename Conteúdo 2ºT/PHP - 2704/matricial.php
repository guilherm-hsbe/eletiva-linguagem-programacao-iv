<?php
    class Matricial extends Impressora{
        //Properties
        private $numAgulhas;
        private $imprimeVias;

        //Methods set/get
            //numAgulhas
        public function getNumAgulhas(){
            $this->numAgulhas;
        }
        public function setNumAgulhas($numAgulhas){
            return $this->numAgulhas = $numAgulhas;
        }

            //imprimeVias
        public function getImprimeVias(){
            $this->imprimeVias;
        }
        public function setImprimeVias($imprimeVias){
            return $this->imprimeVias = $imprimeVias;
        }

        //Constructor
        public function __construct($marca,$modelo,$numAgulhas,$imprimeVias,$colorida,$peso){
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setColorida($colorida);
            $this->setPeso($peso);
            $this->setNumAgulhas($numAgulhas);
            $this->setImprimeVias($imprimeVias);
        }
    }
?>