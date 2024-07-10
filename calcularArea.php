<?php

class CalculadoraArea {
    public function areaQuadrado($lado) {
        return $lado * $lado;
    }

    public function areaRetangulo($largura, $altura) {
        return $largura * $altura;
    }

    public function areaCirculo($raio) {
        return pi() * $raio * $raio;
    }
}
?>