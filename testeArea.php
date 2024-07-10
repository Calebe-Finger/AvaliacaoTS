<?php
        require_once 'calcularArea.php';

        class Teste
        {
            public function teste()
            {
                $teste1 = new CalculadoraArea();
                $resultado = $teste1 -> areaQuadrado(8);
                echo "A Área do quadrado é de: " . $resultado;

                $teste1 = new CalculadoraArea();
                $resultado = $teste1 -> areaRetangulo(10, 4);
                echo "<br> A Área do retangulo é de: " . $resultado;
              
                $teste1 = new CalculadoraArea();
                $resultado = $teste1 -> areaCirculo(3);
                echo "<br> A Área do cículo é de: " . $resultado;   
            }
        }
        $teste = new Teste();
        $teste -> teste();
?>