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

// Função para contar registros
function getCount($conn, $table, $status = null) {
    $query = "SELECT COUNT(*) AS total FROM $table";
    if ($status) {
        $query .= " WHERE status = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $status);
    } else {
        $stmt = $conn->prepare($query);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['total'] ?? 0;
}

// Contagem de registros
$diario_count = getCount($conn, 'diario');
$events_count = getCount($conn, 'events', 'pendente');
$tarefas_count = getCount($conn, 'tarefas', 'pendente');
$compromissos_count = getCount($conn, 'compromissos', null);

// Obtém o nome do usuário da sessão
$nome_usuario = $_SESSION['nome'] ?? 'Usuário';
?>

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
    
    <style>
   /* Adicionando um estilo de fundo para as seções */
.section-box {
    background-color: var(--card-background);
    padding: 2rem;
    border-radius: 12px;
    margin: 1.5rem 0;
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.section-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

/* Estilizando o botão de detalhes */
.details-button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: var(--primary-color);
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
    font-weight: bold;
}

.details-button:hover {
    background-color: #16a085; /* Cor mais escura para o hover */
    transform: scale(1.05); /* Aumentar um pouco o botão no hover */
}

/* Estilizando a seção de perfil */
.profile-section {
    display: flex;
    gap: 2rem;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.profile-card {
    background-color: var(--card-background);
    padding: 2rem;
    border-radius: 12px;
    box-shadow: var(--box-shadow);
    text-align: center;
    flex: 1;
    min-width: 200px;
}

/* Estilo do cabeçalho */
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

/* Footer */
.footer {
    text-align: center;
    padding: 1rem;
    color: var(--muted-text);
    font-size: 0.9rem;
    margin-top: 1rem;
}

    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="main-content">
            <header class="header">
                <h1>Status - Bem-vindo, <?php echo htmlspecialchars($nome_usuario); ?>!</h1>
                <p>Usuários (<?php echo $diario_count; ?> perfil)</p>
            </header>
           
            <!-- Conteúdo do dashboard do usuário cadastrado e logado -->
        <?php
        function createSection($title, $content, $detailsLink = '') {
            return "
                <section class='section-box'>
                    <h2>$title</h2>
                    <p>$content</p>
                    $detailsLink
                </section>
            ";
        }

        // Uso da função no dashboard 
     // Uso da função no dashboard
echo createSection("Diário", "Minhas Notas ($diario_count registradas)", '<a href="projeto_fullcalendar_js_php-master/status-rotina.php/#entries" class="details-button">Ver diario</a>');
echo createSection("Eventos", "$events_count evento(s) pendente(s).", '<a href="projeto_fullcalendar_js_php-master/status-rotina.php" class="details-button">Ver eventos</a>');
echo createSection("Tarefas", "$tarefas_count tarefa(s) pendente(s).", '<a href="status-rotina.php" class="details-button">Ver Detalhes</a>');
echo createSection("Compromissos", "$compromissos_count compromisso(s) pendente(s).", '<a href="projeto_fullcalendar_js_php-master/status-rotina.php/#compromisso" class="details-button">compromisso</a>');
?>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
</body>
</html>