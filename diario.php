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
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<style>
    /* Estilo do corpo da página */
    :root {
        --bg_color: #f5f5f5;
        --list_hover_bg: #e0e0e0;
        --shadow_color: rgba(150, 150, 150, 0.4);
        --font_color: #333;
        --text_color: #333;
        --btn_border_radius: 2px;
        --window_border_radius: 4px;
    }

    * {
        padding: 0;
        margin: 0;
        border: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    body {
        background-color: var(--bg_color);
        color: var(--font_color);
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    form,
    .entries {
        max-width: 800px;
        margin: auto;
        background: #ffffff;
        padding: 20px;
        border-radius: var(--window_border_radius);
        box-shadow: 0 4px 15px var(--shadow_color);
    }

    h1,h3 {
        text-align: center;
        color: #4a4a4a;
        font-family: 'Pacifico', cursive;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-top: 10px;
        color: #555;
        font-weight: 700;
    }

    input,
    textarea {
        width: calc(100% - 24px);
        padding: 12px;
        margin-top: 5px;
        border: 2px solid #4A90E2;
        border-radius: 10px;
        transition: border-color 0.3s;
        background-color: #fff;
    }

    input:focus,
    textarea:focus {
        border-color: #2C82C9;
        outline: none;
    }

    textarea {
        height: 120px;
        resize: vertical;
    }

    button {
        margin-top: 15px;
        padding: 10px;
        background-color: #2C82C9;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.2s;
    }

    button:hover {
        background-color: #4A90E2;
        transform: translateY(-2px);
    }

    .entries {
        margin-top: 20px;
        border-top: 2px solid #4A90E2;
        padding-top: 10px;
    }

    .entry {
        background: #e0f7fa;
        margin: 10px 0;
        padding: 10px;
        border-radius: 10px;
    }

    .edit-button {
        background-color: #ffca28;
        border-radius: 50px;
        padding: 5px 10px;
        color: #333;
        border: none;
        cursor: pointer;
        margin-left: 5px;
    }

    .delete-button {
        background-color: #e57373;
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
        background-color: #2C82C9;
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .form-center {
        text-align: center;
        margin-top: 20px;
    }
</style>

<?php require_once 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

<body>

    <br><br><br><br>
    <div class="container" >
    <h3>Momento Reflexão</h3>
    <form action="" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
            <input type="hidden" name="id" id="id" value="">

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título" required><br><br>

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required> <br><br>

            <label for="conteudo">Sobre o dia:</label>
            <textarea id="conteudo" name="conteudo" placeholder="Como foi seu dia?" required></textarea>

            <label class="form-center">Como você se sentiu?</label><br>
            <select name="sentimento" id="sentimento" required>
                <option value="😊">😊</option>
                <option value="😐">😐</option>
                <option value="😢">😢</option>
                <option value="😡">😡</option>
            </select><br><br>

            <button type="submit" style="border-radius: 10px;">Registrar</button> <br>
        </form><br><br>

        <div class="entries" id="entries">
            <h2>Anotações anteriores</h2>
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
                <p>Nenhum registro encontrado.</p>
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

            // Rola a página para o formulário
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>
