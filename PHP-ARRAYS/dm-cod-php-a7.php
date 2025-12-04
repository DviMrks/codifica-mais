<?php

$itensComprados = ["salpicão", "farofa", "arroz", "feijao", "bebidas"];
$preçoDosItens = [400.00, 20.00, 15.00, 25.00, 150.00];

$totalParticipantes = readline("Digite o total de participantes: ");

if($totalParticipantes <= 1){
   echo "O churrasco foi cancelado, todo mundo furou!";
} else {
        $totalValores = 0;

        foreach ($preçoDosItens as $valores){
            $maiorValor = $preçoDosItens[0];
                if ($valores > $maiorValor){
                    $maiorValor = $valores;
                }
            $totalValores = $valores + $totalValores;
        }

    function Calculo($totalValores, $totalParticipantes){
        return $totalValores / $totalParticipantes;
    }

    echo "Cada um dos $totalParticipantes ira pagar: " . Calculo($totalValores, $totalParticipantes) . "R$". PHP_EOL;

    $indice = array_search($maiorValor, $preçoDosItens);
    $MaiorItem = $itensComprados[$indice];

    echo "O item mais caro do churrasco foi: $MaiorItem, custando: $maiorValor R$" . PHP_EOL;
}
