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
/* Estilos Gerais */
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #007BFF;
    color: #fff;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

h1 {
    margin: 0;
    font-size: 2em;
}

button {
    background-color: #fff;
    color: #007BFF;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.2s;
}

button:hover {
    background-color: #f0f0f0;
    transform: translateY(-2px);
}

/* Container principal */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Barra de filtros */
.filter-bar {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.filter-btn {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.filter-btn:hover {
    background-color: #0056b3;
}

.filter-btn.active {
    background-color: #0056b3;
}

/* Lista de eventos */
.event-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.card-content {
    margin-bottom: 20px;
}

.event-title {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #007BFF;
}

.event-category {
    font-weight: bold;
    color: #FFC107;
}

.no-events {
    text-align: center;
    padding: 20px;
    font-size: 1.2em;
    color: #ffcc00;
}

/* Ações dentro dos cards */
.card-actions {
    display: flex;
    justify-content: space-between;
}

.edit-btn {
    background-color: #28A745;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.edit-btn:hover {
    background-color: #218838;
}

.delete-btn {
    background-color: #DC3545;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.delete-btn:hover {
    background-color: #c82333;
}

/* Estilos para dispositivos menores */
@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        text-align: center;
    }

    .filter-bar {
        flex-direction: column;
    }

    .filter-btn {
        margin-bottom: 10px;
    }

    .event-list {
        grid-template-columns: 1fr;
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
