<?php
// Inclua o arquivo de conexão com o banco de dados
include('includes/db_connection.php'); // Ajuste o caminho conforme necessário

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e sanitiza os dados do formulário
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';

    // Verifica se uma imagem foi carregada
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/'; // Diretório para onde as imagens serão enviadas
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        // Move o arquivo para o diretório de upload
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $image = $uploadFile;
        } else {
            die("Falha ao carregar a imagem.");
        }
    }

    // Verifica se a conexão foi estabelecida corretamente
    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Prepara a consulta SQL
    $stmt = $conn->prepare("INSERT INTO diario (title, description, date, image) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    // Vincula os parâmetros e executa a consulta
    $stmt->bind_param("ssss", $title, $description, $date, $image);
    if ($stmt->execute()) {
        header("Location: diario.php"); // Redireciona para a página do diário após a inserção
        exit;
    } else {
        die("Erro ao inserir entrada: " . $stmt->error);
    }

    // Fecha a declaração
    $stmt->close();
}

// Fecha a conexão
$conn->close();
