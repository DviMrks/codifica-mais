<?php

    require "src/conexao.php";
    require "src/modelo/produto.php";
    require "src/repositorio/repositorio.php";

    $produtosRepositorio = new ProdutoRepositorio($pdo);
    $dadosProduto = $produtosRepositorio->opcoesProduto();

if (isset($_POST['cadastro'])){
    $produto = new Produto(null,
        $_POST['nome'],
        $_POST['tipo'],
        $_POST['dano'],
        $_POST['preco'],
        $_POST['raridade'],
        $_POST['descricao']
    );

    if (isset($_FILES['imagem']) && !empty($_FILES['imagem']['name'])){
        $produto->setImagem(uniqId() . $_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $produto->getImagemDiretorio());
   } else {
        $produto->setImagem('arma_default.png');
   }

    $produtoRepositorio = new ProdutoRepositorio($pdo);
    $produtoRepositorio->cadastrar($produto);

    header("Location: index.php");
}

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
        <link rel="stylesheet" href="css/cadastrar.css">
        <h1 class="titulo">
            <strong>
                Mercado Medieval - Gestão de estoque
            </strong>
        </h1>
        <h2 class="subtitulo">
            Cadastro
        </h2>
    </head>
<body>

    
    <form method="POST" enctype="multipart/form-data">

        <label for="nome">Digite o nome da arma:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome da arma"><br><br>

        <label for="tipo">Escolha o tipo da arma:</label><br>
        <select type="text" id="tipo" name="tipo">
            <option value="Curto-Alcance">Curto Alcance</option>
            <option value="Médio-Alcance">Médio Alcance</option>
            <option value="Longo-Alcance">Longo Alcance</option>
        </select><br><br>

        <label for="dano">Digite o dano da arma:</label><br>
        <input type="number" id="dano" name="dano" placeholder="Digite o dano da arma"><br><br>

        <label for="preco">Digite o preço da arma:</label><br>
        <input type="number" id="preco" name="preco" placeholder="Digite o preço da arma"><br><br>

        <label for="raridade">Escolha a raridade da arma:</label><br>
        <select type="text" id="raridade" name="raridade">
            <option value="Comum">Comum</option>
            <option value="Incomum">Incomum</option>
            <option value="Raro">Raro</option>
            <option value="Épico">Épico</option>
            <option value="Lendário">Lendário</option>
        </select><br><br>

        <label for="descricao">Escreva a descrição da arma:</label><br>
        <input type="text" id="descricao" name="descricao" placeholder="Digite a descrição da arma"><br><br>

        <label for="imagem">Envie uma imagem da arma</label>
        <input type="file" accept="image/*" id="imagem" name="imagem" placeholder="Envie uma imagem"> <br><br>

        <a class="link" href=https://www.pixilart.com/draw/16x16-6ec491154b5c687 target="_blank">Crie a sua Pixel-art 16x16 aqui!</a><br><br><br>

        <input name="cadastro" type="submit" class="botao-cadastrar" value="Cadastrar produto"/>

        <a href=index.php class="botao-voltar">Voltar</a>

    </form>

</body>
</html>