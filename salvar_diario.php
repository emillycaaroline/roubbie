<?php
 // Inclui o arquivo de conexão com o caminho correto
 require_once 'includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $conteudo = $_POST['conteudo'];

    // Prepara a inserção no banco de dados
    $stmt = $conn->prepare("INSERT INTO diario (titulo, data, conteudo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titulo, $data, $conteudo);

    if ($stmt->execute()) {
        echo "Nota salva com sucesso!";
    } else {
        echo "Erro ao salvar nota: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
