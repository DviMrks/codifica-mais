<?php

require_once __DIR__ . '/contaBancaria.php';
require_once __DIR__ . '/contaCorrente.php';
require_once __DIR__ . '/contaPoupanca.php';

echo "===================== ABERTURA DE CONTA BANCÁRIA =====================" . PHP_EOL;

echo "A Conta Corrente e a Conta Poupança serão criadas!" . PHP_EOL;
echo "Digite o nome do títular e o saldo inicial de cada uma das contas". PHP_EOL;

echo "======================================================================" . PHP_EOL;

$titularCorrente = readline ("Digite o nome do títular da Conta Corrente: ") . PHP_EOL;
$saldoCorrente = readline("Digite o saldo inicial da Conta Corrente: (somente  numeros positivos) ") . PHP_EOL;

$titularPoupanca = readline ("Digite o nome do títular da conta Poupança: ") . PHP_EOL;
$saldoPoupanca = readline("Digite o saldo inicial da conta Poupança: (somente  numeros positivos) ") . PHP_EOL;

$contaCorrente = new ContaCorrente($titularCorrente, $saldoCorrente);
$contaPoupanca = new ContaPoupanca($titularPoupanca, $saldoPoupanca);

$contaCorrente->exibirSaldo();
$contaPoupanca->exibirSaldo();

echo "======================================================================" . PHP_EOL;

echo "Selecione qual das contas deseja acessar: (Digite um numero válido!) " . PHP_EOL;

$contaEscolhida = 0;

while ($contaEscolhida != 5) 
{
    $contaEscolhida = readline
    (
       "1 - Acessar Conta Corrente" . PHP_EOL .
       "2 - Acessar Conta Poupança" . PHP_EOL . 
       "5 - Sair" . PHP_EOL . 
       "======================================================================" . PHP_EOL
    );

    switch($contaEscolhida)
    {
        case 1 :// CONTA CORRENTE

            $opcaoContaCorrente = readline
            (
                "1 - Depositar valor na conta" . PHP_EOL .
                "2 - Sacar valor da conta (Taxa de 3%)" . PHP_EOL .
                "3 - Exibir Saldo" . PHP_EOL .
                "4 - Transferir dinheiro para Conta Poupança (Taxa de 5%)" . PHP_EOL .
                "5 - Voltar" . PHP_EOL .
                "==============================================================" . PHP_EOL
            );

            switch($opcaoContaCorrente) 
            {
                case 1 :

                    $valor = readline ("Digite o valor que será depositado: ") . PHP_EOL;
                    $contaCorrente->depositar($valor);
                    break;

                case 2 :

                    $valor = readline ("Digite o valor que será sacado: ") . PHP_EOL;
                    $contaCorrente->sacar($valor);
                    break;

                case 3 :

                    $contaCorrente->exibirSaldo();
                    break;

                case 4 :

                    $valor = readline ("Digite o valor que será transferido: ") . PHP_EOL;
                    $contaCorrente->transferirDinheiro($valor, $contaPoupanca);
                    break;
            }

        break;

        case 2 : // CONTA POUPANÇA

            $opcaoContaPoupanca = readline
            (
                "1 - Sacar valor da Conta" . PHP_EOL .
                "2 - Alterar rendimento atual. Rendimento atual de " . $contaPoupanca->getPorcentagemRendimento() . PHP_EOL .
                "3 - Exibir Saldo" . PHP_EOL .
                "4 - Aplicar rendimento atual Rendimento atual de ". $contaPoupanca->getPorcentagemRendimento() . PHP_EOL .
                "5 - Voltar". PHP_EOL .
                "==============================================================" . PHP_EOL
            );
             
            switch($opcaoContaPoupanca) 
            {
                case 1 :

                    $valor = readline ("Digite o valor que será sacado: ") . PHP_EOL;
                    $contaPoupanca->sacar($valor);
                    break;

                case 2 :

                    $novoRendimento = readline("Digite o valor do novo rendimento: (em porcentagem)") . PHP_EOL;
                    $contaPoupanca->setPorcentagemRendimento($novoRendimento);
                    break;

                case 3 :

                    $contaPoupanca->exibirSaldo();
                    break;

                case 4 :

                    $contaPoupanca->aplicarRendimento();
                    break;

            }

        break;
    }
}


