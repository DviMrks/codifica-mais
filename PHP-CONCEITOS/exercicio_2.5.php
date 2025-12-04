<?php

$NumeroInformado = readline("Digite um numero para saber se ele é impar ou par:" );

$RestoDaDivisão = $NumeroInformado % 2;

if ($RestoDaDivisão == 1) {
    echo "O seu numero é $NumeroInformado e ele é impar";
   } else {
        echo "O seu numero é $NumeroInformado e ele é par";
     }

