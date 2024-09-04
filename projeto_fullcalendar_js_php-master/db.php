<?php
$host = 'localhost'; // Ou o IP do seu servidor de banco de dados
$dbname = 'roubbie_bd'; // Nome do seu banco de dados
$user = 'root'; // Seu usuário do banco de dados
$pass = ''; // Sua senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
}
?>
