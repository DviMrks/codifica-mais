<?php

//INICIO ARRAYS:

$estoque = [];

$estoque [0] = [
    "codigo" => 0,
    "nome" => "Tênis",
    "tamanho" => "P",
    "cor" => "Branco",
    "quantidade" => 10,
];

$estoque [1] = [
    "codigo" => 1,
    "nome" => "Bermuda",
    "tamanho" => "M",
    "cor" => "Marrom",
    "quantidade" => 5,
];

$estoque [2] = [
    "codigo" => 2,
    "nome" => "Boné",
    "tamanho" => "PP",
    "cor" => "Bege",
    "quantidade" => 3,
];

$estoque [3] = [
    "codigo" => 3,
    "nome" => "Camisa",
    "tamanho" => "GG",
    "cor" => "Azul",
    "quantidade" => 13,
];

$codigo = 3;
//FIM ARRAYS:

//INICIO ESCOLHA:
$escolha = 0;

while ($escolha != 5){

echo 
"=========================================================" . PHP_EOL .
    "(1) Adicionar um produto" . PHP_EOL .
    "(2) Vender um produto" . PHP_EOL .
    "(3) Verificar o estoque" . PHP_EOL .
    "(4) Listar o estoque" . PHP_EOL .
    "(5) Sair" . PHP_EOL . 
"=========================================================" . PHP_EOL;

$escolha = readline("Digite o numero da opção escolhida: ");

exibirMenu($escolha, $estoque, $codigo, $quantidade);
};
//FIM ESCOLHA:

//INICIO FUNÇÕES:
function adicionarProduto(&$estoque, &$codigo){

    $nomeProduto = readline("Digite o nome do novo produto: "). PHP_EOL;
    $tamanho = readline("Digite o tamanho do novo produto: ") . PHP_EOL;
    $cor = readline("Digite a cor do novo produto: ") . PHP_EOL;
    $quantidade = readline("Digite a quantidade do novo produto: ") .PHP_EOL;

    if ((int)$quantidade <= 0){
        $quantidade = readline("Quantidade inválida, digite a quantidade do novo produto novamente: ") .PHP_EOL;
    }

    $estoque[$codigo] = [
        "codigo" => $codigo = $codigo + 1,
        "nome" => $nomeProduto,
        "cor" => $cor,
        "tamanho" => $tamanho,
        "quantidade" => $quantidade,
        ];

    echo "O item: ". $nomeProduto, "(de código " . $codigo . ") foi adicionado ao estoque." . PHP_EOL;
    return $estoque;

};

function venderProduto(&$estoque){

    $codigoProcuradoVenda = (int)readline("Digite o código do produto para realizar sua venda: "). PHP_EOL;
    $quantidadeRetirada = readline("Digite a quantidade a ser vendida desse produto: "). PHP_EOL;

    foreach ($estoque as &$produto){
        if ($produto["codigo"] == $codigoProcuradoVenda){
            $produto["quantidade"] -= $quantidadeRetirada;
            echo "" . PHP_EOL ." Foi removido: ", $quantidadeRetirada . " unidade(s) do produto: ", $produto["nome"], ". Sobrando apenas: ", $produto["quantidade"] . " unidades.". PHP_EOL . "" . PHP_EOL;
 
        } if ($produto["quantidade"] <= 0){
            echo "O produto: " . $produto["nome"] . " foi removido, pois está zerado." . PHP_EOL;
            unset($estoque[$produto["codigo"]]);
        };
    };
    return $estoque;
};

function verificarEstoque(&$estoque){

    $codigoProcurado = readline("Digite o código do produto para verificar sua disponibilidade: "). PHP_EOL;

    foreach ($estoque as $produto){
        if ($codigoProcurado == $produto["codigo"]){
            echo "" . PHP_EOL . "temos um total de: " . $produto["quantidade"] . " unidades de: " . $produto["nome"] . " disponiveis no estoque" .  "" . PHP_EOL . PHP_EOL;
        };
    };
    return $estoque;
};

function listarEstoque(&$estoque){

    foreach ($estoque as $produto){
            echo "" . PHP_EOL;
            echo "Código: " . $produto["codigo"] . PHP_EOL;
            echo "Nome: " . $produto["nome"] . PHP_EOL;
            echo "Tamanho: " . $produto["tamanho"] . PHP_EOL;
            echo "Cor: " . $produto["cor"] . PHP_EOL;
            echo "Quantidade: " . $produto["quantidade"] . PHP_EOL;
            echo "" . PHP_EOL;
    };
};
//FIM FUNÇÕES:

//INICIO MENU:
function exibirMenu($escolha, &$estoque, &$codigo, &$quantidade){
    switch($escolha){
        case 1:
            adicionarProduto($estoque, $codigo);
            break;
        case 2:
            venderProduto($estoque);
            break;
        case 3:
            verificarEstoque($estoque);
            break;
        case 4: 
            listarEstoque($estoque);
            break;
    };
};

//FIM MENU:


    







