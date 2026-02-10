<?php
session_start();   // Pega a sessão atual
session_destroy(); // Destrói ela (rasga a carteirinha)
header('Location: login.php'); // Manda de volta pra tela de login
exit;