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

        /* Estilo do botão de iniciar onboarding */
        #startOnboarding {
            margin-bottom: 20px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #13547a;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #startOnboarding:hover {
            background-color: #0e3e5a;
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
    
     <!-- iniciar o onboarding apenas para usuarios novos que nao possuiam uma conta e acabou de se cadastrar  -->
     <div class="container">
        <main>
            <button id="startOnboarding" aria-label="Iniciar onboarding">Bora conhecer nossas ferramentas</button> <!-- Botão para iniciar o onboarding -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card" id="feature1">
                        <h3>Entradas do Diário.</h3>
                        <p><span class="badge bg-success"> (<?php echo $diario_count; ?> registradas)</span></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" id="feature2">
                        <h3>Eventos Pendentes</h3>
                        <p><br><span class="badge bg-warning"> (<?php echo $events_count; ?> pendentes)</span></p>
                        <a href="/roubbie/projeto_fullcalendar_js_php-master/status-rotina.php" class="btn btn-outline-success" aria-label="Ver eventos pendentes">Ver Eventos</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" id="feature3">
                        <h3>Gerenciamento do Tempo</h3>
                        <p>Horas livres e ativas.</p>
                        <canvas id="canvas" width="300" height="300"></canvas>
                        <a href="tempo.php" class="btn btn-outline-success" aria-label="Ver detalhes do gerenciamento de tempo">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Importando o script do Intro.js -->
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
    <script>
        document.getElementById('startOnboarding').addEventListener('click', function() {
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
                        element: document.querySelector('#feature3'),//puxa elementos desta mesma pagina#
                        intro: "Gerencie seu tempo e veja suas horas livres!"
                    },
                    { 
                        element: document.querySelector('.nav-link.click[href*="sisrot.php"]'), //puxa rotina do header
                        intro: "Insira sua rotina aqui! Adicione tarefas e eventos, e tudo que você registrar aparecerá no seu status. Com essas informações, vamos ajudar você a equilibrar lazer e trabalho!"
                    },
                    {
                        intro: "Obrigado por passar pelo nosso tutorial! Explore à vontade e aproveite suas ferramentas!"
                    }
                ]
            }).start();
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
                        text: 'Gerenciamento do Tempo'
                    }
                }
            }
        });
    </script>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
