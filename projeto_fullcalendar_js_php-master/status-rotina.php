<?php
// Configuração de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_roubbie";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação de conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se todos os parâmetros necessários estão presentes
if (isset($_GET['evento_id'])) {
    $evento_id = intval($_GET['evento_id']); // Sanitização básica

    // Consulta para obter os detalhes do evento
    $sql = "SELECT * FROM events WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $evento_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
    } else {
        die("Evento não encontrado.");
    }
} else {
    die("Dados do evento não foram fornecidos.");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
        }
        .event-details {
            margin-top: 20px;
        }
        .event-details p {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .event-details .label {
            font-weight: bold;
        }
        .event-details .value {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Evento</h1>
        <div class="event-details">
            <p><span class="label">ID:</span> <span class="value"><?php echo htmlspecialchars($event['id']); ?></span></p>
            <p><span class="label">Título:</span> <span class="value"><?php echo htmlspecialchars($event['title']); ?></span></p>
            <p><span class="label">Cor:</span> <span class="value"><?php echo htmlspecialchars($event['color']); ?></span></p>
            <p><span class="label">Início:</span> <span class="value"><?php echo htmlspecialchars($event['start']); ?></span></p>
            <p><span class="label">Fim:</span> <span class="value"><?php echo htmlspecialchars($event['end']); ?></span></p>
            <p><span class="label">ID do Usuário:</span> <span class="value"><?php echo htmlspecialchars($event['usuario_id']); ?></span></p>
        </div>
    </div>
</body>
</html>
