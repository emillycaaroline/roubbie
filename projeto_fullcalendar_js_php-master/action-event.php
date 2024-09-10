<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    include '../includes/db_connection.php';
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

<<<<<<< HEAD
$action = $_POST['action']; // Determina se é um add ou update
$title = $_POST['title'];
$color = $_POST['color'];
$start = $_POST['start'];
$end = $_POST['end'];
=======
    // Obtém os dados do formulário
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $color = isset($_POST["color"]) ? $_POST["color"] : '';
    $start = isset($_POST["start"]) ? $_POST["start"] : '';
    $end = isset($_POST["end"]) ? $_POST["end"] : '';
>>>>>>> fdf28871b44df2b7570df7c628e1a67b8f824d6f

    // // Verifica se o usuario_id é válido
    // if ($usuario_id <= 0) {
    //     die("Erro: ID de usuário inválido.");
    // }

    // // Verifica se o usuario_id existe na tabela usuarios
    // $stmt = $conn->prepare("SELECT id FROM usuarios WHERE id = ?");
    // $stmt->bind_param("i", $usuario_id);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // if ($result->num_rows == 0) {
    //     die("Erro: ID de usuário não encontrado.");
    // }

    // Insere o evento no banco de dados
    $stmt = $conn->prepare("INSERT INTO events (title, color, start, end ) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $color, $start, $end);

    if ($stmt->execute()) {
        $evento_id = $stmt->insert_id;

        // Redireciona para a página com os dados do evento como parâmetros
        $redirect_url = "pagina.php";
        $query_params = http_build_query([
            'evento_id' => $evento_id,
            'titulo' => $title,
            'cor' => $color,
            'start' => $start,
            'end' => $end,
        ]);
        header("Location: $redirect_url?$query_params");
        exit();
    } else {
        echo "Erro ao adicionar o evento: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
