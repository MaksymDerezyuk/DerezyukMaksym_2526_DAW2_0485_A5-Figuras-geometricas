<?php
require_once __DIR__ . '/FiguraGeometrica.php';

class Circulo extends FiguraGeometrica {
    public function __construct($radio = 0) {
        parent::__construct('Circulo', $radio);
    }

    public function __destruct() {
    }

    public function calcularArea() {
        $r = $this->getLado1();
        return pi() * $r * $r;
    }

    public function calcularPerimetro() {
        $r = $this->getLado1();
        return 2 * pi() * $r;
    }

    public function __toString() {
        return "Círculo (radio: " . $this->getLado1() . ")";
    }
}
