<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    include '../includes/db_connection.php';

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Conexão com o banco de dados bem-sucedida.<br>";
    }

    // Captura os dados do formulário
    $titulo = isset($_POST["titulo"]) ? trim($_POST["titulo"]) : '';
    $data = isset($_POST["data"]) ? $_POST["data"] : '';
    $conteudo = isset($_POST["conteudo"]) ? trim($_POST["conteudo"]) : '';
    $sentimento = isset($_POST["sentimento"]) ? $_POST["sentimento"] : null;

    // Valida os dados
    if (empty($titulo) || empty($data) || empty($conteudo)) {
        echo "Todos os campos são obrigatórios.";
        exit();
    }

    // Obtém o user_id da sessão
    $user_id = $_SESSION['user_id'] ?? null; // Usar operador null coalescing para evitar erros

    if ($user_id === null) {
        echo "Usuário não está logado. Verifique a sessão.";
        exit();
    }

    // Prepara a data no formato adequado para o banco de dados
    $data_formatada = date('Y-m-d', strtotime($data)); // Formato YYYY-MM-DD

    // Tenta inserir a entrada no diário
    $stmt = $conn->prepare("INSERT INTO diario (titulo, data, conteudo, sentimento, user_id) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        echo "Erro na preparação da declaração: " . $conn->error;
        exit();
    }

    // Liga os parâmetros
    $stmt->bind_param("ssssi", $titulo, $data_formatada, $conteudo, $sentimento, $user_id); // Adiciona $user_id à ligação de parâmetros

    // Executa a operação
    if ($stmt->execute()) {
        echo "Registro adicionado com sucesso!<br>";
        
        // Armazena mensagem de sucesso na sessão
        $_SESSION['msg'] = "Entrada do diário adicionada com sucesso!";
        
        // Redireciona para a página de diário
        header("Location: diario.php"); // Mude para a página que você deseja redirecionar
        exit();
    } else {
        echo "Erro ao adicionar o registro: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>
