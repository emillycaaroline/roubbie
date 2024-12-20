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
    $title = isset($_POST["title"]) ? trim($_POST["title"]) : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $time = isset($_POST["time"]) ? $_POST["time"] : '';
    $category = isset($_POST["category"]) ? $_POST["category"] : '';

    // Valida os dados
    if (empty($title) || empty($date) || empty($time) || empty($category)) {
        echo "Todos os campos são obrigatórios.";
        exit();
    }

    // Converte a data e hora para um formato datetime
    $start = $date . ' ' . $time; // Combina data e hora

    // Obtém o user_id da sessão
    $user_id = $_SESSION['user_id']; // Obtém o ID do usuário logado

    // Tenta inserir o evento no banco de dados
    $stmt = $conn->prepare("INSERT INTO events (title, start, category, user_id) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        echo "Erro na preparação da declaração: " . $conn->error;
        exit();
    }

    $stmt->bind_param("sssi", $title, $start, $category, $user_id); // Adiciona $user_id à ligação de parâmetros

    // Executa a operação
    if ($stmt->execute()) {
        $evento_id = $stmt->insert_id; // Obtém o ID do evento inserido

        // Armazena mensagem de sucesso na sessão
        $_SESSION['msg'] = "Evento adicionado com sucesso!";

        // Redireciona para a página de status com os dados do evento
        $redirect_url = "status-rotina.php";
        $query_params = http_build_query([
            'evento_id' => $evento_id,
            'titulo' => $title,
            'start' => $start,
            'categoria' => $category,
        ]);
        header("Location: $redirect_url?$query_params");
        exit();
    } else {
        echo "Erro ao adicionar o registro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
