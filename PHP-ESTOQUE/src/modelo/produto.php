<?php

class Produto
{
    private ?int $id;
    private string $nome;
    private string $tipo;
    private int $dano;
    private int $preco;
    private string $raridade;
    private string $descricao;
    private ?string $imagem;

    public function __construct(?int $id, string $nome, string $tipo, int $dano, int $preco, string $raridade, string $descricao, ?string $imagem = "arma_default.png")
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->dano = $dano;
        $this->preco = $preco;
        $this->raridade = $raridade;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
    }

    public function getId():?int
    {
        return $this->id;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getItemTabela():string
    {
        return $this->imagem;
        return $this->nome;
        return $this->tipo;
        return $this->dano;
        return $this->preco;
        return $this->raridade;
    }

    public function getTipo():string
    {
        return $this->tipo;
    }

    public function getDano():int
    {
        return $this->dano;
    }

    public function getPreco():int
    {
        return $this->preco;
    }

    public function getRaridade():string
    {
        return $this->raridade;
    }

    public function getDescricao():string
    {
        return $this->descricao;
    }

    public function getImagem():?string 
    {
        return $this->imagem;
    }
    
    public function setImagem(string $imagem): void 
    {
        $this->imagem = $imagem;
    }

    public function getImagemDiretorio(): string
    {
        return "img/".$this->imagem;

    }
}



