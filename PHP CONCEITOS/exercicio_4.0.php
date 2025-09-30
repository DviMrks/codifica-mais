<?php

echo "Digite uma lista de numeros para saber qual é o maior e o menor numero entre eles: (Um numero por vez)" . PHP_EOL;

(int)$ListaNumerica = readline("(Digite -1 quando finalizar a lista). Digite seu numero: ");

$MaiorNumero = $ListaNumerica;
$MenorNumero = $ListaNumerica;

While ($ListaNumerica != -1){
    $ListaNumerica = readline("(Digite -1 quando finalizar a lista). Digite seu numero: ");

    if ($ListaNumerica == -1){
        continue;
    }

    if ($ListaNumerica > $MaiorNumero){
        $MaiorNumero = $ListaNumerica;
    }

    if ($ListaNumerica < $MenorNumero){
        $MenorNumero = $ListaNumerica;
    }
}

echo "O maior numero digitado foi: $MaiorNumero" . PHP_EOL;
echo "O menor numero digitado foi: $MenorNumero" . PHP_EOL;








