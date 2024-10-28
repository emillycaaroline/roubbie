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
    <title>My schedule</title>
    <link rel="stylesheet" href="/projeto_fullcalendar_js_php-master/fullcalendar.css">

</head>
<style>
    :root {
    --background-color: #ffffff;
    --text-color: #333;
    --primary-color: #00796b;
    --secondary-color: #004d40;
}

body {
    background-color: var(--background-color);
    color: var(--text-color);
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    height: 100vh;
    overflow-x: hidden;
}

h2 {
    color: var(--text-color);
    text-align: center;
    margin: 20px 0;
}

button {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 12px 25px;
    margin: 10px 0;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

button:hover {
    background-color: var(--secondary-color);
    transform: translateY(-2px);
}

.modal-body input,
.modal-body select {
    border: 1px solid var(--primary-color);
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
    font-size: 1rem;
    width: 100%;
    outline: none;
    transition: border-color 0.3s ease;
}

.modal-body input:focus {
    border-color: var(--secondary-color);
}

#calendar {
    width: 100%;
    max-width: 1200px;
    height: calc(100vh - 180px);
    box-sizing: border-box;
    margin-top: 20px;
}

.fc-daygrid-day-frame,
.fc-scrollgrid-sync-inner {
    height: 60px;
    padding: 5px;
    border: 1px solid rgb(218, 220, 224);
    border-radius: 3px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.fc-daygrid-day-frame:hover,
.fc-scrollgrid-sync-inner:hover {
    background-color: rgba(0, 121, 107, 0.1);
    transform: scale(1.02);
}

.modal-opened {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(19, 84, 122, 0.5);
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal {
    background-color: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    width: 90%;
    max-width: 500px;
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

.modal-title h3 {
    color: var(--primary-color);
    margin: 0;
}

.modal-close {
    cursor: pointer;
    color: var(--primary-color);
    font-size: 20px;
    font-weight: bold;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
}

.modal-footer button {
    padding: 10px 15px;
    background-color: var(--primary-color);
    border: none;
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.modal-footer button:hover {
    background-color: var(--secondary-color);
}

.hidden {
    display: none;
}

h2#titulo-mes {
    color: var(--text-color);
    font-size: 1.5rem;
    text-align: center;
    padding: 15px;
    font-weight: bold;
    text-transform: uppercase;
}

.calendar-area {
    width: 100%;
    max-width: 1200px;
    padding: 20px;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    h2#titulo-mes {
        font-size: 1.2rem;
    }
    
    button {
        width: 100%;
        padding: 10px;
    }

    .modal {
        padding: 15px;
    }

    .modal-body input,
    .modal-body select {
        font-size: 1rem;
        padding: 10px;
    }

    .modal-footer button {
        width: 100%;
    }
}

</style>
<button onclick="window.history.back()">Voltar</button>

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
        <h2 id="titulo-mes">My schedule</h2>
        <div style="text-align: center; font-size:small; " class="calendar-area-header">
            <div class="msg">
                <?php
                if (!empty($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
        <div style="text-align: center; font-size:small; " id='calendar'></div>
    </div>
    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>