<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_roubbie";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
