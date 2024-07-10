<?php
        require_once 'converteMaiuscula.php';

        class Teste
        {
            public function teste()
            {
                $teste1 = new ConversorString();
                $resultado = $teste1 -> paraMaiusculas("ArRrOiZ CoM oVo");
                echo $resultado;
                echo "<br>";

                $teste1 = new ConversorString();
                $resultado = $teste1 -> paraMinusculas("PãO CoM BaTaTa");
                echo $resultado;
            }
        }
        $teste = new Teste();
        $teste -> teste();
?>