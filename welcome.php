<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo ao Roubbie</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <style>
        /* Estilo global */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--background-color);
            /* Defina a cor de fundo conforme seu CSS */
            color: var(--text-color);
            /* Defina a cor do texto conforme seu CSS */
        }

        /* Ajuste para o status (dashboard) */
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

        /* General styles */
        .text-white {
            color: #fff;
        }

        /* Navbar styles */
        .navbar {
            background: linear-gradient(to right, #13547a, #80d0c7);
            margin-top: auto;
        }

        .navbar-brand img {
            width: 100px;
        }

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #80d0c7 !important;
        }

        .navbar-collapse {
            display: none;
        }

        .navbar-collapse.show {
            display: block;
        }

        /* Mobile nav styles */
        .mobile-nav {
            display: none;
        }

        @media (max-width: 767.98px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 12px;
            }

            .mobile-nav {
                display: block;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: linear-gradient(to right, #13547a, #80d0c7);
                color: #ffffff;
                border-top: 1px solid #80d0c7;
                border-radius: 5px;
                z-index: 1000;
                text-align: center;
            }

            .mobile-nav ul {
                display: flex;
                justify-content: space-around;
                padding: 10px 0;
                margin: 0;
                list-style: none;
            }

            .mobile-nav a {
                color: white;
                /* Garantindo que os links sejam brancos no mobile */
            }

            .mobile-nav a:hover {
                color: #80d0c7;
                /* Mudança de cor ao passar o mouse no mobile */
            }
        }

        i {
            color: white;
            /* Garantindo que todos os ícones sejam brancos */
        }
    </style>
</head>

<body id="top">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo/logo_branco.png" alt="Logo do Roubbie">
                </a>
                <button id="menuButton" aria-label="Abrir menu de configurações" class="navbar-toggler" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <span class="nav-link">Home</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">Agenda</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">Rotina</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">Diário</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">Quiz</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">Sobre</span>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>

                    <!-- Login/cadastro -->
                    <ul class="nav-menu">
                        <li class="nav-item dropdown">
                            <a style="background-color: #13547a;" class="nav-link dropdown-toggle navbar-icon bi-person" style="border: none;" href="#" id="navbarUserDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu do usuário"></a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarUserDropdownMenuLink">
                                <li><span class="dropdown-item">Login</span></li>
                                <li><span class="dropdown-item">Cadastro</span></li>
                                <li><span class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sair</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-nav d-lg-none">
        <ul>
            <li><span aria-label="Ir para a página inicial"><i class="bi bi-house"></i></span></li>
            <li><span aria-label="Ir para a agenda"><i class="bi bi-calendar-month"></i></span></li>
            <li><span aria-label="Ir para a rotina"><i class="bi bi-ui-checks-grid"></i></span></li>
            <li><span aria-label="Ir para o diário"><i class="bi bi-pencil-square"></i></span></li>
        </ul>
    </div>

    <div class="container">
        <main style="margin: auto; margin-top: 200px;">
            <h1>Oi, Giovanni Santos!</h1>
            <p>Bem-vindo à sua nova conta!</p>

            <button id="startOnboarding" class="btn btn-outline-success">Iniciar Tutorial</button>
            <button id="skipTutorial" class="btn btn-secondary">Pular Tutorial</button>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card" id="feature1">
                        <h3>Minhas Notas</h3>
                        <p>
                            <span class="badge bg-success">
                                +2 registradas
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="feature2">
                        <h3>Eventos Pendentes</h3>
                        <p>
                            <span class="badge">
                                (8 pendentes)
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="feature3">
                        <h3>Meus Hobbies</h3>
                        <p>
                            <span class="badge bg-danger">
                                0 novos
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <h2 class="mt-5">Gráficos de Progresso</h2>
            <canvas id="canvas" width="400" height="200"></canvas>
        </main>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
    <script src="js/dashboard.js"></script>

    <script>
        $(document).ready(function() {
            $('#startOnboarding').click(function() {
                introJs().setOptions({
                    steps: [{
                            intro: "Bem-vindo ao Roubbie! Vamos dar uma olhada nas principais funcionalidades."
                        },
                        {
                            element: '#feature1',
                            intro: 'Aqui estão suas notas. Você pode ver quantas notas registrou.'
                        },
                        {
                            element: '#feature2',
                            intro: 'Aqui estão os eventos pendentes. Acompanhe o que ainda precisa ser feito.'
                        },
                        {
                            element: '#feature3',
                            intro: 'Esta seção mostra seus hobbies registrados.'
                        },
                        {
                            element: '#canvas',
                            intro: 'Os gráficos mostram seu progresso ao longo do tempo.'
                        },
                        {
                            intro: "Isso é tudo! Aproveite o uso do Roubbie!"
                        }
                    ]
                }).start();
            });
        });
    </script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>