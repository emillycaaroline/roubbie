<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Roubbie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-active-bg: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php
    // Ativar exibição de erros
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'includes/header.php';
    require_once 'includes/db_connection.php';

    // Verificar a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Consultar o número de entradas do diário
    $diario_query = "SELECT COUNT(*) AS total FROM diario";
    $diario_result = $conn->query($diario_query);
    $diario_count = $diario_result ? $diario_result->fetch_assoc()['total'] : 0;

    // Consultar eventos pendentes
    $events_query = "SELECT COUNT(*) AS total FROM events WHERE status = 'pendente'";
    $events_result = $conn->query($events_query);
    $events_count = $events_result ? $events_result->fetch_assoc()['total'] : 0;

    // Consultar compromissos futuros
    $compromissos_query = "SELECT COUNT(*) AS total FROM compromissos WHERE data > NOW()"; // Ajuste conforme necessário
    $compromissos_result = $conn->query($compromissos_query);
    $compromissos_count = $compromissos_result ? $compromissos_result->fetch_assoc()['total'] : 0;
    ?>

    <div class="container">
        <main>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h3>Entradas do Diário</h3>
                        <p>Total de anotações registradas.<br><span class="badge bg-success"> (<?php echo $diario_count; ?> registradas)</span></p>
                        <a href="diario.php" class="btn btn-outline-success">Ver Diário</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <h3>Eventos Pendentes</h3>
                        <p>Verifique seus eventos para esta semana.<br><span class="badge bg-warning"> (<?php echo $events_count; ?> pendentes)</span></p>
                        <a href="events-pendentes.php" class="btn btn-outline-success">Ver Eventos</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <h3>Compromissos</h3>
                        <p>Não perca os próximos compromissos.<br><span class="badge bg-info"> (<?php echo $compromissos_count; ?> futuros)</span></p>
                        <a href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/index.php" class="btn btn-outline-success">Ver Detalhes</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h3>Acompanhamento de Hobbies</h3>
                        <p>Como anda a prática do seu hobby?<br>Visualize seu progresso!</p>
                        <a href="http://localhost/roubbie/quiz.php" class="btn btn-outline-success">Ver Detalhes</a>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <h3>Gerenciamento do Tempo</h3>
                        <p>Horas livres e ativas.</p>
                        <a href="tempo.php" class="btn btn-outline-success">Ver Detalhes</a>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>