<?php

class GeradorNumeroAleatorio {
    public function gerar($min, $max) {
        if ($min > $max) {
            throw new Exception("O valor mínimo deve ser menor ou igual ao valor máximo");
        }
        return rand($min, $max);
    }
}
?>