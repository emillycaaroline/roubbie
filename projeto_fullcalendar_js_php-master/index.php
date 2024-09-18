<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Depura o conteúdo de $_POST
    var_dump($_POST);

    // O resto do código para manipular os eventos
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .calendar-area {
        background-color: white;
        /* Mantém o fundo do calendário separado */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 900px;
        margin: 20px auto;
    }

    h2 {
        color: white;
    }
</style>

<body class="index-page">
      <!-- Adiciona o header -->
      <?php include '../../includes/header.php'; ?>


    <!-- Este arquivo configura a visualização mensal do calendário, com um modal semelhante ao sisrot.php. -->
    <!-- Card para inserir evento -->


    <div class="modal-opened hidden">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">
                    <h3>Cadastrar Evento</h3>
                </div>
                <div class="modal-close">x</div>
            </div>
            <form action="action-event.php" method="POST">
    <input type="text" name="title" placeholder="Título" required>
    <input type="color" name="color" required>
    <input type="datetime-local" name="start" required>
    <input type="datetime-local" name="end" required>
    <input type="hidden" name="usuario_id" value="5"> <!-- ID do usuário atual -->
    <button type="submit">Adicionar Evento</button>
</form>


        </div>
    </div>

    <div class="calendar-area">
        <h2 style="color: black; text-align: center;">Mês Atual</h2>
        <div class="calendar-area-header">
            <div class="msg">
                <?php
                if (!empty($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
        <div id='calendar'></div>
    </div>
    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>