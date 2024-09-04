<?php
if (isset($_GET['evento_id'], $_GET['titulo'], $_GET['cor'], $_GET['start'], $_GET['end'], $_GET['usuario_id'])) {
    // Processa os dados recebidos via GET
    echo "Evento ID: " . $_GET['evento_id'] . "<br>";
    echo "Título: " . $_GET['titulo'] . "<br>";
    echo "Cor: " . $_GET['cor'] . "<br>";
    echo "Início: " . $_GET['start'] . "<br>";
    echo "Fim: " . $_GET['end'] . "<br>";
    echo "ID do Usuário: " . $_GET['usuario_id'] . "<br>";
} else {
    echo "Dados do evento não foram fornecidos.";
}
?>
