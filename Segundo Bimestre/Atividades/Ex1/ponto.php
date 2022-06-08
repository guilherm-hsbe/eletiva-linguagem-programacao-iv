<?php
    class Ponto{
        //Properties
        private $x;
        private $y;
        private static $contador = 0;

        //Methods set/get
            //X
        public function getX(){
            return $this->x;
        }
        public function setX($x){
            $this->x = $x;
        }

            //Y
        public function getY(){
            return $this->y;
        }
        public function setY($y){
            $this->y = $y;
        }

            //Contador
        public static function setContador(){
            self::$contador++;
        }
        public static function getContador(){
            return self::$contador;
        }

        //Constructor
        public function __construct($x,$y){
            $this->setX($x);
            $this->setY($y);
            self::setContador();
        }

        //Methods
            //CalcularDistância x1/y1
        public function calcularDistancia(Ponto $p){
            $valorX = pow(($p->getX() - $this->x), 2); 
            $valorY = pow(($p->getY() - $this->y), 2);
            return sqrt($valorX + $valorY);
        }

            //CalcularDistância2 x2/y2
        public function calcularDistancia2($x2,$y2){
            $valorX = pow(($x2 - $this->x), 2); 
            $valorY = pow(($y2 - $this->y), 2);
            return sqrt($valorX + $valorY);
        }

            //CalcularDistância3 x1/x2/ y1/y2
        public function calcularDistancia3($x1,$x2,$y1,$y2){
            $valorX = pow(($x2 - $x1), 2); 
            $valorY = pow(($y2 - $y1), 2);
            return sqrt($valorX + $valorY);
        }
    }
?>