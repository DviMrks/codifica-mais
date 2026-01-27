<?php

require 'usuario.php';
require 'conexao.php';
require_once 'vendor/autoload.php';

$nome = readline("Digite o seu nome: ");
$email = readline("Digite o seu email: ");
$senha = readline("Digite sua senha: ");

$usuario = new Usuario($nome, $email, $senha);

if ($usuario->cadastrar($pdo)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Deu erro ao cadastrar.";
}