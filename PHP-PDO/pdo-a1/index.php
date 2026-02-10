<?php
session_start();
require_once 'vendor/autoload.php';

// Se existir uma sessão de usuário, vai para a Home
if (isset($_SESSION['usuario_id'])) {
    header('Location: home.php');
} else {
    // Se não, vai para o Login
    header('Location: login.php');
}
exit;