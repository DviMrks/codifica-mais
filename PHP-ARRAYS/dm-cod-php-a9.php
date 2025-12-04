<?php

$estoque = [ 
["Bermuda", 59.9, 6], // Produto 1 
["Camisa", 89.9, 5], // Produto 2 
["Sapato", 179.9, 10], // Produto 3 
["Calça", 99.9, 7]  // Produto 4 
];

$soma = 0;

foreach ($estoque as $item){
    $multiplicação = $item[1] * $item[2];
    $soma += $multiplicação;
}

echo "O valor total que a loja tem de estoque é: " . $soma . " R$";

