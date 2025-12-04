<?php

$ValorTotal = readline("Digite o valor total da conta: ");
$PorcentagemGorgeta = readline("Digite quantos porcento de gorgeta você vai oferecer (apenas o numero): ");

$CalculoGorgeta = ($PorcentagemGorgeta / 100) * $ValorTotal;

$ValorTotalAPagar = $CalculoGorgeta + $ValorTotal;

echo "Valor da conta: R$ $ValorTotal" . PHP_EOL;
echo "Porcentagem da gorgeta: $PorcentagemGorgeta%" . PHP_EOL;
echo "Valor da gorgeta: R$ $CalculoGorgeta" . PHP_EOL;
echo "Valor total a ser pago: R$ $ValorTotalAPagar" . PHP_EOL;
