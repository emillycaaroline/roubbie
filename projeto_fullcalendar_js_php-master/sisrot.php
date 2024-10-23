<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Rotina</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .titulo-rotina {
        color: var(--text-color);
        font-size: 1.5rem;
        text-align: center;
        margin: 20px 0;
        padding: 10px;
        background-color: #e0f7fa;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        font-weight: bold;
        text-transform: uppercase;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fff;
    }

    h2 {
        color: black;
        text-align: center;
        margin: 20px 0;
    }

    button {
        padding: 5px;
        background-color: white;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s, box-shadow 0.3s;
        margin: 20px auto;
        display: block;
    }

    button:hover {
        background-color: black;
        color: white;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
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

    .modal {
        width: 90%;
        max-width: 500px;
        background-color: #ffffff;
        padding: 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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

    .modal-body input,
    .modal-body select {
        font-size: 14px;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 6px;
        outline: none;
        border: 1px solid #13547a;
    }

    .fc-daygrid-day-frame,
    .fc-scrollgrid-sync-inner {
        height: 50px;
        width: 100%;
        padding: 5px;
        margin: 0;
        border: 1px solid #333;
        border-radius: 3px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .fc-daygrid-day-frame:hover,
    .fc-scrollgrid-sync-inner:hover {
        background-color: rgba(0, 121, 107, 0.1);
        transform: scale(1.02);
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

    @media (max-width: 768px) {
        body {
            justify-content: flex-start;
        }

        button {
            width: 100%;
            margin: 10px 0;
        }

        .modal {
            padding: 15px;
        }

        .modal-body input,
        .modal-body select {
            font-size: 16px;
            padding: 8px;
        }

        .modal-footer button {
            width: 100%;
        }
    }

    .fc-header-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ddd;
    }

    .fc-button-group {
        display: flex;
    }

    .fc-button {
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .fc-button:hover {
        background-color: #0056b3;
    }

    .fc-button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    .fc-button-active {
        background-color: #0056b3;
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }
</style>

<body class="sisrot-page">

    <button onclick="window.history.back()">Voltar</button>

    <!-- Card para inserir evento -->
    <div class="modal-opened hidden">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">
                    <h3>Cadastrar Registro</h3>
                </div>
                <div class="modal-close" aria-label="Fechar modal">x</div>
            </div>
            <form action="action-event.php" method="post" id="form-add-event">
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="action" id="action" value="add">

                <label for="title">Título</label>
                <input type="text" name="title" id="title" required aria-required="true">

                <label for="date">Data</label>
                <input type="date" name="date" id="date" required aria-required="true">

                <label for="time">Hora</label>
                <input type="time" name="time" id="time" required aria-required="true">

                <label for="category">Categoria</label>
                <select name="category" id="category" required aria-required="true">
                    <option value="evento">Evento</option>
                    <option value="tarefa">Tarefa</option>
                    <option value="compromissos">Compromisso</option>
                </select>

                <div class="modal-footer">
                    <button type="submit" class="btn-save">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="calendar-area">
        <h2 id="titulo-rotina">Rotina</h2>

        <div style="font-size: small;" id='calendar'></div>
    </div>

    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>