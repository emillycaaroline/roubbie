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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
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
        body {
            background-image: url('images/colleagues-working-cozy-office-medium-shot.jpg');
            /* Verifique o caminho para a imagem de fundo */
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
            background: rgba(0, 0, 0, 0.2);
            /* Overlay preto com 20% de opacidade */
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
                                        A ideia do Roubbie surgiu da nossa preocupação com um problema crescente: a
                                        saúde mental. Nós, da equipe formada por Larissa, Lara, Amanda, Emilly, Ana
                                        Paula e Vitória, percebemos que a ansiedade, a depressão e a síndrome do pânico
                                        estão se tornando cada vez mais comuns e afetando muitas pessoas ao nosso
                                        redor. Isso nos motivou a criar uma solução inovadora!
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">Motivação</h4>
                                    <p class="text-white">
                                        O Roubbie é mais do que um simples aplicativo; é uma proposta para transformar a
                                        abordagem da saúde mental. Queremos destacar a importância dos hobbies,
                                        frequentemente negligenciados, e mostrar como essas atividades podem promover um
                                        equilíbrio saudável entre lazer e trabalho, ajudando a viver de forma mais
                                        organizada e plena.
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">O Desafio</h4>
                                    <p class="text-white">
                                        A falta de um hobby pode resultar em sentimentos de tédio, apatia e desânimo,
                                        que podem aumentar a ansiedade e a depressão. Muitos jovens enfrentam
                                        dificuldades para encontrar um hobby que combine lazer e desenvolvimento pessoal.
                                        O Roubbie visa preencher essa lacuna, ajudando a descobrir e integrar novos
                                        interesses na rotina diária.
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-card-checklist"></i>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="text-white mb-3">O Que Você Vai Encontrar no Roubbie?</h4>
                                    <p class="text-white">
                                        Oferecemos uma plataforma interativa e dinâmica com uma variedade de hobbies para
                                        explorar, desafios para engajar e recursos para acompanhar seu progresso. É a
                                        sua oportunidade de criar um equilíbrio saudável entre lazer e organização.
                                    </p>
                                    <p class="text-white">
                                        O Roubbie é sobre conexão, qualidade de vida e organização. Nosso objetivo é
                                        melhorar a saúde mental dos nossos usuários e ajudar a fortalecer relações
                                        sociais, alcançando um equilíbrio real entre trabalho e lazer.
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
