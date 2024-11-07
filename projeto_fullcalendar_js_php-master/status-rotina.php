<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="seu-estilo.css">
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo da página */
        body {
            background-color: #f4f7f6;
            color: #333;
            font-family: 'Arial', sans-serif;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Cabeçalho */
        header {
            background-color: #fff;
            color: #4a4a4a;
            padding: 20px 40px;
            width: 100%;
            max-width: 800px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-radius: 8px;
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        header .filter-container {
            margin: 15px 0;
        }

        header .filter-button {
            background-color: #d8e6e2;
            color: #4a4a4a;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px 16px;
            margin: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        header .filter-button:hover {
            background-color: #80d0c7;
            color: white;
            transform: scale(1.05);
        }

        /* Estilo da grade de eventos */
        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 800px;
        }

        /* Estilo dos eventos */
        .event {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .event:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .event h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .event p {
            font-size: 0.95rem;
            color: #666;
        }

        /* Estilo de compromissos */
        .compromissos {
            width: 100%;
            max-width: 800px;
            margin-top: 30px;
        }

        .compromisso {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilo das entradas do diário */
        .entries {
            width: 100%;
            max-width: 800px;
            margin-top: 30px;
        }

        .entry {
            background-color: #eaf2f1;
            border: 1px solid #d1e7e1;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            transition: background-color 0.3s ease;
        }

        .entry:hover {
            background-color: #d0f0e2;
        }

        /* Estilo dos botões de editar e excluir */
        .edit-button, .delete-button {
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 12px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .edit-button:hover, .delete-button:hover {
            background-color: #357ab7;
        }

        /* Estilo geral dos botões */
        .button {
            background-color: #80d0c7;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 30px;
            display: inline-block;
        }

        .button:hover {
            background-color: #13547a;
            transform: scale(1.05);
        }

        /* Estilo do rodapé */
        footer {
            width: 100%;
            background-color: #fff;
            color: #666;
            padding: 15px;
            text-align: center;
            margin-top: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        footer p {
            font-size: 0.9rem;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.5rem;
            }

            .filter-button {
                padding: 6px 12px;
                font-size: 0.85rem;
            }

            .event-grid {
                grid-template-columns: 1fr;
            }

            .entry, .event, .compromisso {
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Eventos</h1>
        <div class="filter-container">
            <button class="filter-button" onclick="filterEvents('all')">Todos</button>
            <button class="filter-button" onclick="filterEvents('diario')">Diário</button>
            <button class="filter-button" onclick="filterEvents('categoria2')">Categoria 2</button>
            <button class="filter-button" onclick="filterEvents('categoria3')">Categoria 3</button>
        </div>
        <a href="criar_evento.php" class="button">Criar Evento</a>
    </header>

    <main>
        <div id="events-container" class="event-grid">
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
                    foreach ($events as $event) {
                        echo "<div class='event' data-category='" . htmlspecialchars($category) . "'>";
                        echo "<h4>" . htmlspecialchars($event['title']) . "</h4>";
                        echo "<p><strong>Início:</strong> " . htmlspecialchars($event['start']) . "</p>";
                        echo "<p><strong>Fim:</strong> " . htmlspecialchars($event['end']) . "</p>";
                        echo "</div>";
                    }
                }
            } else {
                echo "<p class='no-events'>Nenhum evento encontrado.</p>";
            }

            $conn->close();
            ?>
        </div>

        <div class="entries" id="entries">
            <h2>Entradas Anteriores</h2>
            <?php
            include '../includes/db_connection.php';

            $sql_entries = "SELECT id, titulo, data, conteudo, sentimento FROM diario";
            $entries = $conn->query($sql_entries);

            if ($entries && $entries->num_rows > 0) {
                while ($entry = $entries->fetch_assoc()) {
                    echo "<div class='entry'>";
                    echo "<strong>" . htmlspecialchars($entry['titulo']) . "</strong> <br>";
                    echo "Data: " . htmlspecialchars($entry['data']) . "<br>";
                    echo nl2br(htmlspecialchars($entry['conteudo'])) . "<br>";
                    echo "<a href='editar_diario.php?id=" . $entry['id'] . "' class='edit-button'>Editar</a>";
                    echo "<a href='excluir_diario.php?id=" . $entry['id'] . "' class='delete-button'>Excluir</a>";
                    echo "</div>";
                }
            } else {
                echo "<p class='no-events'>Nenhuma entrada encontrada.</p>";
            }

            $conn->close();
            ?>
        </div>

        <div class="compromissos">
            <h2>Compromissos Futuros</h2>
            <?php
            include '../includes/db_connection.php';

            $sql_compromissos = "SELECT title, start FROM events WHERE category = 'compromissos' AND start > NOW()";
            $compromissos = $conn->query($sql_compromissos);

            if ($compromissos && $compromissos->num_rows > 0) {
                while ($compromisso = $compromissos->fetch_assoc()) {
                    echo "<div class='compromisso'>";
                    echo "<strong>" . htmlspecialchars($compromisso['title']) . "</strong><br>";
                    echo "Início: " . htmlspecialchars($compromisso['start']) . "<br>";
                    echo "</div>";
                }
            } else {
                echo "<p class='no-events'>Nenhum compromisso futuro.</p>";
            }

            $conn->close();
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Roubbie</p>
    </footer>
</body>
</html>
