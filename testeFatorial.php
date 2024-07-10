<?php
        require_once 'fatorial.php';

        class Teste
        {
            public function teste()
            {
                $teste1 = new CalculadoraFatorial();
                $resultado = $teste1 -> calcular(10);
                echo $resultado;

            }
        }
        $teste = new Teste();
        $teste -> teste();
?>