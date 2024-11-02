<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Exibe o conteúdo de $_POST para depuração
    var_dump($_POST);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule</title>
    <link rel="stylesheet" href="../projeto_fullcalendar_js_php-master/fullcalendar.css">
    
</head>
<body class="index-page">

    <div class="modal-opened hidden">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">
                    <h3>Adicionar Novo Evento</h3>
                </div>
                <div class="modal-close">x</div>
            </div>
            <form action="action-event.php" method="POST">
                <input type="text" name="title" placeholder="Título do evento" required>
                <input type="color" name="color" required>
                <input type="datetime-local" name="start" required>
                <input type="datetime-local" name="end" required>
                <input type="hidden" name="usuario_id" value="5">
                <button type="submit">Adicionar Evento</button>
            </form>
        </div>
    </div>

    <div class="calendar-area">
    <button onclick="window.history.back()">sair</button>

        <h2 id="titulo-mes">My Schedule</h2>
        <div style="text-align: center; font-size: small;" class="calendar-area-header">
            <div class="msg">
                <?php
                if (!empty($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
        <div style="text-align: center; font-size: small;" id='calendar'></div>
    </div>

    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
