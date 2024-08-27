<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados (substitua com suas configurações)
    $servername = "localhost";  // Host do banco de dados
    $username = "root";         // Nome de usuário do banco de dados
    $password = "";             // Senha do banco de dados
    $dbname = "roubbie_bd";     // Nome do banco de dados
    
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara os dados do formulário para inserção no banco de dados
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]); // MD5 é uma forma simples de hash, para exemplo básico

    // Verifica se o email já existe no banco de dados
    $sql = "SELECT id FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email já cadastrado
        echo "Email já cadastrado. <a href='cadastro.php'>Tente novamente.</a>";
    } else {
        // Insere o novo usuário no banco de dados
        $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado com sucesso. <a href='login.php'>Faça login aqui.</a>";
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    }

    // Fecha a conexão
    $conn->close();
} else {
    // Se o método de requisição não for POST, redireciona para o formulário de cadastro
    header("Location: cadastro.php");
    exit();
}
?>
