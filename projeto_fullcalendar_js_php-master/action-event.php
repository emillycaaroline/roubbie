<?php
include('db.php'); // Inclua seu arquivo de conexão

$action = $_POST['action']; // Determina se é um add ou update
$title = $_POST['title'];
$color = $_POST['color'];
$start = $_POST['start'];
$end = $_POST['end'];

if ($action == 'add') {
    $stmt = $pdo->prepare("INSERT INTO events (title, color, start, end, view) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $color, $start, $end, $view]);
} elseif ($action == 'edit') {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("UPDATE events SET title = ?, color = ?, start = ?, end = ?, view = ? WHERE id = ?");
    $stmt->execute([$title, $color, $start, $end, $view, $id]);
} elseif ($action == 'delete') {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("DELETE FROM events WHERE id = ?");
    $stmt->execute([$id]);
}
?>
