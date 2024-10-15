
<!-- ex -->
<?php
// Inclui o arquivo de conexão
include '../includes/db_connection.php';

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta para obter todos os eventos
$sql = "SELECT * FROM events";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status da Rotina</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS se necessário -->
    <style>
        body {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            color: white;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid white;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        td {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
<button onclick="window.history.back()">Voltar</button>

<h2>Status de eventos completo igual o do bd</h2>    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Cor</th>
                <th>Início</th>
                <th>Fim</th>
                <th>Status</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Exibe os dados de cada linha
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['title']}</td>
                            <td style='background-color: {$row['color']};'>{$row['color']}</td>
                            <td>{$row['start']}</td>
                            <td>{$row['end']}</td>
                            <td>{$row['status']}</td>
                            <td>{$row['category']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Nenhum evento encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Fecha a conexão
    $conn->close();
    ?>
</body>
</html>
