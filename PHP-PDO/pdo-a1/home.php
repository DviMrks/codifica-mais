<?php
// 1. Inicia a sessão para ver quem está tentando entrar
session_start();

// 2. O SEGURANÇA:
// Se não tiver o ID do usuário salvo na sessão, chuta ele de volta pro login.
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Principal</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h1>
    
    <p>Parabéns! Você logou com sucesso e está na área restrita.</p>

    <a href="logout.php">Sair do Sistema</a>
</body>
</html>