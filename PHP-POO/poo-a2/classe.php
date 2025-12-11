<?php

class Produto {

    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade)
    {

       $this->nome = $nome;
       $this->preco = $preco;
       $this->quantidade = $quantidade;

        echo "O nome do seu produto é: $nome" . PHP_EOL;
        echo "O preço do seu produto é: $preco R$" . PHP_EOL;
        echo "A quantidade do seu produto é: $quantidade" . PHP_EOL;
    }

    public function alterarPreco($novoPreco)
    {
        $this->preco = $novoPreco;
        echo "Preço do produto alterado para: " . $novoPreco . PHP_EOL;
    }

    public function alterarQuantidade($novaQuantidade)
    {
        $this->quantidade = $novaQuantidade;

        if ($this->quantidade < 0){
           $this->quantidade = 0;
        }

        echo "A quantidade é de $this->quantidade" . PHP_EOL;
    }

    public function exibirDetalhes()
    {
        echo "Detalhes do produto " . PHP_EOL;
        echo "Nome: $this->nome" . PHP_EOL;
        echo "Preço: $this->preco" . PHP_EOL;
        echo "Quantidade: $this->quantidade" . PHP_EOL;
    }

}


