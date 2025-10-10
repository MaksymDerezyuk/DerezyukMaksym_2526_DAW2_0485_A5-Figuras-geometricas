<?php
require_once '/FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica {
    private $lado2;

    public function __construct($lado1 = 0, $lado2 = 0) {
        parent::__construct('Rectangulo', $lado1);
        $this->lado2 = $lado2;
    }

    public function __destruct() {
        // Destructor
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado) {
        $this->lado2 = $lado;
    }

    public function calcularArea() {
        return $this->getLado1() * $this->lado2;
    }

    public function calcularPerimetro() {
        return 2 * ($this->getLado1() + $this->lado2);
    }

    public function __toString() {
        return "Rectángulo (lados: " . $this->getLado1() . ", " . $this->lado2 . ")";
    }
}
