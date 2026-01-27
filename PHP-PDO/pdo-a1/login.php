<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Trazemos as ferramentas necessárias
require 'conexao.php';
require 'usuario.php'; 

// Inicia a sessão (Isso cria a "carteirinha" do usuário logado)
session_start();

$erro = '';

// Se o usuário clicou no botão "Entrar"...
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // 1. Buscamos o usuário no banco pelo email
    $usuarioEncontrado = Usuario::buscarPorEmail($pdo, $email);

    // 2. Verificamos duas coisas:
    //    a) Se o usuário existe ($usuarioEncontrado não é null)
    //    b) Se a senha bate (usando password_verify para checar o hash)
    if ($usuarioEncontrado && password_verify($senha, $usuarioEncontrado->senha())) {
        
        // SUCESSO! Guardamos o ID na sessão
        $_SESSION['usuario_id'] = $usuarioEncontrado->id();
        $_SESSION['usuario_nome'] = $usuarioEncontrado->nome();

        // Redireciona para a página principal (que vamos criar jaja)
        header('Location: home.php');
        exit;
    } else {
        $erro = "Email ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Acesse sua conta</h2>
    
    <?php if($erro): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
    
    <p>Ainda não tem conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
</body>
</html>