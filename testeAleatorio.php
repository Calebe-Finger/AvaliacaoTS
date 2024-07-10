<?php
        require_once 'gerarAleatorio.php';

        class Teste
        {
            public function teste()
            {
                $teste1 = new GeradorNumeroAleatorio();
                $resultado = $teste1 -> gerar(68, 800);
                echo $resultado;
            }
        }
        $teste = new Teste();
        $teste -> teste();
?>