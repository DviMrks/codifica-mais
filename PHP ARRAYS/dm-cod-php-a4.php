<?php

echo "=============================================================================================";
echo PHP_EOL;
echo " Digite o valor final de um produto e o valor do desconto do mesmo, para obter o valor final." . PHP_EOL;
echo "=============================================================================================";
echo PHP_EOL;

$ValorOriginal = readline("Digite o valor original do produto (apenas numeros): ");
$PorcentagemDesconto = readline("Digite a porcentagem do desconto (apenas numeros): ");

function ValorFinal ($ValorOriginal, $PorcentagemDesconto){
    return $ValorOriginal - ($ValorOriginal * ($PorcentagemDesconto/100));
}

echo "Seu valor final é: " . ValorFinal($ValorOriginal, $PorcentagemDesconto);

