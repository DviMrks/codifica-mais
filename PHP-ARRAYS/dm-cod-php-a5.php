<?php

echo "=============================================================================================";
echo PHP_EOL;
echo "Calculadora de IMC (ÍNDICE DE MASSA CORPORAL)" . PHP_EOL;
echo "=============================================================================================";
echo PHP_EOL;

$Peso = readline("Digite o seu peso em Kg: ") . PHP_EOL;
$Altura = readline("Digite a sua altura: ") . PHP_EOL;

function CalculadoraIMC ($Peso, $Altura){
    return $Peso / ($Altura * $Altura);
}

echo "Seu IMC é igual a: " . CalculadoraIMC ($Peso, $Altura) . PHP_EOL;

if (CalculadoraIMC ($Peso, $Altura) < 18.5){
    echo "Sua Classificação IMC é de MAGREZA." . PHP_EOL;
}

if (( 18.5 <= CalculadoraIMC ($Peso, $Altura)) && (CalculadoraIMC ($Peso, $Altura) <= 24.9)){
    echo "Sua Classificação IMC é NORMAL." . PHP_EOL;
}

if (( 25 <= CalculadoraIMC ($Peso, $Altura)) && (CalculadoraIMC ($Peso, $Altura) <= 29.9)){
    echo "Sua Classificação IMC é de SOBREPESO." . PHP_EOL;
}

if (( 30 <= CalculadoraIMC ($Peso, $Altura)) && (CalculadoraIMC ($Peso, $Altura) <= 34.9)){
    echo "Sua Classificação IMC é de OBESIDADE GRAU I." . PHP_EOL;
}

if (( 35 <= CalculadoraIMC ($Peso, $Altura)) && (CalculadoraIMC ($Peso, $Altura) <= 39.9)){
    echo "Sua Classificação IMC é de OBESIDADE GRAU II." . PHP_EOL;
}

if (CalculadoraIMC ($Peso, $Altura) >= 40){
    echo "Sua Classificação IMC é de OBESIDADE GRAU III." . PHP_EOL;
}