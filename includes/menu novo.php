<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Roubbie - Encontre equilíbrio entre organização e lazer.">
    <meta name="author" content="Equipe Roubbie">
    <meta name="keywords" content="Roubbie, organização, lazer, bem-estar">
    <title>Início - Roubbie</title>

    <!-- CSS FILES -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    <!-- CUSTOM STYLES -->
    <style>
        body {
            background: none;
        }

        .text-white {
            color: #fff;
        }

        .timeline-section {
            padding: 60px 0;
        }

        .site-footer {
            background-color: white;
            color: #ffffff;
        }

        .site-footer a {
            color: #13547a;
        }

        .site-footer a:hover {
            color: #80d0c7;
        }

        .navbar-brand img {
            width: 100px;
        }

        .social-icon-link {
            color: #13547a;
        }

        .social-icon-link:hover {
            color: #80d0c7;
        }

        .nav-link {
            color: #13547a !important;
        }

        .nav-link:hover {
            color: #80d0c7 !important;
        }

        /* Define o tamanho da fonte para os itens de menu */
        .navbar-nav .nav-item .nav-link {
            font-size: 14px;
            /* Ajuste o tamanho conforme necessário */
        }

        .bi {
            font-size: 1.5rem;
        }

        .d-none-desk {
            display: none;
        }

        @media (max-width: 767.98px) {
            .d-none-desk {
                display: inline-block;
            }

            /* Ajusta o tamanho da fonte para dispositivos móveis */
            .navbar-nav .nav-item .nav-link {
                font-size: 12px;
                /* Ajuste o tamanho conforme necessário para dispositivos móveis */
            }
        }

        .navbar-collapse {
            display: none;
            /* Oculta o menu por padrão */
        }

        .navbar-collapse.show {
            display: block;
            /* Exibe o menu quando a classe 'show' é adicionada */
        }
    </style>
</head>

<body id="top">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-ft.png" alt="Logo do Roubbie">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click" href="index.php"><span class="d-none-desk"><i class="bi bi-house" aria-hidden="true"></i></span> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/index.php"><span class="d-none-desk"><i class="bi bi-calendar-month" aria-hidden="true"></i></span> Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/sisrot.php"><span class="d-none-desk"><i class="bi bi-calendar-range" aria-hidden="true"></i></span> Rotina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="diario.php"><span class="d-none-desk"><i class="bi bi-pencil-square" aria-hidden="true"></i></span> Diário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="sobre.php"><span class="d-none-desk"><i class="bi bi-info-circle" aria-hidden="true"></i></span> Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/prototipoquiz.php"><span class="d-none-desk"><i class="bi bi-puzzle" aria-hidden="true"></i></span> Descubra um novo hobby</a>
                        </li>
                    </ul>
                    <ul class="nav-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bi-person navbar-icon" style="border: none;" href="#" id="navbarUserDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu do usuário"><i class="bi bi-person d-none-desk" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarUserDropdownMenuLink">
                                <li><a class="dropdown-item" href="http://localhost/roubbie/login-register/login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
                                <li><a class="dropdown-item" href="http://localhost/roubbie/login-register/cadastro.html">Cadastro</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>