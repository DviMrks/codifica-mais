<?php

require_once __DIR__ . "/classe.php";

echo "============================== ABERTURA DE CONTA ============================" . PHP_EOL;
$abrirConta = (int) readline("Deseja abrir uma conta? (Digite o numero da sua resposta) 1 - SIM, 2 - NÃO: ") . PHP_EOL ;


while ($abrirConta != 1 and $abrirConta != 2) {

    echo "Digite um valor válido! (1 - SIM ou 2 - NÃO) " . PHP_EOL;
    $abrirConta = (int) readline("Deseja abrir uma conta? (Digite o numero da sua resposta) ") . PHP_EOL ;

};

switch($abrirConta) {

    case 1:

        echo "========================= INICIANDO ABERTURA DE CONTA =======================" . PHP_EOL;

        $cliente = new ContaBancaria();

        $numeroConta = readline("Qual o numero da sua conta? (de 0 a 100) ") . PHP_EOL;
        $nomeTitular = readline("Qual o seu nome? (Digite seu nome completo) ") . PHP_EOL;
        $saldo = readline("Qual o seu saldo atual? (Digite apenas números) ") . PHP_EOL;

        while ($numeroConta < 0 or $numeroConta > 100){

            $numeroConta = readline("O número da sua conta tem que estar entre 0 e 100! Digite novamente: ");

        }

        while ($saldo < 0){

            $saldo = readline("O seu saldo deve ser numérico e não negativo! Digite novamente: ") . PHP_EOL;

        }

        $cliente->dadosConta($numeroConta, $nomeTitular, $saldo);

        $contaCriada = true;

        echo "Sua conta foi criada!" . PHP_EOL;

        break;

    case 2:
        
        echo "Abertura de conta CANCELADA obrigado!" . PHP_EOL;
        break;

};

if ($abrirConta == 2){
    exit;
}

$opcaoEscolhida = 0;

while ($opcaoEscolhida != 4) {

    echo "=============================================================================" . PHP_EOL;
    echo "Qual operação deseja realizar?" . PHP_EOL;

    $opcaoEscolhida = readline(
        PHP_EOL .
        "1 - Depositar uma quantia" . PHP_EOL .
        "2 - Sacar uma quantia" . PHP_EOL .
        "3 - Exibir saldo" . PHP_EOL .
        "4 - Sair" . PHP_EOL .
        PHP_EOL
    );
    echo "=============================================================================" . PHP_EOL;

    switch($opcaoEscolhida) {

        case 1:
            
            $quantia = readline ("Digite a quantia que será depositada: ") . PHP_EOL;
            $cliente->depositar($quantia);

            break;
            
        case 2:

            $quantia = readline("Digite a quantia que será sacada: ") . PHP_EOL;
            $cliente->sacar($quantia);

            break;
        case 3:

            $cliente->exibirSaldo();

            break;
    }
}

echo "Operação encerrada!";
exit();
