<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My daily routine</title>
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="stylesheet" href="../projeto_fullcalendar_js_php-master/fullcalendar.css">

</head>
<body class="sisrot-page">


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
    <button onclick="window.history.back()">sair</button>

        <h2 id="titulo-rotina">my daily routine</h2>

        <div style="font-size: small;" id='calendar'></div>
    </div>

    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>