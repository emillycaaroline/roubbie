<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Roubbie - Encontre equilíbrio entre organização e lazer.">
    <meta name="author" content="Equipe Roubbie">
    <title>Sobre o Roubbie</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

    <!-- CUSTOM STYLES -->
    <style>
        main{
            margin-top: 60px;
        }
        body {
            background-image: url('images/colleagues-working-cozy-office-medium-shot.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
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
    </style>
</head>

<body id="top">
    <!-- Adiciona o header -->
    <?php include 'includes/header.php'; ?>

    <!-- Campos para Artigos -->
    <main>
        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Sobre o Roubbie</h2>
                    </div>
                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>
                                <li>
                                    <h4 class="text-white mb-3">Quem Somos?</h4>
                                    <p class="text-white">
                                        No Roubbie, acreditamos que o bem-estar mental é tão importante quanto a saúde física. Por isso, desenvolvemos um aplicativo que transforma a maneira como você se conecta com seus hobbies. Nossa missão é ajudar você a redescobrir e integrar atividades significativas no seu dia a dia, promovendo uma vida mais equilibrada e satisfatória.
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">Por Que o Roubbie?</h4>
                                    <p class="text-white">
                                        Em um mundo onde o estresse e a falta de tempo são comuns, muitos sentem-se sobrecarregados e desconectados de suas paixões. O Roubbie surge como uma solução para essa realidade, oferecendo ferramentas que não apenas incentivam a prática de hobbies, mas também melhoram a saúde mental e emocional. Vamos ajudá-lo a encontrar o prazer nas pequenas coisas e a se reconectar com o que realmente importa.
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">Como Funciona?</h4>
                                    <p class="text-white">
                                        O Roubbie é uma plataforma interativa, repleta de recursos que tornam a descoberta de novos hobbies divertida e acessível. Desde desafios personalizados até sugestões de atividades que se adaptam ao seu estilo de vida, estamos aqui para guiá-lo em sua jornada de autodescoberta e crescimento pessoal.
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-card-checklist"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">O Que Você Vai Encontrar?</h4>
                                    <p class="text-white">
                                        Explore uma diversidade de hobbies, participe de desafios empolgantes e utilize ferramentas práticas para acompanhar seu progresso. O Roubbie oferece uma experiência única que combina lazer e organização, ajudando você a criar um equilíbrio saudável entre suas responsabilidades e suas paixões.
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-award"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">Conexão e Qualidade de Vida</h4>
                                    <p class="text-white">
                                        Mais do que um aplicativo, o Roubbie é uma comunidade que promove a conexão entre pessoas que buscam melhorar sua qualidade de vida. Juntos, podemos transformar a rotina, priorizando o que realmente traz felicidade e satisfação. Venha fazer parte do Roubbie e descubra o poder de um hobby bem praticado!
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-award"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Adiciona o footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>
