<?php

class ProdutoRepositorio
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    private function formarObjeto($dados)
    {
        return new Produto($dados['id'],
            $dados['nome'],
            $dados['tipo'],
            $dados['dano'],
            $dados['preco'],
            $dados['raridade'],
            $dados['descricao'],
            $dados['imagem']    
        );
    }

    public function opcoesProduto() : array
    {
        $sql1="SELECT * FROM produtos";
        $statement = $this->pdo->query($sql1);
        $produtosEstoque = $statement->fetchALL(PDO::FETCH_ASSOC);

        $dadosProduto = array_map(function($produto)
        {
            return new Produto
            (
                $produto['id'], 
                $produto['nome'], 
                $produto['tipo'], 
                $produto['dano'], 
                $produto['preco'], 
                $produto['raridade'], 
                $produto['descricao'], 
                $produto['imagem']
            );
        }, $produtosEstoque);

        return $dadosProduto;
    }

    public function deletar(int $id)
    {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
    }

    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO gestao_de_estoque.produtos (nome, tipo, dano, preco, raridade, descricao, imagem) VALUES (?,?,?,?,?,?,?)";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getNome());
        $statement->bindValue(2, $produto->getTipo());
        $statement->bindValue(3, $produto->getDano());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getRaridade());
        $statement->bindValue(6, $produto->getDescricao());
        $statement->bindValue(7, $produto->getImagem());
        $statement->execute();
    }

    public function atualizar(Produto $produto)
    {
        $sql = "UPDATE gestao_de_estoque.produtos SET nome = ?, tipo = ?, dano = ?, preco = ?, raridade = ?, descricao = ?, imagem = ? WHERE id = ?";

        $statement = $this->pdo->prepare($sql);
        
        $statement->bindValue(1, $produto->getNome());
        $statement->bindValue(2, $produto->getTipo());
        $statement->bindValue(3, $produto->getDano());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getRaridade());
        $statement->bindValue(6, $produto->getDescricao());
        $statement->bindValue(7, $produto->getImagem());
        $statement->bindValue(8, $produto->getId());
        $statement->execute();
    }


    public function buscar(int $id)
    {
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $dados= $statement->fetch(PDO::FETCH_ASSOC);

        return $this->formarObjeto($dados);
    }

}