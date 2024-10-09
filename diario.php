<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nota</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main>
        <div class="container">
            <h2>Criar Nota</h2>
            <form action="salvar_diario.php" method="post">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" required>

                <label for="data">Data:</label>
                <input type="date" name="data" id="data" required>

                <label for="conteudo">Conteúdo:</label>
                <textarea name="conteudo" id="conteudo" rows="4" required></textarea>

                <button type="submit">Salvar Nota</button>
            </form>
        </div>
    </main>
</body>
</html>
