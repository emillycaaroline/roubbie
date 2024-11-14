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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    <!-- CUSTOM STYLES -->
    <style>
        /* General styles */
        .text-white {
            color: #fff;
        }

        /* Navbar styles */
        .navbar {
            background: linear-gradient(to right, #13547a, #80d0c7);
            margin-top: auto;
            border: 1px solid linear-gradient(to right, #13547a, #80d0c7);
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
            border: 1px solid linear-gradient(to right, #13547a, #80d0c7);
        }

        @media (max-width: 767.98px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 12px;
            }

            .mobile-nav {
                background-color: #fff;
                display: block;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                color: #13547a;
                border: 1px solid linear-gradient(to right, #13547a, #80d0c7);
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
                border: 1px solid linear-gradient(to right, #13547a, #80d0c7);
            }

            .mobile-nav a {
                color: #13547a;
            }

            .mobile-nav a:hover {
                color: #80d0c7;
            }
        }

        /* Icon styling */
        i {
            color: #13547a;
        }
a#navbarUserDropdownMenuLink{
    background-color: #13547a;
}
/* Estilos para dispositivos móveis */
@media (max-width: 768px) {
    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .icon {
        width: 80px;
        height: 80px;
    }

    .details-button {
        padding: 10px 15px;
        margin-top: 10px;
    }
}

/* Menu com ícones */
.menu-mobile {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.menu-mobile a {
    padding: 10px;
    text-decoration: none;
    font-size: 18px;
    color: #000;
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.menu-mobile a .fa {
    margin-right: 10px;
}

    </style>
</head>

<body id="top">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="/roubbie/img/logo/lgroubbie (1).png" alt="Logo do Roubbie" aria-label="Logo do Roubbie">
                </a>
                <button id="menuButton" aria-label="Abrir menu de navegação" class="navbar-toggler" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/index.php">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/sisrot.php">Rotina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="diario.php">Diário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="http://localhost/roubbie/quiz.php">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click" href="sobre.php">Sobre</a>
                        </li>
                    </ul>

                    <!-- Login/cadastro -->
                    <ul class="nav-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-icon bi-person" href="#" id="navbarUserDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu do usuário"></a>
                            <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarUserDropdownMenuLink">
                                
                                <li><a class="dropdown-item" href="http://localhost/roubbie/login-register/login.php"><i class="bi bi-person-fill">  </i>Log In</a></li>

                                <li><a class="dropdown-item" href="http://localhost/roubbie/login-register/cadastro.php"><i class="bi bi-person-plus-fill">  </i>Register</a></li>

                                <li><a class="dropdown-item" href="/roubbie/login-register/logout.php"><i class="bi bi-box-arrow-right">  </i>Sign out</a></li>
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
            <li><a href="index.php" aria-label="Ir para a página inicial"><i class="bi bi-house"></i></a></li>
            <li><a href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/index.php" aria-label="Ir para a agenda"><i class="bi bi-calendar-month"></i></a></li>
            <li><a href="http://localhost/roubbie/diario.php" aria-label="Ir para a diario"><i class="bi bi-ui-checks-grid"></i></a></li>
            <li><a href="http://localhost/roubbie/projeto_fullcalendar_js_php-master/sisrot.php" aria-label="Ir para a rotina"><i class="bi bi-ui-checks-grid"></i></a></li>
        </ul>
    </div>                


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuButton = document.getElementById("menuButton");
            const navbarNav = document.getElementById("navbarNav");

            menuButton.addEventListener("click", () => {
                navbarNav.classList.toggle("show");
            });

            // Close the mobile menu when a link is clicked
            const navLinks = document.querySelectorAll(".mobile-nav a");
            navLinks.forEach(link => {
                link.addEventListener("click", () => {
                    navbarNav.classList.remove("show");
                });
            });
        });
    </script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
