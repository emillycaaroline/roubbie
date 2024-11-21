<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roubbie Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php require_once 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

    <div class="dashboard-container">
        <header class="header" role="banner">
            <!-- <h1>Bem-vindo, <?php echo htmlspecialchars($user_id); ?>!</h1> -->
        </header>

        <main class="card-grid" role="main" aria-label="Dashboard de atividades"> 
            <!-- Eventos -->
            <div class="card" aria-labelledby="eventos-title">
                <h2 id="eventos-title">Eventos</h2>
                <p>Veja e organize seus eventos próximos.</p>
                <img src="img/icones/rotina.png" width="100" height="100" class="icon" alt="Ícone de Eventos" style="display: block; margin: 0 auto;">
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php" class="details-button" aria-label="Ver Eventos">Ver Eventos</a>
            </div>

            <!-- Compromissos -->
            <div class="card" aria-labelledby="compromissos-title">
                <h2 id="compromissos-title">Compromissos</h2>
                <p>Confira e gerencie seus compromissos agendados.</p>
                <img src="img/icones/agenda.png" width="100" height="100" class="icon" alt="Ícone de Compromissos" style="display: block; margin: 0 auto;">
                <a href="projeto_fullcalendar_js_php-master/index.php" class="details-button" aria-label="Ver Compromissos">Ver Compromissos</a>
            </div>

            <!-- Tarefas Pendentes -->
            <div class="card" aria-labelledby="tarefas-title">
                <h2 id="tarefas-title">Tarefas Pendentes</h2>
                <p>Gerencie suas tarefas e acompanhe o progresso.</p>
                <img src="img/icones/home.png" width="100" height="100" class="icon" alt="Ícone de Tarefas Pendentes" style="display: block; margin: 0 auto;">
                <a href="projeto_fullcalendar_js_php-master/status-rotina.php/#tarefas" class="details-button" aria-label="Ver Tarefas Pendentes">Ver Tarefas</a>
            </div>

            <!-- Rotina -->
            <div class="card" aria-labelledby="rotina-title">
                <h2 id="rotina-title">Rotina</h2>
                <p>Visite sua rotina e ajuste conforme necessário.</p>
                <img src="img/icones/rotina.png" width="100" height="100" class="icon" alt="Ícone de Rotina" style="display: block; margin: 0 auto;">
                <a href="projeto_fullcalendar_js_php-master/sisrot.php" class="details-button" aria-label="Ver Minha Rotina">Minha Rotina</a>
            </div>

            <!-- Hobbies -->
            <div class="card" aria-labelledby="hobbies-title">
                <h2 id="hobbies-title">Meus obbies</h2>
                <p>Descubra e pratique novos hobbies.</p>
                <img src="img/icones/hobbies.png" width="100" height="100" class="icon" alt="Ícone de Hobbies" style="display: block; margin: 0 auto;">
                <a href="quiz.php" class="details-button" aria-label="Ver Hobbies">Ver Hobbies</a>
            </div>

        </main>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
    <footer style="font-size: small;">
    <div id="quotes">
            <p>"A felicidade não está na felicidade em si, mas na busca dela!"</p>
            <a href="https://br.freepik.com/search" target="_blank">Ícone de Kiranshastry</a>
            <a href="https://br.freepik.com/search" target="_blank">Ícone de Iconmas</a>
            <a href="https://br.freepik.com/search" target="_blank">Ícone de Afif Fudin</a>
            <a href="https://br.freepik.com/search" target="_blank">Ícone de Elzicon</a>
            <a href="https://br.freepik.com/icones/rotina" target="_blank">Ícone de Freepik</a>
        </div>
    </footer>
</body>

</html>
