<?php

require_once __DIR__ . "/classe.php";

echo "========================= CADASTRO DE NOVO PRODUTO =======================" . PHP_EOL;

$nome = readline("Digite o nome do seu produto: ") . PHP_EOL;
$preco = readline("Digite o preço do seu produto: ") . PHP_EOL;
$quantidade = readline("Digite a quantidade desse produto: ") . PHP_EOL;

if ($quantidade < 0)
{
    $quantidade = 0;
    echo "Quantidade negativa! Quantidade definida como: " . $quantidade . PHP_EOL;
}

$produto = new Produto($nome, $preco, $quantidade);

echo "Produto cadastrado!" . PHP_EOL;

$opcaoEscolhida = 0;

while ($opcaoEscolhida != 4) 
{
    echo "=============================================================================" . PHP_EOL;
    echo "1 - Alterar preço" . PHP_EOL;
    echo "2 - Alterar quantidade" . PHP_EOL;
    echo "3 - Exibir detalhes" . PHP_EOL;
    echo "4 - Sair" . PHP_EOL;
    echo "=============================================================================" . PHP_EOL;

    $opcaoEscolhida = readline ("Qual operação deseja realizar?"); 

    switch($opcaoEscolhida) 
    {

        case 1: //ALTERAR PREÇO
        
        $novoPreco = readline("Digite o valor do novo preço: ") . PHP_EOL;
        $produto->alterarPreco($novoPreco);
        echo "Preço alterado!" . PHP_EOL;
        break;
        
        case 2: //ALTERAR QUANTIDADE

        $novaQuantidade = readline("Digite a nova quantidade do produto: ") . PHP_EOL;
        $produto->alterarQuantidade($novaQuantidade);
        echo "Quantidade alterada!" . PHP_EOL;
        break;

        case 3: //EXIBIR DETALHES

        $produto->exibirDetalhes();
        break;

        case 4: //SAIR

        die();
        break;    
    }
}




