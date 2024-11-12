<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My daily routine</title>
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="stylesheet" href="../projeto_fullcalendar_js_php-master/fullcalendar.css">

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
    overflow: hidden;
  }

  h2 {
    color: var(--text-color);
    text-align: center;
    margin: 20px 0;
  }

  button {
    margin-top: 20px;
    padding: 12px 30px;
    background-color: #80d0c7;
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.2s;
  }

  button:hover {
    background-color: var(--secondary-color);
    transform: translateY(-2px);
  }

  .calendar-area {
    width: 100%;
    max-width: 800px;
    padding: 20px;
    box-sizing: border-box;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
  }

  .calendar-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 25px 30px 10px;
  }

  .fc-button-group {
    display: flex;
  }

  .fc-button {
    background: none;
    border: none;
    cursor: pointer;
    color: #aeabab;
    font-size: 1.5rem;
  }

  .fc-button:hover {
    color: #000;
  }

  .calendar-body {
    padding: 20px;
  }

  .calendar-body li {
    width: calc(100% / 7);
    font-size: 1.07rem;
    color: #414141;
  }

  .calendar-body .calendar-weekdays li {
    cursor: default;
    font-weight: 500;
  }

  .calendar-body .calendar-dates li {
    margin-top: 30px;
    position: relative;
    z-index: 1;
    cursor: pointer;
  }

  .calendar-dates li.active {
    color: #fff;
  }

  @media (max-width: 768px) {
    body {
      padding: 10px;
    }

    h2 {
      font-size: 1.3rem;
    }

    button {
      padding: 10px;
    }

    .modal {
      padding: 15px;
    }

    .calendar-body li {
      font-size: 0.9rem;
    }

    .calendar-area {
      padding: 15px;
    }

    .fc-button {
      font-size: 1.2rem;
    }
  }
  
</style>
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

        <h2 id="titulo-rotina">my daily routine</h2>

        <div style="font-size: small;" id='calendar'></div>
        <button onclick="window.history.back()">Voltar</button>

    </div>

    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="script.js"></script>
</body>

</html>