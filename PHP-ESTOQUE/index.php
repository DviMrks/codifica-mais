<?php

    require "src/conexao.php";
    require "src/modelo/produto.php";
    require "src/repositorio/repositorio.php";

    $produtosRepositorio = new ProdutoRepositorio($pdo);
    $dadosProduto = $produtosRepositorio->opcoesProduto();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Mercado Medieval - Gestão de Estoque</title>

        <link rel="icon" href="css/icone-bau.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
    </head>
<body>

    <header>
        <h1 class="titulo">
            Mercado Medieval - Gestão de estoque
        </h1>
        <h2 class="subtitulo">
            Listagem
        </h2>
    </header>

    <main class="funcionalidades">
        <a class="botao-cadastrar" href="cadastrar-produto.php">Cadastrar produto</a>
        <table class = "tabela">
            <tr>
                <th>Icone</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Dano</th>
                <th>Preço</th>
                <th>Raridade</th>
                <th>Edição</th>
                <th>Exclusão</th>
            </tr>
            <?php foreach($dadosProduto as $produto){?>
            <tr>
                <td><img src="<?= $produto->getImagemDiretorio()?>"></td>
                <td><?= $produto->getNome();?></td>
                <td><?= $produto->getTipo();?></td>
                <td><?= $produto->getDano();?></td>
                <td><?= "🪙" . $produto->getPreco();?></td>
                <td><?= $produto->getRaridade();?></td>
                <td>
                    <a class="botao-editar" href="editar-produto.php?id=<?= $produto->getId() ?>">Editar</a>
                </td>
                <td>
                    <form action="excluir-produto.php" method="post">
                        <input type="hidden" name="id" value="<?= $produto->getId() ?>">
                        <input type="submit" class="botao-excluir" value="Excluir">
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>
    </main>
</body>



