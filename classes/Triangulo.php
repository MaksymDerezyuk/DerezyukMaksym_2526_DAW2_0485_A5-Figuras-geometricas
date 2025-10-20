<?php
require_once __DIR__ . '/FiguraGeometrica.php';

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

    // // public function calcularArea() {
    //     $a = $this->getLado1();
    //     $b = $this->lado2;
    //     $c = $this->lado3;
    //     $s = ($a + $b + $c) / 2.0;
    //     $area = 0;
    //     if ($s > $a && $s > $b && $s > $c) {
    //         $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    //     }
    //     return $area;
    // }

    // public function calcularPerimetro() {
    //     return $this->getLado1() + $this->lado2 + $this->lado3;
    // }

    public function __toString() {
        return "Triángulo (lados: " . $this->getLado1() . ", " . $this->lado2 . ", " . $this->lado3 . ")";
    }
}

class TrianguloEquilatero extends Triangulo {
    public function __construct($lado) {
        parent::__construct($lado, $lado, $lado);
        $this->setTipoFigura('Triángulo Equilátero');
    }

    public function calcularArea() {
        $lado = $this->getLado1();
        return (sqrt(3) / 4) * pow($lado, 2);
    }

    public function calcularPerimetro() {
        return 3 * $this->getLado1();
    }

    public function __toString() {
        return "Triángulo Equilátero (lado: " . $this->getLado1() . "," . " área: " . $this->calcularArea() . ", perímetro: " . $this->calcularPerimetro() . ")";
    }
}

class TrianguloIsoceles extends Triangulo {
    public function __construct($ladoIgual, $base) {
        parent::__construct($ladoIgual, $ladoIgual, $base);
        $this->setTipoFigura('Triángulo Isósceles');
    }

    public function calcularArea() {
        $ladoIgual = $this->getLado1();
        $base = $this->getLado3();
        return $ladoIgual * sqrt(pow($ladoIgual, 2) - (pow($base, 2) / 4)) / 2;
    }

    public function calcularPerimetro() {
        $ladoIgual = $this->getLado1();
        $base = $this->getLado3();
        return (2 * $ladoIgual) + $base;
    }

    public function __toString() {
        $ladoIgual = $this->getLado1();
        $base = $this->getLado3();
        return "Triángulo Isósceles (lados: " . $ladoIgual . ", " . $ladoIgual . ", " . $base . "," . " área: " . $this->calcularArea() . ", perímetro: " . $this->calcularPerimetro() . ")";
    }
}

class TrianguloEscaleno extends Triangulo {
    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct($lado1, $lado2, $lado3);
        $this->setTipoFigura('Triángulo Escaleno');
    }

    public function calcularArea() {
        $a = $this->getLado1();
        $b = $this->getLado2();
        $c = $this->getLado3();
        $s = ($a + $b + $c) / 2.0;
        $area = 0;
        if ($s > $a && $s > $b && $s > $c) {
            $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        }
        return $area;
    } 
    public function calcularPerimetro() {
        return $this->getLado1() + $this->getLado2() + $this->getLado3();
    }
    public function __toString() {
        return "Triángulo Escaleno (lados: " . $this->getLado1() . ", " . $this->getLado2() . ", " . $this->getLado3() . "," . " área: " . $this->calcularArea() . ", perímetro: " . $this->calcularPerimetro() . ")";
    }
}
