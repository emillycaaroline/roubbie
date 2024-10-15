<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotina</title>
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

    
     /* botão */
     button {
            margin-left: 50px;
            margin-top: 20px;
            padding: 10px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
          
        }

       
        button:hover {
            background-color: black;
            color: white;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
            /* Sombra mais forte ao passar o mouse */
        }
</style>

<body class="sisrot-page">

<button onclick="window.history.back()">Voltar</button>

    <!-- Este arquivo configura a visualização semanal e diária do calendário. Inclui o modal para adicionar ou editar eventos. -->
    <!-- Card para inserir evento -->
<div class="modal-opened hidden">
    <div class="modal">
        <div class="modal-header">
            <div class="modal-title">
                <h3>Cadastrar Registro</h3>
            </div>
            <div class="modal-close">x</div>
        </div>
        <form action="action-event.php" method="post" id="form-add-event">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="action" id="action" value="add"> <!-- Ação padrão como 'add' -->

            <label for="title">Título</label>
            <input type="text" name="title" id="title" required>

            <label for="date">Data</label>
            <input type="date" name="date" id="date" required>

            <label for="time">Hora</label>
            <input type="time" name="time" id="time" required>

            <label for="category">Categoria</label>
            <select name="category" id="category" required>
                <option value="evento">Evento</option>
                <option value="tarefa">Tarefa</option>
                <option value="compromisso">Compromisso</option>
            </select>

            <div class="modal-footer">
                <button type="submit" class="btn-save">Salvar</button>
            </div>
        </form>
    </div>
</div>

    <div class="calendar-area">
        <h2 style="color: black; text-align: center;">Dia a Dia</h2>

        <div id='calendar'></div>
    </div>
    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>