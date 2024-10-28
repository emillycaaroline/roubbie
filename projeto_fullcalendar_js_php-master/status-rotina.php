<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="seu-estilo.css">
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">

    
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h3 {
            color: #3e8da5;
            margin-top: 20px;
            border-bottom: 2px solid #3e8da5;
            padding-bottom: 5px;
        }

        .event {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .event:hover {
            transform: scale(1.02);
            border-color: #0a5977;
        }

        h4 {
            color: #3e8da5;
            margin: 0 0 5px 0;
        }

        p {
            margin: 5px 0;
            color: #555;
        }

        p.no-events {
            color: #ff0000;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include '../includes/db_connection.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT title, start, end, category FROM events";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $events_by_category = [];

        while ($row = $result->fetch_assoc()) {
            $category = htmlspecialchars($row['category']);
            $events_by_category[$category][] = $row;
        }

        foreach ($events_by_category as $category => $events) {
            echo "<h3>Categoria: " . htmlspecialchars($category) . "</h3>";
            foreach ($events as $event) {
                echo "<div class='event'>";
                echo "<h4>" . htmlspecialchars($event['title']) . "</h4>";
                echo "<p>Início: " . htmlspecialchars($event['start']) . "</p>";
                echo "<p>Fim: " . htmlspecialchars($event['end']) . "</p>";
                echo "</div>";
            }
            echo "<hr>";
        }
    } else {
        echo "<p class='no-events'>Nenhum evento encontrado.</p>";
    }

    $conn->close();
    ?>
</body>

</html>