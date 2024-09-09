<?php
require_once '../includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD

    // Inclui o arquivo de conexão
    include '../includes/db_connection.php';  // Ajuste o caminho conforme necessário

    // Verifica a conexãok
=======
    
    // Verifica a conexão
>>>>>>> 7743cbbce92a908d46b018080dc59613cc880e70
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifica se o email já está registrado
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Este email já está registrado.'); window.location.href = 'cadastro.html';</script>";
    } else {
        // Criptografa a senha
        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

        // Insere os dados no banco de dados
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $hashed_password);

        if ($stmt->execute()) {
<<<<<<< HEAD

            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'Location: /roubbie/index.php';</script>";
=======
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = '../index.php';</script>";
>>>>>>> 7743cbbce92a908d46b018080dc59613cc880e70
        } else {
            echo "<script>alert('Erro ao cadastrar. Tente novamente mais tarde.'); window.location.href = 'cadastro.html';</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
<<<<<<< HEAD
=======
?>
<!-- # Script para processar o cadastro de usuários -->
>>>>>>> 7743cbbce92a908d46b018080dc59613cc880e70
