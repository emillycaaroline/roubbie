<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    include '../includes/db_connection.php';

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Captura os dados do formulário
    $titulo = isset($_POST["titulo"]) ? trim($_POST["titulo"]) : '';
    $data = isset($_POST["data"]) ? $_POST["data"] : '';
    $conteudo = isset($_POST["conteudo"]) ? trim($_POST["conteudo"]) : '';
    
    // Valida os dados
    if (empty($titulo) || empty($data) || empty($conteudo)) {
        echo "Todos os campos são obrigatórios.";
        exit();
    }

    // Obtém o user_id da sessão
    $user_id = $_SESSION['user_id']; // Obtém o ID do usuário logado

    // Tenta inserir o diário no banco de dados
    $stmt = $conn->prepare("INSERT INTO diario (titulo, data, conteudo, user_id) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        echo "Erro na preparação da declaração: " . $conn->error;
        exit();
    }

    $stmt->bind_param("sssi", $titulo, $data, $conteudo, $user_id); // Adiciona $user_id à ligação de parâmetros

    // Executa a operação
    if ($stmt->execute()) {
        // Armazena mensagem de sucesso na sessão
        $_SESSION['msg'] = "Entrada do diário adicionada com sucesso!";

        // Redireciona para a página de diário
        header("Location: diario.php"); // Mude para a página que você deseja redirecionar
        exit();
    } else {
        echo "Erro ao adicionar a entrada do diário: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
