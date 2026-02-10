<?php

    require "src/conexao.php";
    require "src/modelo/produto.php";
    require "src/repositorio/repositorio.php";

    $produtoRepositorio = new ProdutoRepositorio($pdo);
    $produtoRepositorio->deletar($_POST['id']);

    header("Location: index.php");

?>