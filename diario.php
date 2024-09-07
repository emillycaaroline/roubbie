<?php
// Inclua o arquivo de conexão
include('includes/db_connection.php'); // Ajuste o caminho conforme necessário

// Consultar entradas do diário
$entries = [];
try {
    $sql = "SELECT * FROM diario ORDER BY date DESC";
    $result = $conn->query($sql);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $entries[] = $row;
        }
    } else {
        die("Erro ao consultar entradas: " . $conn->error);
    }
} catch (Exception $e) {
    die("Erro ao consultar entradas: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .entry { border: 1px solid #ddd; border-radius: 5px; padding: 15px; margin-bottom: 15px; }
        .entry img { max-width: 100%; height: auto; }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Adicionar Entrada ao Diário</h2>
        <form action="insere-diario.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="title" class="form-label">Título (opcional):</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição (opcional):</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data:</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagem (opcional):</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Entrada</button>
        </form>

        <h2 class="mt-4">Entradas do Diário</h2>
        <?php if (!empty($entries)): ?>
            <?php foreach ($entries as $entry): ?>
                <div class="entry">
                    <?php if (!empty($entry['image'])): ?>
                        <img src="<?php echo htmlspecialchars($entry['image']); ?>" alt="Imagem da entrada">
                    <?php endif; ?>
                    <h3><?php echo htmlspecialchars($entry['title']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($entry['description'])); ?></p>
                    <small>Data: <?php echo htmlspecialchars($entry['date']); ?></small>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Não há entradas no diário ainda.</p>
        <?php endif; ?>
    </div>
</body>
</html>
