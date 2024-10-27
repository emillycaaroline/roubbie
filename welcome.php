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
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.0.0/introjs.min.css" rel="stylesheet">

    <style>
        :root {
    --primary-color: #1ABC9C;
    --secondary-color: #2C3E50;
    --background-color: #f0f2f5;
    --card-background: #fff;
    --text-color: #34495E;
    --muted-text: #7F8C8D;
    --box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    min-height: 100vh;
    background-color: var(--background-color);
}

.dashboard-container {
    display: flex;
    width: 100%;
}

.sidebar {
    background-color: var(--secondary-color);
    color: #ECF0F1;
    padding: 1.5rem 1rem;
    width: 240px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.sidebar h3 {
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    font-weight: 600;
}

.nav-link {
    color: #ECF0F1;
    display: flex;
    align-items: center;
    margin: 1rem 0;
    padding: 0.8rem 1rem;
    width: 100%;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.3s ease;
}

.nav-link:hover {
    background-color: var(--primary-color);
}

.main-content {
    flex: 1;
    padding: 2rem;
    background-color: #F5F5F5;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem;
    background-color: var(--primary-color);
    color: #fff;
    border-radius: 12px;
    box-shadow: var(--box-shadow);
}

.section-box {
    background-color: var(--card-background);
    padding: 2rem;
    border-radius: 12px;
    margin: 1.5rem 0;
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: transform 0.3s ease;
}

.section-box:hover {
    transform: translateY(-5px);
}

.section-box h2 {
    color: var(--text-color);
    font-size: 1.4rem;
    margin-bottom: 1rem;
}

.profile-section {
    display: flex;
    gap: 2rem;
    margin-top: 1.5rem;
}

.profile-card {
    background-color: var(--card-background);
    padding: 2rem;
    border-radius: 12px;
    box-shadow: var(--box-shadow);
    text-align: center;
    flex: 1;
}

.footer {
    text-align: center;
    padding: 1rem;
    color: var(--muted-text);
    font-size: 0.9rem;
    margin-top: 1rem;
}

@media (max-width: 768px) {
    .sidebar {
        display: none;
    }

    .main-content {
        padding: 1rem;
    }

    .profile-section {
        flex-direction: column;
    }
}
:root {
            --primary-color: #1ABC9C;
            --secondary-color: #2C3E50;
            --background-color: #f0f2f5;
            --card-background: #fff;
            --text-color: #34495E;
            --muted-text: #7F8C8D;
            --box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: var(--background-color);
        }

        .dashboard-container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            background-color: var(--secondary-color);
            color: #ECF0F1;
            padding: 1.5rem 1rem;
            width: 240px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .nav-link {
            color: #ECF0F1;
            display: flex;
            align-items: center;
            margin: 1rem 0;
            padding: 0.8rem 1rem;
            width: 100%;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .nav-link:hover {
            background-color: var(--primary-color);
        }

        .main-content {
            flex: 1;
            padding: 2rem;
            background-color: #F5F5F5;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 12px;
            box-shadow: var(--box-shadow);
        }

        .section-box {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s ease;
        }

        .section-box:hover {
            transform: translateY(-5px);
        }

        .section-box h2 {
            color: var(--text-color);
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .profile-section {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .profile-card {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--box-shadow);
            text-align: center;
            flex: 1;
        }

        .footer {
            text-align: center;
            padding: 1rem;
            color: var(--muted-text);
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main-content {
                padding: 1rem;
            }

            .profile-section {
                flex-direction: column;
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
                color: white; /* Garantindo que os links sejam brancos no mobile */
            }

            .mobile-nav a:hover {
                color: #80d0c7; /* Mudança de cor ao passar o mouse no mobile */
            }
        }

        i {
            color: white; /* Garantindo que todos os ícones sejam brancos */
        }
      
    </style>
</head>
<?php     include 'C:\xampp\htdocs\roubbie\includes\header.php';
 ?>
<body>
    <div class="container mt-4">
        <h1 class="intro-title">Bem-vindo ao Roubbie!</h1>
        <p class="text-center">Antes de começar, vamos explorar as principais seções do seu novo dashboard.</p>

        <button onclick="startTutorial()" class="btn btn-primary mt-3 mb-4">Iniciar Tutorial</button>
        <button onclick="window.location.href='index.php'" class="btn btn-secondary mt-3 mb-4">Pular Tutorial</button>

        <!-- Seção do Diário -->
        <section class="section-box" id="feature1">
            <h2>Diário</h2>
            <p>Essa seção permite que você registre suas notas e reflexões pessoais.</p>
            <button class="btn btn-outline-primary">Explorar Diário</button>
        </section>

        <!-- Seção de Eventos -->
        <section class="section-box" id="feature2">
            <h2>Eventos</h2>
            <p>Acompanhe e gerencie seus eventos pessoais, sejam eles compromissos ou lembretes.</p>
            <button class="btn btn-outline-primary">Explorar Eventos</button>
        </section>

        <!-- Seção de Tarefas -->
        <section class="section-box" id="feature3">
            <h2>Tarefas Pendentes</h2>
            <p>Visualize suas tarefas e organize suas pendências para manter-se no controle.</p>
            <button class="btn btn-outline-primary">Explorar Tarefas</button>
        </section>

        <!-- Seção de Compromissos -->
        <section class="section-box" id="feature4">
            <h2>Compromissos</h2>
            <p>Revise e acompanhe os compromissos agendados para planejar melhor seu tempo.</p>
            <button class="btn btn-outline-primary">Explorar Compromissos</button>
        </section>

        <!-- Seção de Horários Livres -->
        <section class="section-box" id="feature5">
            <h2>Horários Livres</h2>
            <p>Encontre espaços em sua agenda para novos hobbies e atividades relaxantes.</p>
            <button class="btn btn-outline-primary">Explorar Horários Livres</button>
        </section>
    </div>

    <!-- JavaScript FILES -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.0.0/intro.min.js"></script>

    <script>
        function startTutorial() {
            introJs().setOptions({
                steps: [
                    { intro: "Bem-vindo ao Roubbie! Vamos explorar o dashboard." },
                    { element: '#feature1', intro: "Diário: Guarde suas notas e reflexões aqui." },
                    { element: '#feature2', intro: "Eventos: Acompanhe compromissos importantes." },
                    { element: '#feature3', intro: "Tarefas Pendentes: Controle suas pendências." },
                    { element: '#feature4', intro: "Compromissos: Revise suas marcações e compromissos." },
                    { element: '#feature5', intro: "Horários Livres: Encontre tempo para novos hobbies." }
                ],
                showBullets: false,
                nextLabel: 'Próximo',
                prevLabel: 'Anterior',
                doneLabel: 'Concluir'
            }).start();
        }
    </script>
</body>

</html>
