<?php
include 'db.php'; // Inclua o arquivo com a conexão ao banco de dados

// Verifique o valor da ação
$action = $_POST['action'] ?? '';
$id = $_POST['id'] ?? '';
$title = $_POST['title'] ?? '';
$color = $_POST['color'] ?? '';
$start = $_POST['start'] ?? '';
$end = $_POST['end'] ?? '';

// Depuração: Verifique os valores recebidos
var_dump($action, $id, $title, $color, $start, $end); // Remova ou comente isso após o teste

try {
    if ($action == 'add') {
        $stmt = $pdo->prepare("INSERT INTO events (title, color, start, end) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $color, $start, $end]);
    } elseif ($action == 'edit') {
        $stmt = $pdo->prepare("UPDATE events SET title = ?, color = ?, start = ?, end = ? WHERE id = ?");
        $stmt->execute([$title, $color, $start, $end, $id]);
    } elseif ($action == 'delete') {
        $stmt = $pdo->prepare("DELETE FROM events WHERE id = ?");
        $stmt->execute([$id]);
    } else {
        throw new Exception("Ação inválida.");
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
