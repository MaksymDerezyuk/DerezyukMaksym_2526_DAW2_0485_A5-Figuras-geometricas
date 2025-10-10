<?php
require_once '/FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    public function __construct($lado1 = 0, $lado2 = 0, $lado3 = 0) {
        parent::__construct('Triangulo', $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function __destruct() {

    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado) {
        $this->lado2 = $lado;
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function setLado3($lado) {
        $this->lado3 = $lado;
    }

    public function calcularArea() {
        $a = $this->getLado1();
        $b = $this->lado2;
        $c = $this->lado3;
        $s = ($a + $b + $c) / 2.0;
        $area = 0;
        if ($s > $a && $s > $b && $s > $c) {
            $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        }
        return $area;
    }

    public function calcularPerimetro() {
        return $this->getLado1() + $this->lado2 + $this->lado3;
    }

    public function __toString() {
        return "Triángulo (lados: " . $this->getLado1() . ", " . $this->lado2 . ", " . $this->lado3 . ")";
    }
}
