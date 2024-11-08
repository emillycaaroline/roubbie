<?php
session_start();
require_once 'C:\xampp\htdocs\roubbie\includes\db_connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
} 

function getCount($conn, $table, $status = null) {
    $query = "SELECT COUNT(*) AS total FROM $table";
    if ($status) {
        $query .= " WHERE status = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $status);
    } else {
        $stmt = $conn->prepare($query);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['total'] ?? 0;
}

$diario_count = getCount($conn, 'diario');
$events_count = getCount($conn, 'events', 'pendente');
$tarefas_count = getCount($conn, 'tarefas', 'pendente');
$compromissos_count = getCount($conn, 'compromissos', null);

// Validação do nome do usuário
$nome_usuario = isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : 'Usuário';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roubbie Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
        color: #333;
        background-color: white;
    }

    .dashboard-container {
        padding: 2rem;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.5rem;
        background-color: #165378;
        color: #fff;
        border-radius: 12px;
        margin-bottom: 2rem;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .header h1 {
        font-size: 2rem;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .card {
        background-color: #fff;
        padding: 1.5rem;
        border-radius: 2rem;
        border: 2px solid;
        border-image: linear-gradient(to right, #13547a, #80d0c7) 1;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .card h2 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: #165378;
    }

    .card p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 1rem;
    }

    .details-button {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: #81cfc6;
        color: #165378;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .details-button:hover {
        background-color: #165378;
        color: #fff;
    }

    .details-button:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(129, 207, 198, 0.5);
    }
</style>
<body>
    <?php require_once 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

    <div class="dashboard-container"><br><br><br>
        <header class="header" role="banner">
            <h1>Bem-vindo, <?php echo $nome_usuario; ?>!</h1>
        </header>

        <div class="card-grid" role="main" aria-label="Dashboard de atividades">
            <!-- Diários -->
            <div class="card" aria-labelledby="diario-title">
                <h2 id="diario-title">Diário</h2>
                <p>Notas registradas: <?php echo $diario_count; ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php/#entries" class="details-button">Ver Diário</a>
            </div>

            <!-- Eventos -->
            <div class="card" aria-labelledby="eventos-title">
                <h2 id="eventos-title">Eventos</h2>
                <p><?php echo $events_count > 0 ? "$events_count evento(s) pendente(s)" : "Nenhum evento pendente"; ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php" class="details-button">Ver Eventos</a>
            </div>

            <!-- Compromissos -->
            <div class="card" aria-labelledby="compromissos-title">
                <h2 id="compromissos-title">Compromissos</h2>
                <p><?php echo $compromissos_count > 0 ? "$compromissos_count compromisso(s)" : "Nenhum compromisso agendado"; ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php/#compromisso" class="details-button">Ver Compromissos</a>
            </div>

            <!-- Rotina -->
            <div class="card" aria-labelledby="rotina-title">
                <h2 id="rotina-title">Rotina</h2>
                <p>Inserir uma miniatura do calendário só da semana</p>
                <a href="projeto_fullcalendar_js_php-master/sisrot.php" class="details-button">Minha rotina</a>
            </div>
        </div>
    </div>
</body>
</html>