<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
     // Inclui o arquivo de conexão
     include 'db_connection.php';


    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara os dados do formulário para verificação no banco de dados
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para verificar se o usuário existe
    $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = ?");
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
            echo "Senha incorreta. <a href='login.php'>Tente novamente.</a>";
        }
    } else {
        // Email não encontrado
        echo "Usuário não encontrado. <a href='login.php'>Tente novamente.</a>";
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
