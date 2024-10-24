<?php
session_start();

// Inclui o arquivo de conexão com o caminho correto
require_once '../includes/db_connection.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtém os dados do formulário
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = password_hash(trim($_POST["senha"]), PASSWORD_DEFAULT); // Criptografa a senha

    // Prepara a consulta para inserir o usuário
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    // Tenta executar a consulta
    if ($stmt->execute()) {
        // Cadastro bem-sucedido, armazena o nome na sessão
        $_SESSION['nome'] = $nome;
        header("Location: /roubbie/welcome.php"); // Redireciona para a página de boas-vindas
        exit();
    } else {
        // Erro ao cadastrar
        echo "<script>alert('Erro ao cadastrar.'); window.location.href = 'cadastro.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
