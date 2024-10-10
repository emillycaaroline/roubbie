<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Roubbie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php
    require_once 'includes/header.php';
    require_once 'includes/db_connection.php'; // Certifique-se de que este arquivo é incluído aqui

    // Consultar o número de entradas do diário
    // (Insira a consulta correspondente aqui)

    // Consultar eventos pendentes
    $events_query = "SELECT COUNT(*) AS total FROM events WHERE status = 'pendente'";
    $events_result = $conn->query($events_query);

    if ($events_result) {
        $events_count = $events_result->fetch_assoc()['total'];
    } else {
        echo "Erro na consulta de eventos: " . $conn->error;
    }

    // Consultar compromissos futuros
    $compromissos_query = "SELECT COUNT(*) AS total FROM compromissos WHERE data > NOW()"; // Ajuste conforme necessário
    $compromissos_result = $conn->query($compromissos_query);

    if ($compromissos_result) {
        $compromissos_count = $compromissos_result->fetch_assoc()['total'];
    } else {
        echo "Erro na consulta de compromissos: " . $conn->error;
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h2>Diário</h2>
                    <p>Veja suas anotações.</p>
                    <a href="diario.php" class="btn-link">Ver Diário</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h2>Eventos Pendentes</h2>
                    <p>Verifique seus eventos para esta semana.<span class="badge bg-warning"> (<?php echo $events_count; ?> pendentes)</span></p>
                    <a href="events-pendentes.php" class="btn-link">Ver Eventos</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h2>Compromissos</h2>
                    <p>Não perca os próximos compromissos.<span class="badge bg-info"> (<?php echo $compromissos_count; ?> futuros)</span></p>
                    <a href="compromissos-futuros.php" class="btn-link">Ver Compromissos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
