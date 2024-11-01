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
            background: linear-gradient(to bottom right, #80d0c7, #13547a);
            color: #13547a;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Estilo do cabeçalho */
        header {
            background-color: rgba(19, 84, 122, 0.9);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        /* Títulos */
        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        /* Container de filtros */
        .filter-container {
            margin: 20px 0;
        }

        /* Botões de filtro */
        .filter-button {
            background-color: #80d0c7;
            color: #13547a;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            margin: 0 5px;
            font-weight: bold;
        }

        .filter-button:hover {
            background-color: #13547a;
            color: white;
            transform: scale(1.05);
        }

        /* Estilo de sub-títulos */
        h2 {
            margin: 20px 0;
            font-size: 1.5rem;
            color: #13547a;
        }

        /* Grade de eventos */
        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 800px;
        }

        /* Estilo dos eventos */
        .event {
            background-color: white;
            border: 2px dashed #13547a;
            border-radius: 10px;
            padding: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .event:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para a mensagem de eventos não encontrados */
        .no-events {
            color: #b00020; /* Vermelho para ênfase */
            font-weight: bold;
            text-align: center;
        }

        /* Estilo das entradas do diário */
        .entries {
            margin-top: 40px;
            width: 100%;
            max-width: 800px;
        }

        /* Estilo das entradas individuais */
        .entry {
            background-color: #e0f7fa;
            border: 1px solid #00796b;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            transition: background-color 0.3s;
        }

        .entry:hover {
            background-color: #b2ebf2;
        }

        /* Estilo dos botões de edição e exclusão */
        .edit-button, .delete-button {
            margin-top: 5px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .edit-button:hover, .delete-button:hover {
            background-color: #004d40;
        }

        /* Estilo para compromissos */
        .compromissos {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .compromisso {
            background-color: #e0f7fa; /* Cor de fundo leve */
            border: 1px solid #00796b; /* Borda escura */
            border-radius: 5px;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .compromisso:hover {
            background-color: #b2ebf2; /* Cor ao passar o mouse */
        }

        /* Estilo de botões gerais */
        .button {
            background-color: #80d0c7;
            color: #13547a;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
            display: inline-block;
            font-weight: bold;
            text-decoration: none;
        }

        .button:hover {
            background-color: #13547a;
            color: white;
            transform: scale(1.05);
        }

        /* Responsividade */
        @media (max-width: 600px) {
            h1 {
                font-size: 1.5rem;
            }

            .filter-button {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .entry, .event {
                padding: 10px;
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
                    echo "<a href='deletar_diario.php?id=" . $entry['id'] . "' class='delete-button'>Excluir</a>";
                    echo "</div>";
                }
            } else {
                echo "<p class='no-events'>Nenhuma entrada de diário encontrada.</p>";
            }

            $conn->close();
            ?>
        </div>

        <div class="compromissos">
            <h2>Meus Compromissos</h2>
            <?php
            include '../includes/db_connection.php';

            $sql_compromissos = "SELECT * FROM compromissos"; // Exemplo de consulta para compromissos
            $compromissos_result = $conn->query($sql_compromissos);

            if ($compromissos_result && $compromissos_result->num_rows > 0) {
                while ($compromisso = $compromissos_result->fetch_assoc()) {
                    echo "<div class='compromisso'>";
                    echo "<strong>" . htmlspecialchars($compromisso['titulo']) . "</strong> <br>";
                    echo "Data: " . htmlspecialchars($compromisso['data']) . "<br>";
                    echo "Descrição: " . htmlspecialchars($compromisso['descricao']) . "<br>";
                    echo "</div>";
                }
            } else {
                echo "<p class='no-events'>Nenhum compromisso encontrado.</p>";
            }

            $conn->close();
            ?>
        </div>
    </main>
</body>
</html>
