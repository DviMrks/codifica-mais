<?php

require_once __DIR__ . '/contaBancaria.php';

class ContaCorrente extends ContaBancaria 
{

    private const TaxaSaque = 0.03; // 3% de taxa
    private const TaxaTransferencia = 0.05;// 5% de taxa

    public function __construct(string $titular, float $saldo = 0)
    {
        parent::__construct($titular, $saldo);
        $this->numeroConta = self::gerarNumeroConta();
    }

    public static function gerarNumeroConta() : string
    {
        $numeroRand = rand(10000000, 99999999);
        $validador = rand(0,9);

        return "{$numeroRand}-{$validador}";
    }

    public function sacar($valor) 
    {
        $valor = $valor + ($valor*self::TaxaSaque);
        parent::sacar($valor);
    }

    public function transferirDinheiro($valor, $contaDestino) // SACAR E DEPOSITAR, 
    {
        $valorComTaxa = $valor + ($valor*self::TaxaTransferencia);
        parent::sacar($valorComTaxa);
        $contaDestino->depositar($valor);

    }
    
}
 