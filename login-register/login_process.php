<?php
session_start(); // Inicia a sessão

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Inclui o arquivo de conexão com o caminho correto
    require_once '../includes/db_connection.php';

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara os dados do formulário para verificação no banco de dados
    $email = trim($_POST["email"]); // Remove espaços em branco
    $senha = $_POST["senha"];

    // Consulta para verificar se o usuário existe
    $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($user_id, $hashed_password); // Obtém o ID e a senha criptografada
        $stmt->fetch();

        // Verifica se a senha está correta
        if (password_verify($senha, $hashed_password)) {
            // Login bem-sucedido, armazena o ID do usuário na sessão
            $_SESSION["usuario_id"] = $user_id; // Armazena o ID do usuário na sessão
            $_SESSION["email"] = $email; // Opcional: armazena o email na sessão

            // Redireciona para a página inicial
            header("Location: /roubbie/index.php"); // Redireciona para a página inicial
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
