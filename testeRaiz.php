<?php
        require_once 'raizquadrada.php';

        class Teste
        {
            public function teste()
            {
                $teste1 = new CalculadoraRaizQuadrada();
                $resultado = $teste1 -> calcular(9);
                echo "A raiz é: " . $resultado;
            }
        }
        $teste = new Teste();
        $teste -> teste();
?>