<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_roubbie";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
<<<<<<< HEAD
=======

// Define o charset para a conexão
$conn->set_charset("utf8");
>>>>>>> 7743cbbce92a908d46b018080dc59613cc880e70
?>
