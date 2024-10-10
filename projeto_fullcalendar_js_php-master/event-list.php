<?php
require_once '../includes/db_connection.php';

session_start();

$sql = $db->query("SELECT id, title, color, start, end FROM events");
$events = $sql->fetchAll();

$evs = [];
foreach ($events as $event) {
    extract($event);

    $evs[] = [
        'id' => $id, 
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end' => $end,
    ];
}

echo json_encode($evs);
