<?php
session_start();
require_once 'C:\xampp\htdocs\roubbie\includes\db_connection.php';
require_once 'C:\xampp\htdocs\roubbie\includes\header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$nome_usuario = htmlspecialchars($_SESSION['nome'] ?? 'Usuário'); // Obtém o nome do usuário da sessão
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Roubbie - Encontre hobbies que combinam com você e melhore seu bem-estar mental.">
    <meta name="keywords" content="hobbies, bem-estar, saúde mental, Roubbie">
    <meta name="author" content="Roubbie Team">
    <title>Bem-vindo ao Roubbie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            background-color: #f0f8ff;
            /* Fundo claro para um contraste suave */
            color: #333;
            /* Texto em cinza escuro para melhor legibilidade */
            font-family: Arial, sans-serif;
            /* Fonte padrão */
            line-height: 1.6;
        }

        /* Cabeçalho */
        header {
            background-color: #13547a;
            /* Azul escuro */
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 5px solid #80d0c7;
            /* Verde água */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        header p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .btn-custom {
            background-color: #80d0c7;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #13547a;
            transform: scale(1.05);
        }

        /* Conteúdo principal */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }

        #welcome-container,
        #sobre,
        #recursos,
        #porque-escolher {
            padding: 30px;
            margin: 20px auto;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        /* Carrossel */
        .carousel-inner img {
            height: 400px;
            object-fit: cover;
            border-radius: 5px;
        }

        /* Cartões */
        .card {
            border: none;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            border-radius: 5px 5px 0 0;
        }

        .card-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #666;
            font-size: 1em;
        }

        /* Lista na seção "Por que escolher o Roubbie?" */
        #porque-escolher ul {
            list-style: none;
            padding: 0;
        }

        #porque-escolher li {
            margin: 10px 0;
            font-size: 1.1em;
            color: #555;
        }

        #porque-escolher li strong {
            color: #333;
        }

        /* Rodapé */
        footer {
            background-color: #13547a;
            color: white;
            padding: 30px 0;
            text-align: center;
            font-size: 0.9em;
            margin-top: 20px;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            header h1 {
                font-size: 2em;
            }

            .carousel-inner img {
                height: 250px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Oi, <?php echo $nome_usuario; ?>! 🎉</h1>
        <p>Você se cadastrou com sucesso! Agora é hora de explorar o Roubbie e se divertir!</p>
        <a href="index.php" class="btn btn-custom">Vamos para o Dashboard!</a>
    </header>

    <div class="container">
        <!-- Seções Sobre, Carrossel e Recursos -->
        <section id="sobre" class="my-5">
            <h2 class="text-center">O que é o Roubbie?</h2>
            <p class="text-center">O Roubbie é seu novo melhor amigo na busca por hobbies! Ajuda você a encontrar atividades que combinem com seu estilo de vida e a melhorar seu bem-estar mental.</p>

            <div id="featureCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/cadastro/1378.jpg" class="feature-image" alt="Dashboard do Roubbie">
                    </div>
                    <div class="carousel-item">
                        <img src="imgwel/rotina.jpg" class="feature-image" alt="Agenda do Roubbie">
                    </div>
                    <div class="carousel-item">
                        <img src="imgwel/agenda.jpg" class="feature-image" alt="Agenda do Roubbie">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#featureCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featureCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section id="recursos" class="my-5">
            <h2 class="text-center">Recursos</h2>
            <div class="row text-center">
                <!-- Card Dashboard -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="imgwel/dashboard.jpg" class="card-img-top" alt="Dashboard">
                        <div class="card-body">
                            <h5 class="card-title">Dashboard: Seu Centro de Controle</h5>
                            <p class="card-text">Aqui você vê tudo de uma vez! Monitore seu progresso em hobbies e tarefas.</p>
                        </div>
                    </div>
                </div>
                <!-- Card Agenda -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="imgwel/agenda.jpg" class="card-img-top" alt="Agenda">
                        <div class="card-body">
                            <h5 class="card-title">Agenda: Organize sua Vida</h5>
                            <p class="card-text">Mantenha tudo em ordem! Adicione compromissos e atividades importantes.</p>
                        </div>
                    </div>
                </div>
                <!-- Card Diário -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="imgwel/diario.jpg" class="card-img-top" alt="Diário">
                        <div class="card-body">
                            <h5 class="card-title">Diário: Registre suas Aventuras</h5>
                            <p class="card-text">Capture seus pensamentos e sentimentos! Escreva sobre suas experiências diárias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="porque-escolher" class="my-5">
            <h2 class="text-center">Por que escolher o Roubbie?</h2>
            <ul class="list-unstyled text-center">
                <li><strong>Baseado em pesquisa:</strong> Metodologias comprovadas que ajudam você a melhorar seu bem-estar mental e a descobrir novas paixões.</li>
                <li><strong>Divertido e motivador:</strong> Recursos interativos que transformam o aprendizado e a descoberta de hobbies em uma experiência divertida.</li>
                <li><strong>Acessível:</strong> Gratuito e fácil de usar, acessível para todos os públicos.</li>
            </ul>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Roubbie. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> 