<?php

$NumeroParaTabuada = readline("Escolha um numero para exibir a sua tabuada de 1 ao 10: ");

for ($Multiplicador = 1; $Multiplicador <= 10; $Multiplicador++) {
    $Tabuada = $Multiplicador * $NumeroParaTabuada;
    echo "$NumeroParaTabuada X $Multiplicador = $Tabuada" . PHP_EOL;
}


