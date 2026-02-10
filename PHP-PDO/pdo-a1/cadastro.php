<?php
require 'conexao.php';
require 'usuario.php';

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // 2. Cria o objeto Usuário
    // Lembre da ordem certa: Nome, Email, Senha.
    // O ID e Data o PHP define como NULL/Automático.
    $usuario = new Usuario($nome, $email, $senha);

    try {
        // 3. Tenta salvar no banco
        if ($usuario->cadastrar($pdo)) {
            // Se der certo, redireciona pro login ou mostra mensagem
            header('Location: login.php');
            exit;
        } else {
            $erro = "Erro ao cadastrar usuário.";
        }
    } catch (PDOException $e) {
        // Se der erro (tipo email duplicado), cai aqui
        $erro = "Erro no banco de dados: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
</head>
<body>
    <h2>Crie sua conta</h2>

    <?php if($erro): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Nome:</label>
        <input type="text" name="nome" required placeholder="Seu nome completo"><br><br>

        <label>Email:</label>
        <input type="email" name="email" required placeholder="seu@email.com"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required placeholder="Crie uma senha forte"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <p>Já tem conta? <a href="login.php">Fazer Login</a></p>
</body>
</html>