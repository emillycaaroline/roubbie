<?php
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root";        // Nome de usuário do banco de dados
$password = "";            // Senha do banco de dados
$dbname = "bd_roubbie";   // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error); // Mensagem de erro em caso de falha
}

// Define o charset para a conexão
$conn->set_charset("utf8mb4");// Define o charset para UTF-8
?>
