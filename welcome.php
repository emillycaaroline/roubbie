<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); // Redireciona para o login se não estiver logado
    exit();
}

// Exibe a mensagem de boas-vindas
$nome = htmlspecialchars($_SESSION['nome']); // Protege contra XSS

// Ativar exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
$compromissos_query = "SELECT COUNT(*) AS total FROM compromissos WHERE data > NOW()";
$compromissos_result = $conn->query($compromissos_query);
$compromissos_count = $compromissos_result ? $compromissos_result->fetch_assoc()['total'] : 0;

?>

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

        .card h3 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 700;
        }

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

        #canvas {
            max-width: 100%;
            margin-top: 20px;
        }

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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/roubbie/includes/headerintro.php'; ?>

    <div class="container">
        <main style=" margin: auto; margin-top: 200px;">
            <h1>Oi, <?php echo $nome; ?>!</h1>
            <p>Bem-vindo à sua nova conta!</p>
            <button id="startOnboarding" class="btn btn-outline-success">Iniciar Tutorial</button>
            <button id="skipTutorial" class="btn btn-secondary">Pular Tutorial</button>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card" id="feature1">
                        <h3>Minhas Notas</h3>
                        <p>
                            <span class="badge <?php echo $diario_count > 0 ? 'bg-success' : 'bg-danger'; ?>">
                                <?php echo $diario_count > 0 ? "+{$diario_count} registradas" : "Nenhuma nota registrada ainda"; ?>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="feature2">
                        <h3>Eventos Pendentes</h3>
                        <a href="/roubbie/projeto_fullcalendar_js_php-master/status-rotina.php" class="btn btn-outline-success" aria-label="Ver eventos pendentes">
                            <span class="badge bg-warning">(<?php echo $events_count; ?> pendentes)</span>
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
                        <h3>Gerenciamento do Tempo</h3>
                        <canvas id="canvas" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Importando o script do Intro.js -->
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>

    <!-- Introdução com tutorial -->
    <script>
        document.getElementById('startOnboarding').addEventListener('click', function () {
            introJs().setOptions({
                steps: [
                    {
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
                        intro: "Gerencie seu tempo e veja suas horas livres!"
                    },
                    {
                        intro: "Obrigado por passar pelo nosso tutorial! Explore à vontade e aproveite suas ferramentas!"
                    }
                ]
            }).oncomplete(function() {
                // Redireciona para a página principal (dashboard) após concluir o tutorial
                window.location.href = 'index.php';
            }).onexit(function() {
                // Redireciona para a página principal (dashboard) se o tutorial for interrompido
                window.location.href = 'index.php';
            }).start();
        });

        document.getElementById('skipTutorial').addEventListener('click', function () {
            // Redireciona para a página principal se o usuário pular o tutorial
            window.location.href = 'index.php';
        });
    </script>

    <!-- Adicionando o Chart.js para visualização de tempo -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('canvas').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Horas Livres', 'Horas Ativas'],
                datasets: [{
                    label: 'Distribuição de Tempo',
                    data: [5, 3], // Exemplo de dados; substitua com dados reais
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Distribuição do Tempo'
                    }
                }
            }
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
