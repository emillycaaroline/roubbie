<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    
    // Inclui o arquivo de conexão com o caminho correto
    require_once '../includes/db_connection.php';

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    // Prepara a consulta SQL para evitar SQL Injection
    $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $hashed_password);

    if ($stmt->num_rows == 1) {
        $stmt->fetch();
        if (password_verify($senha, $hashed_password)) {
            // Login bem-sucedido
            $_SESSION['email'] = $email;
            $_SESSION['usuario_id'] = $user_id;

            header("Location: /roubbie/index.php");  // Redireciona para a página inicial
            exit();
        } else {
            // Senha incorreta
            echo "<script>alert('Senha incorreta'); window.location.href = 'login.php';</script>";
        }
    } else {
        // Email não encontrado
        echo "<script>alert('Usuário não encontrado'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
