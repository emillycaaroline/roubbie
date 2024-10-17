<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Exibe o conteúdo de $_POST para depuração
    var_dump($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    :root {
        --background-color: #ffff;
        --text-color: #333;
        --primary-color: #00796b;
        --secondary-color: #004d40;
    }

    body {
        background-color: var(--background-color);
        color: var(--text-color);
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
    }

    h2 {
        color: black;
        text-align: center;
        margin: 20px 0;
    }

    button {
        background-color: var(--primary-color);
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin: 10px 0;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        display: block;
        font-size: 1rem;
    }

    button:hover {
        background-color: black;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }

    .modal-body input,
    .modal-body select {
        border: 1px solid var(--primary-color);
        border-radius: 5px;
        padding: 10px;
        transition: border-color 0.3s;
        margin-bottom: 10px;
        font-size: 14px;
        outline: none;
    }

    .modal-body input:focus {
        border-color: var(--secondary-color);
    }
    .fc-daygrid-day-frame, .fc-scrollgrid-sync-inner {
    height: 50px; /* Aumente a altura para mais espaço visual */
    width: 100%; /* Ajusta a largura para 100% do contêiner pai */
    padding: 5px; /* Espaçamento interno */
    margin: 0; /* Margem padrão */
    border: 1px  rgb(218,220,224); /* Borda leve */
    border-radius: 3px; /* Bordas arredondadas */
    transition: background-color 0.3s ease, transform 0.2s ease; 
}

.fc-daygrid-day-frame:hover, .fc-scrollgrid-sync-inner:hover {
    background-color: rgba(0, 121, 107, 0.1); /* Cor de fundo ao passar o mouse */
    transform: scale(1.02); /* Aumenta ligeiramente o tamanho ao passar o mouse */
}


    .modal {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        animation: fadeIn 0.3s ease;
        width: 90%;
        max-width: 500px;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        button { width: 100%; padding: 10px; }
        .modal { padding: 15px; }
        .modal-body input, .modal-body select { font-size: 16px; padding: 8px; }
        .modal-footer button { width: 100%; }
    }

    #calendar {
        width: 100%;
        height: calc(100vh - 160px);
        box-sizing: border-box;
    }

    .modal-opened {
        position: fixed;
        width: 100%;
        height: 100vh;
        background-color: rgba(19, 84, 122, 0.5);
        z-index: 9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #e0e0e0;
        margin-bottom: 10px;
    }

    .modal-title h3 {
        color: #13547a;
        margin: 0;
    }

    .modal-close {
        cursor: pointer;
        color: #13547a;
        font-weight: bold;
        font-size: 20px;
    }

    .modal-body {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    .modal-footer {
        display: flex;
        justify-content: flex-end;
    }

    .modal-footer button {
        padding: 10px 15px;
        background-color: #00796b;
        border: none;
        color: #fff;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .modal-footer button:hover {
        background-color: #004d40;
    }

    .hidden {
        display: none;
    }

    h2#titulo-mes{
        color: var(--text-color);
        font-size: 1.8rem;
        text-align: center;
        margin: 20px 0;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        font-weight: bold;
        text-transform: uppercase;
        
    }
</style>

<body class="index-page">
    <button onclick="window.history.back()">Voltar</button>

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
                <input type="hidden" name="usuario_id" value="5">
                <button type="submit">Adicionar Evento</button>
            </form>
        </div>
    </div>

    <div class="calendar-area">
        <h2 id="titulo-mes">Mês Atual</h2>
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
