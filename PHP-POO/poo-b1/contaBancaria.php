<?php

class ContaBancaria {

    protected string $numeroConta;
    protected string $titular;
    protected float $saldo;

    public function __construct(string $titular, $saldo = 0)
    {
       $this->titular = $titular;
       $this->saldo = $saldo;

       if($saldo < 0){
          $this->saldo = 0;
          echo "O saldo inicial da conta foi menor que 0, saldo inicial definido como 0" . PHP_EOL;
       }
    }

    public function getNumeroConta() : string
    {
        return $this->numeroConta;
    }

    public function getTitular() : string
    {
        return $this->titular;
    }

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    public function depositar($valor) 
    {
        if($valor < 0){
            $valor = 0;
            echo "O valor a ser depositado é menor que 0, valor de deposito definido como 0" . PHP_EOL;
            $this->saldo += $valor;
        } else {
            $this->saldo += $valor;
            echo "Valor de: $valor R$ foi depositado!" . PHP_EOL;
        }
    }

    public function sacar($valor)
    {
        if($valor < 0) {
            $valor = 0;
            echo "O valor a ser sacado é menor que 0, valor de saque definido como 0" . PHP_EOL;
            $this->saldo -= $valor;
        } else {
            $this->saldo -= $valor;
            echo "Valor de: $valor R$ foi sacado!" . PHP_EOL;
        }
    }

    public function transferirDinheiro($valor, $contaDestino)
    {
        $this->sacar($valor);
        $contaDestino->depositar($valor);

        echo "Valor de: $valor R$ foi transferido para conta poupança." . PHP_EOL;
    }

    public function exibirSaldo()
    {
        if(strlen($this->numeroConta) == 10) {
            echo "O saldo da conta Corrente {$this->numeroConta}, do titular {$this->titular}é: {$this->saldo} R$" . PHP_EOL;
        }

        if(strlen($this->numeroConta) == 8) {
            echo "O saldo da conta Poupança {$this->numeroConta}, do titular {$this->titular}é: {$this->saldo} R$" . PHP_EOL;
        }

    }

};