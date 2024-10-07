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

        .navbar-nav .nav-item .nav-link {
            font-size: 14px;
        }

        .bi {
            font-size: 1.5rem;
        }

        @media (max-width: 767.98px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 12px;
            }
        }

        .navbar-collapse {
            display: none;
        }

        .navbar-collapse.show {
            display: block;
        }

        .mobile-nav {
            display: none;
        }

        @media (max-width: 767.98px) {
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

            .mobile-nav li {
                text-align: center;
            }

            .mobile-nav a {
                color: #ffffff;
                text-decoration: none;
            }

            .mobile-nav svg {
                margin-bottom: 5px;
                fill: #ffffff;
            }
        }
    </style>
</head>

<body id="top">
    <!-- Header -->
    <header>
        <nav style="background: linear-gradient(to right, #13547a, #80d0c7);
" class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-ft.png" alt="Logo do Roubbie">
                </a>
                <button id="menuButton" aria-label="Abrir menu de configurações" class="navbar-toggler" type="button">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M2 6h20v3H2V6Z" fill="currentColor"></path>
                        <path d="M2 15h20v3H2v-3Z" fill="currentColor"></path>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/index.php">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/sisrot.php">Rotina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="diario.php"> Diário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/quiz.php">Descubra um novo hobby</a>
                        </li>
                    </ul>


                    <!-- Login/cadastro -->
                    <ul class="nav-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-icon bi-person" style="border: none;" href="#" id="navbarUserDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu do usuário">
                                <!-- O ícone bi-person já está aplicado na classe, não há necessidade de adicionar um <i> aqui -->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarUserDropdownMenuLink">
                                <li><a class="dropdown-item" href="http://localhost/roubbie/login-register/login.php">Login</a></li>
                                <li><a class="dropdown-item" href="http://localhost/roubbie/login-register/cadastro.html">Cadastro</a></li>
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
            <li><a href="index.php"><i class="bi bi-house"></i> </a></li>
            <li><a href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/index.php"><i class="bi bi-calendar-month"></i></a></li>
            <li><a href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/sisrot.php"><i class="bi bi-calendar-range"></i></a></li>
            <li><a href="diario.php"><i class="bi bi-pencil-square"></i> </a></li>
            <li><a href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/sisrot.php"><i class="bi bi-calendar-range"></i></a></li>
            <li><a href="diario.php"><i class="bi bi-pencil-square"></i> </a></li>

            </li>

        </ul>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("menuButton");
            const menuConfig = document.getElementById("menuConfig");
            const closeMenu = document.getElementById("closeMenu");

            menuButton.addEventListener("click", function() {
                menuConfig.classList.toggle("show");
            });

            closeMenu.addEventListener("click", function() {
                menuConfig.classList.remove("show");
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("menuButton");
            const menuConfig = document.getElementById("menuConfig");
            const closeMenu = document.getElementById("closeMenu");

            menuButton.addEventListener("click", function() {
                menuConfig.classList.toggle("show");
            });

            closeMenu.addEventListener("click", function() {
                menuConfig.classList.remove("show");
            });
        });
    </script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>