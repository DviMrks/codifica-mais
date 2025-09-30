<?php

echo "Informe a largura e altura do seu retângulo (em metros) para saber a sua área e seu perímetro" . PHP_EOL;

$Largura = (int) readline("Digite a largura do retângulo: ");
$Altura = (int) readline("Digite a altura do retângulo: ");

$Area = $Largura * $Altura; 
$Perimetro = 2 * ($Largura + $Altura);

echo "Largura: $Largura metros" . PHP_EOL;
echo "Altura: $Altura metros" . PHP_EOL;
echo "Área: $Area m²" . PHP_EOL;
echo "Perímetro: $Perimetro metros" . PHP_EOL;



