<?php

require_once __DIR__ . "/classe.php";

echo "========================= CADASTRO DE NOVO FUNCIONÁRIO =======================" . PHP_EOL;

$nome = readline("Digite o nome do funcionário: ") . PHP_EOL;
$cargo = readline("Digite o cargo do funcionário: ") . PHP_EOL;
$salario = readline("Digite o salário do funcionário: ") . PHP_EOL;

$funcionario = new Funcionario($nome, $cargo, $salario);

echo "Funcionário cadastrado!" . PHP_EOL;

$opcaoEscolhida = 0;

while ($opcaoEscolhida != 4) 
{
    echo "=============================================================================" . PHP_EOL;
    echo "1 - Alterar cargo" . PHP_EOL;
    echo "2 - Alterar salário" . PHP_EOL;
    echo "3 - Exibir detalhes" . PHP_EOL;
    echo "4 - Sair" . PHP_EOL;
    echo "=============================================================================" . PHP_EOL;

    $opcaoEscolhida = readline ("Qual operação deseja realizar?"); 

    switch($opcaoEscolhida) 
    {

        case 1: //ALTERAR CARGO
        
        $novoCargo = readline("Digite o novo cargo do funcionário: ") . PHP_EOL;
        $funcionario->alterarCargo($novoCargo);
        echo "Cargo alterado!" . PHP_EOL;
        break;
        
        case 2: //ALTERAR SALÁRIO

        $novoSalario = readline("Digite o novo salário do funcionário: ") . PHP_EOL;
        $funcionario->alterarSalario($novoSalario);
        echo "Salário alterado!" . PHP_EOL;
        break;

        case 3: //EXIBIR DETALHES

        $funcionario->exibirDetalhes();
        break;

        case 4: //SAIR

        die();
        break;    
    }
}