<?php

class Funcionario {

    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {

       $this->nome = $nome;
       $this->cargo = $cargo;
       $this->salario = $salario;

        echo "O nome do funcionario é: $nome" . PHP_EOL;
        echo "O cargo do $nome é: $cargo" . PHP_EOL;
        echo "O salário do $nome é: $salario R$" . PHP_EOL;
    }

    public function alterarCargo($novoCargo)
    {
        $this->cargo = $novoCargo;
        echo "O cargo foi alterado para: " . $novoCargo . PHP_EOL;
    }

    public function alterarSalario($novoSalario)
    {
        $this->salario = $novoSalario;

        if ($this->salario < 0){
           $this->salario = 0;
        }

        echo "O salário foi alterado para: " . $novoSalario . PHP_EOL;
    }

    public function exibirDetalhes()
    {
        echo "Detalhes do funcionário: " . PHP_EOL;
        echo "Nome: $this->nome" . PHP_EOL;
        echo "Cargo: $this->cargo" . PHP_EOL;
        echo "Salário: $this->salario" . PHP_EOL;
    }

}