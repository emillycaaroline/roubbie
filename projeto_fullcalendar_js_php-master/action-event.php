<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // // Depura o conteúdo de $_POST
    // var_dump($_POST);

    // Inclui o arquivo de conexão
    include 'db_connection.php';
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $color = isset($_POST["color"]) ? $_POST["color"] : '';
    $start = isset($_POST["start"]) ? $_POST["start"] : '';
    $end = isset($_POST["end"]) ? $_POST["end"] : '';
    $usuario_id = isset($_POST["usuario_id"]) ? intval($_POST["usuario_id"]) : 0; // Converte para inteiro

    // Verifica se o usuario_id é válido
    if ($usuario_id <= 0) {
        die("Erro: ID de usuário inválido.");
    }

    // Verifica se o usuario_id existe na tabela usuarios
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        die("Erro: ID de usuário não encontrado.");
    }

    // Insere o evento no banco de dados
    $stmt = $conn->prepare("INSERT INTO events (title, color, start, end, usuario_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $title, $color, $start, $end, $usuario_id);

    if ($stmt->execute()) {
        echo "Evento adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar o evento: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
