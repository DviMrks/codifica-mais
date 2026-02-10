<?php

require_once __DIR__ . '/contaBancaria.php';

class ContaPoupanca extends ContaBancaria 
{

    protected $porcentagemRendimento = 0.01;

    public function __construct(string $titular, float $saldo = 0)
    {
        parent::__construct($titular, $saldo);
        $this->numeroConta = self::gerarNumeroConta();
    }

    public static function gerarNumeroConta()
    {
        $numeroRand = rand(100000, 999999);
        $validador = rand(0,9);

        return "{$numeroRand}-{$validador}";
    }

    public function depositar($valor)
    {
        parent::depositar($valor);
    }

    public function getPorcentagemRendimento()
    {
        $this->porcentagemRendimento;
    }

    public function setPorcentagemRendimento($novoRendimento)
    {
        $novoRendimentoFormatado = 0;
        $novoRendimentoFormatado = $novoRendimento / 100;
        $this->porcentagemRendimento = $novoRendimentoFormatado;
    }

    public function aplicarRendimento()
    {
        $this->saldo = $this->saldo + ($this->saldo * $this->porcentagemRendimento);
    }

}
