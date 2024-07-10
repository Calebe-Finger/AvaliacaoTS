<?php
        require_once 'primo.php';

        class Teste
        {
            public function teste()
            {
                $teste1 = new VerificadorNumeroPrimo();
                $resultado = $teste1 -> ehPrimo(7);

                if ($resultado == 1)
                {
                    echo "O número é primo!";
                }

                else
                {
                    echo "O número não é primo";
                }
            }
        }
        $teste = new Teste();
        $teste -> teste();
?>