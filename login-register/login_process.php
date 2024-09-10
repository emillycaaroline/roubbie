<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Inclui o arquivo de conexão
    require_once '../includes/db_connection.php';  // Ajuste o caminho conforme necessário

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara os dados do formulário para verificação no banco de dados
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para verificar se o usuário existe
    $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = ?");
    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);

    if ($stmt->num_rows == 1) {
        $stmt->fetch();
        if (password_verify($senha, $hashed_password)) {
            // Login bem-sucedido, redireciona para a página inicial do usuário
            $_SESSION["email"] = $email;
            header("Location: pagina_restrita.php");
            exit();
        } else {
            // Senha incorreta
            echo "<script>alert('Senha incorreta.'); window.location.href = 'login.php';</script>";
        }
    } else {
        // Email não encontrado
        echo "<script>alert('Usuário não encontrado.'); window.location.href = 'login.php';</script>";
    }

    // Fecha a conexão
    $stmt->close();
    $conn->close();
} else {
    // Se o método de requisição não for POST, redireciona para o formulário de login
    header("Location: login.php");
    exit();
}
?>
<!-- # Script para processar o login de usuários -->
