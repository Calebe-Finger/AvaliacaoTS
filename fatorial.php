<?php

class CalculadoraFatorial {
    public function calcular($numero) {
        if ($numero < 0) {
            throw new Exception("Número deve ser não-negativo");
        }
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}
?>