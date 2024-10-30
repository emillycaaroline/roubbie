<?php
session_start();
require_once 'C:\xampp\htdocs\roubbie\includes\db_connection.php';
require_once 'C:\xampp\htdocs\roubbie\includes\header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Contagem de registros
$diario_count = $conn->query("SELECT COUNT(*) AS total FROM diario")->fetch_assoc()['total'] ?? 0;
$events_count = $conn->query("SELECT COUNT(*) AS total FROM events WHERE status = 'pendente'")->fetch_assoc()['total'] ?? 0;
$tarefas_count = $conn->query("SELECT COUNT(*) AS total FROM tarefas WHERE status = 'pendente'")->fetch_assoc()['total'] ?? 0;
$compromissos_count = $conn->query("SELECT COUNT(*) AS total FROM compromissos WHERE data > NOW()")->fetch_assoc()['total'] ?? 0;

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
    
    <style>
        :root {
            --primary-color: #1ABC9C;
            --secondary-color: #2C3E50;
            --background-color: #f0f2f5;
            --card-background: #fff;
            --text-color: #34495E;
            --muted-text: #7F8C8D;
            --box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: var(--background-color);
        }

        .dashboard-container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            background-color: var(--secondary-color);
            color: #ECF0F1;
            padding: 1.5rem 1rem;
            width: 240px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .nav-link {
            color: #ECF0F1;
            display: flex;
            align-items: center;
            margin: 1rem 0;
            padding: 0.8rem 1rem;
            width: 100%;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .nav-link:hover {
            background-color: var(--primary-color);
        }

        .main-content {
            flex: 1;
            padding: 2rem;
            background-color: #F5F5F5;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 12px;
            box-shadow: var(--box-shadow);
        }

        .section-box {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s ease;
        }

        .section-box:hover {
            transform: translateY(-5px);
        }

        .section-box h2 {
            color: var(--text-color);
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .profile-section {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .profile-card {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--box-shadow);
            text-align: center;
            flex: 1;
        }

        .footer {
            text-align: center;
            padding: 1rem;
            color: var(--muted-text);
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main-content {
                padding: 1rem;
            }

            .profile-section {
                flex-direction: column;
            }
        }
    </style>
</head>

</head>
<body>
    <div class="dashboard-container">
        <div class="main-content">
            <header class="header">
                <h1>Status</h1>
                <p>Usuários (<?php echo $diario_count; ?> perfil)</p>
            </header>

            <div class="section-box">
                <h2>Visão Geral</h2>
                <div class="profile-section">
                    <div class="profile-card">
                        <h2>Eventos</h2>
                        <p>Total: <?php echo $events_count; ?></p>
                    </div>
                    <div class="profile-card">
                        <h2>Tarefas</h2>
                        <p>Total: <?php echo $tarefas_count; ?></p>
                    </div>
                    <div class="profile-card">
                        <h2>Compromissos</h2>
                        <p>Total: <?php echo $compromissos_count; ?></p>
                    </div>
                </div>
            </div>

            <section class="section-box">
                <h2>Diário</h2>
                <p>Minhas Notas (<?php echo $diario_count; ?> registradas)</p>
            </section>

            <section class="section-box">
                <h2>Eventos</h2>
                <p><?php echo $events_count > 0 ? "$events_count evento(s) pendente(s)." : "Você não possui eventos pendentes."; ?></p>
            </section>

            <section class="section-box">
                <h2>Tarefas</h2>
                <a href="/roubbie/projeto_fullcalendar_js_php-master/status-tarefas.php" class="btn btn-outline-success" aria-label="Ver tarefas">
                    <span class="badge bg-warning"> (<?php echo $tarefas_count; ?> tarefas)</span>
                </a>
                <p>
                    <span class="badge <?php echo $tarefas_count == 0 ? 'bg-danger' : ''; ?>">
                        <?php echo $tarefas_count == 0 ? "Nenhuma tarefa pendente" : ""; ?>
                    </span>
                </p>
            </section>

            <section class="section-box">
                <h2>Compromissos</h2>
                <a href="/roubbie/projeto_fullcalendar_js_php-master/status-compromissos.php" class="btn btn-outline-success" aria-label="Ver compromissos">
                    <span class="badge bg-warning"> (<?php echo $compromissos_count; ?> compromissos)</span>
                </a>
                <p>
                    <span class="badge <?php echo $compromissos_count == 0 ? 'bg-danger' : ''; ?>">
                        <?php echo $compromissos_count == 0 ? "Nenhum compromisso pendente" : ""; ?>
                    </span>
                </p>
            </section>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
</body>
</html>
