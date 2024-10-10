<?php
include 'includes/db_connection.php'; // Conexão com o banco de dados

// Função para buscar entradas do banco de dados
function fetchEntries($conn) {
    $sql = "SELECT * FROM diario ORDER BY data DESC";
    return $conn->query($sql);
}

// Função para excluir uma entrada
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM diario WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Entrada excluída com sucesso!";
    } else {
        echo "Erro ao excluir: " . $stmt->error;
    }
    $stmt->close();
}

// Lógica para salvar nova entrada ou atualizar uma existente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $conteudo = $_POST['conteudo'];
    $sentimento = isset($_POST['sentimento']) ? $_POST['sentimento'] : null;

    // Validação simples
    if (empty($titulo) || empty($data) || empty($conteudo)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Verifica se estamos atualizando ou inserindo uma nova entrada
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Atualizar entrada existente
        $id = $_POST['id'];
        $sql = "UPDATE diario SET titulo = ?, data = ?, conteudo = ?, sentimento = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $titulo, $data, $conteudo, $sentimento, $id);
    } else {
        // Inserir nova entrada
        $sql = "INSERT INTO diario (titulo, data, conteudo, sentimento) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $titulo, $data, $conteudo, $sentimento);
    }

    if ($stmt->execute()) {
        echo "Entrada salva com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

// Buscar entradas
$entries = fetchEntries($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }

        form,
        .entries {
            max-width: 600px;
            margin: auto;
            background: #edebff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border: 2px dashed blue;
        }

        h1 {
            text-align: center;
            color: #ff6347;
            font-family: 'Pacifico', cursive;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
            font-weight: 700;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 2px solid blue;
            border-radius: 10px;
            transition: border-color 0.3s;
            background-color: #fff;
        }

        input:focus,
        textarea:focus {
            border-color: black;
            outline: none;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: skyblue;
            transform: translateY(-2px);
        }

        .entries {
            margin-top: 20px;
            border-top: 2px solid blue;
            padding-top: 10px;
        }

        .entry {
            background: #dcd9ff;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
        }

        .edit-button {
            background-color: lightblue;
            border-radius: 50px;
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 5px;
        }

        .delete-button {
            background-color: red;
            border-radius: 50px;
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 5px;
        }

        select {
            margin-top: 15px;
            padding: 10px;
            background-color: skyblue;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }
    </style>
</head>

<body>

    <?php require_once 'includes/header.php'; ?>
    <div class="container">
        <h1>Meu Diário</h1>

        <form action="" method="post">
            <input type="hidden" id="id" name="id" value="">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Como foi seu dia?" required>

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>

            <label for="conteudo">Sobre o dia:</label>
            <textarea id="conteudo" name="conteudo" placeholder="Escreva aqui..." required></textarea>

            <label>Como você se sentiu?</label><br>
            <select name="sentimento" id="sentimento" required>
                <option value="😊">😊</option>
                <option value="😐">😐</option>
                <option value="😢">😢</option>
                <option value="😡">😡</option>
            </select><br><br>

            <button type="submit" style="border-radius: 10px;">Adicionar Entrada</button>
        </form>

        <div class="entries" id="entries">
            <h2>Entradas Anteriores</h2>
            <?php if ($entries && $entries->num_rows > 0): ?>
                <?php while ($entry = $entries->fetch_assoc()): ?>
                    <div class="entry">
                        <strong><?= htmlspecialchars($entry['titulo']) ?></strong> <br>
                        <em><?= htmlspecialchars($entry['data']) ?></em> <br>
                        <?= htmlspecialchars($entry['conteudo']) ?> <br>
                        <strong>Sentimento:</strong> <?= htmlspecialchars($entry['sentimento']) ?> <br>
                        <button class="edit-button" onclick="editEntry(<?= $entry['id'] ?>, '<?= htmlspecialchars($entry['titulo']) ?>', '<?= htmlspecialchars($entry['data']) ?>', '<?= htmlspecialchars($entry['conteudo']) ?>', '<?= htmlspecialchars($entry['sentimento']) ?>')">Editar</button>
                        <a href="?delete=<?= $entry['id'] ?>" class="delete-button">Excluir</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Nenhuma entrada encontrada.</p>
            <?php endif; ?>
        </div>

    </div>

    <script>
        function editEntry(id, titulo, data, conteudo, sentimento) {
            document.getElementById('id').value = id;
            document.getElementById('titulo').value = titulo;
            document.getElementById('data').value = data;
            document.getElementById('conteudo').value = conteudo;
            document.getElementById('sentimento').value = sentimento;
        }
    </script>

</body>

</html>