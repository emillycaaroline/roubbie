
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $servername = "127.0.0.1"; // endereço do servidor
    $username = "root"; // nome de usuário do banco de dados
    $password = ""; // senha do banco de dados
    $dbname = "roubbie_bd";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Consulta SQL para verificar o login
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        session_start();
        $_SESSION['email'] = $email;
        header("Location: inicio.html");  // Redireciona para a página inicial
    } else {
        // Login falhou
        echo "<script>alert('Email ou senha incorretos');</script>";
    }

    // Fecha a conexão
    $conn->close();
}
?>
