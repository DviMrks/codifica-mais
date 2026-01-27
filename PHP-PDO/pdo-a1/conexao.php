<?php

$host = 'localhost';
$dbname = 'sistema_login';
$user = 'root';
$pass = 'Dms170904/';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro" . $e->getMessage();
}