<?php
include 'includes/db_connection.php'; // Conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $conteudo = $_POST['conteudo'];
    $sentimento = isset($_POST['sentimento']) ? $_POST['sentimento'] : null;

    // Validação simples
    if (empty($titulo) || empty($data) || empty($conteudo)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Inserir no banco de dados
    $sql = "INSERT INTO diario (titulo, data, conteudo, sentimento) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $titulo, $data, $conteudo, $sentimento);

    if ($stmt->execute()) {
        echo "Entrada salva com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
