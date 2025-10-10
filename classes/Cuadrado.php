<?php
require_once '/FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {
    public function __construct($lado = 0) {
        parent::__construct('Cuadrado', $lado);
    }

    public function __destruct() {
        // Destructor
    }

    public function calcularArea() {
        $l = $this->getLado1();
        return $l * $l;
    }

    public function calcularPerimetro() {
        return 4 * $this->getLado1();
    }

    public function __toString() {
        return "Cuadrado (lado: " . $this->getLado1() . ")";
    }
}
