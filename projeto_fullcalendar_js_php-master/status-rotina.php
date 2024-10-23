<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="seu-estilo.css">
    <style>
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