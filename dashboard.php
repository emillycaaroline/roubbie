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
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php require_once 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

    <div class="dashboard-container">
        <header class="header" role="banner">
            <h1>Bem-vindo, <?php echo htmlspecialchars($nome_usuario); ?>!</h1>
        </header>

        <main class="card-grid" role="main" aria-label="Dashboard de atividades">
            <!-- Diários -->
            <div class="card" aria-labelledby="diario-title">
                <h2 id="diario-title">Diário</h2>
                <p>Notas registradas: <?php echo htmlspecialchars($diario_count); ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php/#entries" class="details-button">Ver Diário</a>
            </div>

            <!-- Eventos -->
            <div class="card" aria-labelledby="eventos-title">
                <h2 id="eventos-title">Eventos</h2>
                <p><?php echo $events_count > 0 ? htmlspecialchars($events_count) . " evento(s) pendente(s)" : "Nenhum evento pendente"; ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php" class="details-button">Ver Eventos</a>
            </div>

            <!-- Compromissos -->
            <div class="card" aria-labelledby="compromissos-title">
                <h2 id="compromissos-title">Compromissos</h2>
                <p><?php echo $compromissos_count > 0 ? htmlspecialchars($compromissos_count) . " compromisso(s)" : "Nenhum compromisso agendado"; ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php/#compromisso" class="details-button">Ver Compromissos</a>
            </div>

            <!-- Tarefas Pendentes -->
            <div class="card" aria-labelledby="tarefas-title">
                <h2 id="tarefas-title">Tarefas</h2>
                <p><?php echo $tarefas_count > 0 ? htmlspecialchars($tarefas_count) . " tarefa(s) pendente(s)" : "Nenhuma tarefa pendente"; ?></p>
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php/#tarefas" class="details-button">Ver Tarefas</a>
            </div>

            <!-- Rotina -->
            <div class="card" aria-labelledby="rotina-title">
                <h2 id="rotina-title">Rotina</h2>
                <p>Inserir uma miniatura do calendário só da semana</p>
                <a href="projeto_fullcalendar_js_php-master/sisrot.php" class="details-button">Minha rotina</a>
            </div>
        </main>
    </div>
</body>

</html>
