<?php

class CalculadoraRaizQuadrada {
    public function calcular($numero) {
        if ($numero < 0) {
            throw new Exception("Número deve ser não-negativo");
        }
        return sqrt($numero);
    }
}
?>