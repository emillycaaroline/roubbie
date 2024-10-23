<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Roubbie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
        /* ajuste feito para o status (dashboard) */
        .card {
            background-color: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.02);
        }

        /* Títulos dos cards */
        .card h3 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 700;
        }

        /* Estilo dos badges */
        .badge {
            font-size: 0.9rem;
            padding: 5px 10px;
            border-radius: 12px;
        }

        .bg-success {
            background-color: var(--secondary-color) !important;
            color: var(--white);
        }

        .bg-danger {
            background-color: var(--primary-color) !important;
            color: var(--white);
        }

        /* Estilo dos gráficos */
        #canvas {
            max-width: 100%;
            margin-top: 20px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .card {
                margin-bottom: 30px;
            }

            .card h3 {
                font-size: 1.2rem;
            }

            .btn {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

<?php
// Inclui o arquivo de conexão
include 'C:\xampp\htdocs\roubbie\includes\db_connection.php';
// Ativar exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Consultar tarefas pendentes
$tarefas_query = "SELECT COUNT(*) AS total FROM tarefas WHERE status = 'pendente'";
$tarefas_result = $conn->query($tarefas_query);
$tarefas_count = $tarefas_result ? $tarefas_result->fetch_assoc()['total'] : 0;

// Consultar compromissos
$compromissos_query = "SELECT COUNT(*) AS total FROM compromissos WHERE data > NOW()";
$compromissos_result = $conn->query($compromissos_query);
$compromissos_count = $compromissos_result ? $compromissos_result->fetch_assoc()['total'] : 0;

// Verificar se é um novo usuário
$is_new_user = true; // Altere isso conforme a lógica de verificação de novos usuários
?>
 <!-- Adiciona o header -->
 <?php include 'includes/header.php'; ?>
<div class="container">
    <main style="margin: auto; margin-top: 200px;">

        <div class="row">
            <div class="col-md-4">
                <div class="card" id="feature1">
                    <h3>Minhas Notas</h3>
                    <p>
                        <span class="badge <?php echo $diario_count > 0 ? 'bg-success' : 'bg-danger'; ?>">
                            <?php echo $diario_count > 0 ? "+{$diario_count} registradas" : "Nenhuma nota registrada ainda"; ?>
                        </span>
                    </p>
                    <a href="/roubbie/adicionar_nota.php" class="btn btn-primary" aria-label="Adicionar nova nota">Adicionar Nota</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" id="feature2">
                    <h3>Eventos Pendentes</h3>
                    <a href="/roubbie/projeto_fullcalendar_js_php-master/status-rotina.php" class="btn btn-outline-success" aria-label="Ver eventos">
                        <span class="badge bg-warning"> (<?php echo $events_count; ?> eventos)</span>
                    </a>
                    <p>
                        <span class="badge <?php echo $events_count == 0 ? 'bg-danger' : ''; ?>">
                            <?php echo $events_count == 0 ? "Nenhum evento pendente" : ""; ?>
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" id="feature3">
                    <h3>Tarefas Pendentes</h3>
                    <a href="/roubbie/projeto_fullcalendar_js_php-master/status-tarefas.php" class="btn btn-outline-success" aria-label="Ver tarefas">
                        <span class="badge bg-warning"> (<?php echo $tarefas_count; ?> tarefas)</span>
                    </a>
                    <p>
                        <span class="badge <?php echo $tarefas_count == 0 ? 'bg-danger' : ''; ?>">
                            <?php echo $tarefas_count == 0 ? "Nenhuma tarefa pendente" : ""; ?>
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" id="feature4">
                    <h3>Compromissos Pendentes</h3>
                    <a href="/roubbie/projeto_fullcalendar_js_php-master/status-compromissos.php" class="btn btn-outline-success" aria-label="Ver compromissos">
                        <span class="badge bg-warning"> (<?php echo $compromissos_count; ?> compromissos)</span>
                    </a>
                    <p>
                        <span class="badge <?php echo $compromissos_count == 0 ? 'bg-danger' : ''; ?>">
                            <?php echo $compromissos_count == 0 ? "Nenhum compromisso pendente" : ""; ?>
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" id="feature5">
                    <h3>Gerenciamento do Tempo</h3>
                    <canvas id="canvas" width="300" height="300"></canvas>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Importando o script do Intro.js -->
<script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Verificar se o tutorial já foi mostrado
        if (localStorage.getItem('tutorialShown') !== 'true') {
            // Iniciar o tutorial
            introJs().setOptions({
                steps: [{
                        intro: "Olá! Bem-vindo ao Roubbie! 😊 Vamos mostrar rapidamente as principais funcionalidades para você aproveitar ao máximo!"
                    },
                    {
                        element: document.querySelector('#feature1'),
                        intro: "Dê uma olhada nas suas entradas do diário registradas!"
                    },
                    {
                        element: document.querySelector('#feature2'),
                        intro: "Aqui estão seus eventos pendentes!"
                    },
                    {
                        element: document.querySelector('#feature3'),
                        intro: "Aqui estão suas atividades pendentes!"
                    },
                    {
                        element: document.querySelector('#feature4'),
                        intro: "Aqui estão seus compromissos futuros!"
                    },
                    {
                        element: document.querySelector('#feature5'),
                        intro: "Gerencie seu tempo e veja suas horas livres!"
                    },
                    {
                        element: document.querySelector('#feature1'),
                        intro: "Por último, você pode adicionar novas notas aqui!"
                    }
                ],
                showBullets: false,
                showButtons: true,
                nextLabel: 'Próximo',
                prevLabel: 'Anterior',
                doneLabel: 'Feito'
            }).start();

            // Marcar que o tutorial foi mostrado
            localStorage.setItem('tutorialShown', 'true');
        }
    });
</script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/dashboard.js"></script>
</body>
</html>
