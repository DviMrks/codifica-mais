<?php

class ContaBancaria {

    private int $numeroConta;
    private string $nomeTitular;
    private float $saldo;

    public function dadosConta($numeroConta, $nomeTitular, $saldo){

       $this->numeroConta = $numeroConta;
       $this->nomeTitular = $nomeTitular;
       $this->saldo = $saldo;

        echo "O número da conta é: $numeroConta" . PHP_EOL;
        echo "O nome do titular da conta é: $nomeTitular" . PHP_EOL;
        echo "O saldo da conta é de: $saldo R$" . PHP_EOL;

    }

    public function depositar(int $quantia) {
        $this->saldo += $quantia;
        echo "Deposito de $quantia R$ realizado com secesso!" . PHP_EOL;
    }

    public function sacar(int $quantia) {

        if ($quantia > $this->saldo){
            echo "Você não essa quantia para sacar!" . PHP_EOL;
        } else {
        $this->saldo -= $quantia;
        echo "Saque de $quantia R$ realizado com sucesso!" . PHP_EOL;
        }
    }

    public function exibirSaldo(){
        if ($this->saldo < 0){
            $this->saldo = 0;
        }

        echo "O saldo atual é de $this->saldo R$" . PHP_EOL;
    }
}


