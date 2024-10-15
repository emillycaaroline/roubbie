<!-- Código que vai fazer o salvamento e redirecionamento para salvar no calendário a categoria notas. -->
<?php
// Inclui a configuração do banco de dados
require 'includes/db_connection.php';

// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Recebe os dados do formulário
    $titulo = $_POST['titulo']; // título do diário
    $data = $_POST['data']; // data da entrada
    $conteudo = $_POST['conteudo']; // conteúdo do diário
    $feeling = $_POST['feeling']; // sentimento associado

    // Prepara a query SQL para inserção
    $sql = "INSERT INTO diario (titulo, data, conteudo, feeling) VALUES (?, ?, ?, ?)";

    // Prepara a declaração
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL: ' . $conn->error);
    }

    // Liga os parâmetros à consulta
    $stmt->bind_param("ssss", $titulo, $data, $conteudo, $feeling);

    // Executa a consulta
    if ($stmt->execute()) {
        // Redireciona para a página do calendário (com parâmetros de categoria "notas")
        header("Location: calendario.php?categoria=notas&title=" . urlencode($titulo) . "&date=" . urlencode($data) . "&description=" . urlencode($conteudo) . "&feeling=" . urlencode($feeling));
        exit();
    } else {
        echo "Erro ao salvar no banco de dados: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitação inválido.";
}    
?>
