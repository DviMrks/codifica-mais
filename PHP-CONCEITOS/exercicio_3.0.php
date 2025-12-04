<?php

echo "Digite dois valores inteiros para saber a soma dos valores impares entre eles. (O primeiro numero deverá ser menor que o segundo)" . PHP_EOL;

    $ValorA = readline("Digite o seu primeiro valor inteiro: ");
    $ValorB = readline("Digite o seu segundo valor inteiro: ");

while ($ValorA > $ValorB){
    echo "Seu primeiro valor é maior que o segundo, tente novamente" . PHP_EOL;
    $ValorA = readline("Digite o seu primeiro valor inteiro: ");
    $ValorB = readline("Digite o seu segundo valor inteiro: ");
}

$SomaContador = 0;

for ($Contador = $ValorA; $Contador <= $ValorB; $Contador++){
    if ($Contador%2 == 0) {
     continue;
    }
    echo $Contador . PHP_EOL;
    $SomaContador += $Contador;
}

echo "A soma dos valores impares entre $ValorA e $ValorB é $SomaContador";

