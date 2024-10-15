<?php
// Inclui o arquivo de conexão
include '../includes/db_connection.php';


// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta para obter todos os eventos
$sql = "SELECT title, start, end, category FROM events"; // Seleciona apenas os campos necessários
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status da Rotina - Dashboard</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS se necessário -->
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .container {
            margin-top: 80px; /* Espaço para o cabeçalho fixo */
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-2px); /* Efeito de elevação ao passar o mouse */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .event-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #007BFF; /* Cor da categoria */
        }
        .event-category {
            font-weight: bold;
            color: #FFC107; /* Cor para categorias */
            margin-top: 5px;
        }
        .no-events {
            text-align: center;
            padding: 20px;
            color: #ffcc00; /* Cor para destacar a mensagem */
        }
        @media (max-width: 768px) {
            .card {
                flex: 0 1 45%; /* Ajuste para telas menores */
            }
        }
        @media (max-width: 480px) {
            .card {
                flex: 0 1 100%; /* Ajuste para telas muito pequenas */
            }
        }
    </style>
</head>

<body>
<div class="container">
<button onclick="window.history.back()">Voltar</button>

<h2 >Aqui estão seus Eventos, Tarefas e Compromissos</h2>

    <div class="dashboard">
        <?php
        if ($result->num_rows > 0) {
            // Exibe os dados de cada linha em cards
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>
                        <div class='event-title'>{$row['title']}</div>
                        <div><strong>Início:</strong> {$row['start']}</div>
                        <div><strong>Fim:</strong> {$row['end']}</div>
                        <div class='event-category'><strong>Categoria:</strong> {$row['category']}</div>
                      </div>";
            }
        } else {
            echo "<div class='no-events'>Nenhum evento encontrado.</div>";
        }
        ?>
    </div>
</div>
</body>
<?php
// Fecha a conexão
$conn->close();
?>
</html>
