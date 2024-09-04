<?php
// db_connection.php

// Definições de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_roubbie";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// // Verifica a conexão
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>
 
<!--  include 'db_connection.php'; -->