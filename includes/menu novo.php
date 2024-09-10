<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início - Roubbie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos comuns */
        body {
            margin: 0;
            padding: 0;
        }

        .navbar-brand img {
            width: 100px;
        }

        .navbar-nav .nav-link {
            color: #13547a;
        }

        .navbar-nav .nav-link:hover {
            color: #80d0c7;
        }

        /* Menu principal (para desktops) */
        @media (min-width: 768px) {
            #mobile-nav {
                display: none;
            }
        }

        /* Menu inferior (para dispositivos móveis) */
        @media (max-width: 767.98px) {
            .navbar {
                display: none;
            }

            #mobile-nav {
                display: block;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: linear-gradient(to right, #13547a, #80d0c7);
                color: #ffffff;
                border-top: 1px solid #80d0c7;
                z-index: 1000;
                text-align: center;
            }

            #mobile-nav ul {
                display: flex;
                justify-content: space-around;
                padding: 10px 0;
                margin: 0;
                list-style: none;
            }

            #mobile-nav li {
                text-align: center;
            }

            #mobile-nav a {
                color: #ffffff;
                text-decoration: none;
            }

            #mobile-nav svg {
                margin-bottom: 5px;
                fill: #ffffff;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/100" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rotina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Diário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hobby</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bottom Mobile Menu -->
    <div id="mobile-nav" class="d-lg-none">
        <ul>
            <li><a href="#"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 2V16L5 11H14C15.105 11 16 10.105 16 9V2C16 0.895 15.105 0 14 0H2C0.895 0 0 0.895 0 2Z" fill="#ffffff"></path></svg><div class="name">Home</div></a></li>
            <li><a href="#"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.7 11.3C13.6 10.1 14.1 8.7 14.1 7.1C14.1 3.2 11 0 7.1 0C3.2 0 0 3.2 0 7.1C0 11 3.2 14.2 7.1 14.2C8.7 14.2 10.2 13.7 11.3 12.8L14.3 15.8C14.5 16 14.8 16.1 15 16.1C15.2 16.1 15.5 16 15.7 15.8C16.1 15.4 16.1 14.8 15.7 14.4L12.7 11.3ZM7.1 12.1C4.3 12.1 2 9.9 2 7.1C2 4.3 4.3 2 7.1 2C9.9 2 12.2 4.3 12.2 7.1C12.2 9.9 9.9 12.1 7.1 12.1Z" fill="#ffffff"></path></svg><div class="name">Search</div></a></li>
            <li><a href="#"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 2V16L5 11H14C15.105 11 16 10.105 16 9V2C16 0.895 15.105 0 14 0H2C0.895 0 0 0.895 0 2Z" fill="#ffffff"></path></svg><div class="name">Chat</div></a></li>
            <li><a href="#"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346625 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0V0ZM10.629 11.618L8 10.236L5.371 11.618L5.871 8.691L3.747 6.618L6.686 6.191L8 3.528L9.314 6.191L12.253 6.618L10.127 8.691L10.629 11.618Z" fill="#ffffff"></path></svg><div class="name">Rewards</div></a></li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
