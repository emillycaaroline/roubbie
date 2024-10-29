<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo ao Roubbie</title>

    <!-- CSS FILES -->
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.0.0/introjs.min.css" rel="stylesheet">

    <style>
        /* (Estilos existentes) */
    </style>
</head>

<body>
    <?php include 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

    <div class="container mt-4">
        <h2>Bem-vindo ao Roubbie!</h2>
        <p>A solução gratuita, divertida e eficaz para equilibrar sua rotina com hobbies que você ama!</p>
        
        <button class="btn btn-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#infoModal" aria-label="Mais informações sobre o Roubbie">Saiba Mais</button>

        <button onclick="startTutorial()" class="btn btn-primary mt-3 mb-4" aria-label="Iniciar o tutorial sobre o aplicativo">Conheça o app</button>
        
        <!-- Botões para login e cadastro -->
        <div class="text-center buttons mb-4">
            <button class="btn btn-register" onclick="window.location.href='http://localhost/roubbie/login-register/cadastro.php'" aria-label="Ir para a página de cadastro">Criar uma conta</button>

            <button class="btn btn-register" onclick="window.location.href='http://localhost/roubbie/login-register/login.php'" aria-label="Ir para a página de cadastro">Já tenho uma conta</button>
        </div>
        
        <!-- Lista de Benefícios -->
        <ul class="benefits-list">
            <li>💡 Acesso ao seu Diário Pessoal</li>
            <li>📅 Gerenciamento de Eventos e Compromissos</li>
            <li>🗓️ Organização da sua Rotina</li>
            <li>🎨 Dicas personalizadas de Hobbies</li>
        </ul>

        <!-- Imagens de hobbies -->
        <div class="hobby-images">
            <img src="https://cdn.vectopus.com/getillustrations/illustrations/A90CD609265B/5453B215A834/uploads-activities-activity-hobby-leisure-fun-hobbies-origami-fold-paper-512.png" alt="Hobby Origami">
            <img src="https://cdn1.iconfinder.com/data/icons/filled-outline-hobbies-1/64/hobby-origami-paper-bird-old-school-512.png" alt="Origami Paper Bird">
        </div>

        <section class="footer mt-5">
            <p>© 2024 Roubbie. Todos os direitos reservados.</p>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Sobre o Roubbie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>O Roubbie é um aplicativo desenvolvido para ajudar você a encontrar um equilíbrio entre sua rotina e seus hobbies. Aqui você pode gerenciar seu diário pessoal, organizar eventos e compromissos e receber dicas personalizadas de atividades que você ama!</p>
                    <p>Descubra novas paixões e otimize seu tempo livre com o Roubbie!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.0.0/intro.min.js"></script>
    <script>
        function startTutorial() {
            introJs().start();
        }
    </script>
</body>

</html>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo ao Roubbie</title>

    <!-- CSS FILES -->
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.0.0/introjs.min.css" rel="stylesheet">

    <style>
        /* Adicione seus estilos personalizados aqui */
    </style>
</head>

<body>
    <?php include 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

    <div class="container mt-4">
        <h2>Bem-vindo ao Roubbie!</h2>
        <p>A solução gratuita, divertida e eficaz para equilibrar sua rotina com hobbies que você ama!</p>

        <button class="btn btn-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#infoModal" aria-label="Mais informações sobre o Roubbie">Saiba Mais</button>

        <button onclick="startTutorial()" class="btn btn-primary mt-3 mb-4" aria-label="Iniciar o tutorial sobre o aplicativo">Conheça o app</button>

        <!-- Botões para login e cadastro -->
        <div class="text-center buttons mb-4">
            <button class="btn btn-register" onclick="window.location.href='http://localhost/roubbie/login-register/cadastro.php'" aria-label="Ir para a página de cadastro">Criar uma conta</button>
            <button class="btn btn-register" onclick="window.location.href='http://localhost/roubbie/login-register/login.php'" aria-label="Ir para a página de login">Já tenho uma conta</button>
        </div>

        <!-- Imagens de hobbies -->
        <div class="hobby-images text-center mb-4">
            <img src="https://cdn.vectopus.com/getillustrations/illustrations/A90CD609265B/5453B215A834/uploads-activities-activity-hobby-leisure-fun-hobbies-origami-fold-paper-512.png" alt="Hobby Origami" class="img-fluid" style="max-width: 200px;">
            <img src="https://cdn1.iconfinder.com/data/icons/filled-outline-hobbies-1/64/hobby-origami-paper-bird-old-school-512.png" alt="Origami Paper Bird" class="img-fluid" style="max-width: 200px;">
        </div>

    </div>

    <!-- Modal principal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Sobre o Roubbie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>O Roubbie é um aplicativo desenvolvido para ajudar você a encontrar um equilíbrio entre sua rotina e seus hobbies.</p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#diarioModal">Saiba Mais sobre o Diário Pessoal</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Diário Pessoal -->
    <div class="modal fade" id="diarioModal" tabindex="-1" aria-labelledby="diarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="diarioModalLabel">Acesso ao seu Diário Pessoal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Mantenha um diário digital onde você pode registrar seus pensamentos, sentimentos e experiências diárias.</p>
                    <p>O Roubbie facilita a criação e a visualização de entradas, ajudando você a acompanhar seu crescimento pessoal e suas emoções.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventosModal">Próximo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gerenciamento de Eventos -->
    <div class="modal fade" id="eventosModal" tabindex="-1" aria-labelledby="eventosModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventosModalLabel">Gerenciamento de Eventos e Compromissos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Organize seus compromissos e eventos com facilidade. O Roubbie permite que você adicione, edite e exclua eventos, garantindo que você nunca perca um compromisso importante.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rotinaModal">Próximo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Organização da Rotina -->
    <div class="modal fade" id="rotinaModal" tabindex="-1" aria-labelledby="rotinaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rotinaModalLabel">Organização da sua Rotina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tenha um controle melhor sobre suas atividades diárias. O aplicativo ajuda você a planejar sua rotina de forma eficiente, garantindo que você tenha tempo para tudo, desde trabalho até hobbies.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dicasModal">Próximo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Dicas Personalizadas -->
    <div class="modal fade" id="dicasModal" tabindex="-1" aria-labelledby="dicasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dicasModalLabel">Dicas Personalizadas de Hobbies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Receba sugestões de hobbies com base em seus interesses e preferências. O Roubbie ajuda você a explorar novas atividades e encontrar paixões ocultas que podem enriquecer sua vida.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <section class="footer mt-5">
        <p>© 2024 Roubbie. Todos os direitos reservados.</p>
    </section>

    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.0.0/intro.min.js"></script>

    <script>
        function startTutorial() {
            introJs().start();
        }
    </script>
</body>

</html>
