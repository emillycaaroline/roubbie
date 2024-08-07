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

    // Prepara os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifica se o email já existe no banco de dados
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email já cadastrado
        echo "Email já cadastrado. <a href='cadastro.php'>Tente novamente.</a>";
    } else {
        // Hash da senha com password_hash
        $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

        // Insere o novo usuário no banco de dados
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $hashed_senha);

        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso. <a href='login.php'>Faça login aqui.</a>";
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }
    }

    // Fecha a conexão
    $stmt->close();
    $conn->close();
} else {
    // Se o método de requisição não for POST, redireciona para o formulário de cadastro
    header("Location: cadastro.php");
    exit();
}
?>
