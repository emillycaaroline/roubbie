<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados (substitua com suas configurações)
    $servername = "localhost";  // Host do banco de dados
    $username = "root";  // Nome de usuário do banco de dados
    $password = "";    // Senha do banco de dados
    $dbname = "roubbie_bd";  // Nome do banco de dados

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara os dados do formulário para verificação no banco de dados
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]); // MD5 é uma forma simples de hash, para exemplo básico

    // Consulta para verificar se o usuário existe
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login bem-sucedido, redireciona para a página inicial do usuário
        $_SESSION["email"] = $email;
        header("Location: pagina_restrita.php");
    } else {
        // Login falhou, redireciona para a página de login com mensagem de erro
        echo "Email ou senha inválidos. <a href='login.php'>Tente novamente.</a>";
    }

    // Fecha a conexão
    $conn->close();
} else {
    // Se o método de requisição não for POST, redireciona para o formulário de login
    header("Location: login.php");
    exit();
}
?>
