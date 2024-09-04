<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "roubbie_bd";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexãok
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
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
            
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'Location: /roubbie/index.php';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar. Tente novamente mais tarde.');</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
