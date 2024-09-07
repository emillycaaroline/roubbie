<?php
session_start();
require_once '../includes/db_connection.php';

// calendário interativo, permitindo adicionar, editar e excluir eventos. Utiliza o FullCalendar para exibir e gerenciar os eventos, e um formulário modal para inserção de dados. Mensagens de sucesso ou erro informam o resultado das ações.

// Processa as ações de adicionar, editar e excluir eventos
$dados = filter_input_array(INPUT_POST);

if (!empty($dados['action']) && $dados['action'] === 'delete') {
    $sql = $db->prepare("DELETE FROM events WHERE id = :id");
    $sql->bindValue(":id", $dados['id']);
    
    if (!$sql->execute()) {
        $_SESSION['msg'] = "<p class='alert-danger'>Erro! Evento não existe ou já foi deletado.</p>";
        header('Location: index.php');
        exit;
    }

    $_SESSION['msg'] = "<p class='alert-success'>Sucesso! Evento excluído.</p>";
    header('Location: index.php');
    exit;
}

unset($dados['action']);

if ($dados['start'] >= $dados['end']) {
    $_SESSION['msg'] = "<p class='alert-danger'>Erro! Preencha as datas corretamente e tente novamente.</p>";
    header('Location: index.php');
    exit;
}

$required = ['title', 'color', 'start'];
$translate = [
    'title' => 'Nome do Evento',
    'color' => 'Cor',
    'start' => 'Início do Evento',
];

foreach ($dados as $key => $value) {
    if (in_array($key, $required) && empty($value)) {
        $_SESSION['msg'] = "<p class='alert-danger'>Erro! O campo " . $translate[$key] . " é obrigatório.</p>";
        header('Location: index.php');
        exit;
    }

    $set[] = $key . ' = :' . $key;
}
$set = implode(', ', $set);

if (!$dados['id']) {
    $sql = $db->prepare("INSERT INTO events SET $set");
} else {
    $sql = $db->prepare("UPDATE events SET $set WHERE id = :id");
}

foreach ($dados as $key => $value) {
    $sql->bindValue(":" . $key, $value);
}
$sql->execute();

$_SESSION['msg'] = !$dados['id'] 
    ? "<p class='alert-success'>Sucesso! Evento salvo.</p>"
    : "<p class='alert-success'>Sucesso! Evento alterado.</p>";

header('Location: index.php');
exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Card para inserir evento -->
    <div class="modal-opened hidden">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">
                    <h3>Cadastrar Evento</h3>
                </div>
                <div class="modal-close">x</div>
            </div>
            <form action="index.php" method="post" id="form-add-event">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="action" id="action" value="">

                    <label for="title">Nome do Evento</label>
                    <input type="text" name="title" id="title">

                    <label for="color">Selecione uma cor</label>
                    <input type="color" name="color" id="color">

                    <label for="start">Início do Evento</label>
                    <input type="datetime-local" name="start" id="start">

                    <label for="end">Término do Evento</label>
                    <input type="datetime-local" name="end" id="end">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-save">Salvar</button>
                    <button type="button" class="btn-delete hidden">Excluir</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODELO DE CALENDARIO/ROTINA/DIA -->
    <div class="calendar-area">
        <div class="calendar-area-header">
            <h3>Minha Rotina</h3>
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
