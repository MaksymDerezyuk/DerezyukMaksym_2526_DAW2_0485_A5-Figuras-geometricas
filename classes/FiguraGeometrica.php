<?php

class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura = '', $lado1 = 0) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct() {
    }

    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function setTipoFigura($tipo) {
        $this->tipoFigura = $tipo;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function setLado1($lado) {
        $this->lado1 = $lado;
    }

    public function calcularArea() {
        return 0;
    }

    public function __toString() {
        return "Figura: " . $this->tipoFigura;
    }
}
