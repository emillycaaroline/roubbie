<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário Pessoal</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> <!-- External CSS -->
    <style>
        /* Reset de margens e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Cor de fundo da página */
        body {
            background: #e0e5ec;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 80px; /* Ajuste para compensar o navbar fixo */
        }

        /* Container centralizado */
        .container1 {
            width: 90%;
            max-width: 700px;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        /* Estilo do cabeçalho */
        header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        header h1 {
            font-size: 2.2em;
            color: #333;
        }

        header p {
            font-size: 1.1em;
            color: #666;
        }

        /* Área de texto estilizada */
        .diary-entry {
            width: 100%;
            height: 300px;
            /* Altura ajustada para o conteúdo */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            line-height: 1.6em;
            background: #ffffff;
            background-clip: padding-box;
            color: #333;
            resize: none;
            overflow-y: auto;
            white-space: pre-wrap;
            /* Preserva espaços e quebras de linha */
            position: relative;
            z-index: 1;
            /* Estilo de linhas de papel */
            background: linear-gradient(to bottom, #ffffff 0%, #f0f0f0 10%, #ffffff 20%);
            background-size: 100% 20px;
        }

        .diary-entry:empty:before {
            content: attr(data-placeholder);
            color: #aaa;
            font-style: italic;
        }

        button {
            display: inline-block;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            background-color: #28a745;
            color: #fff;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            position: relative;
            z-index: 1;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.02);
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }

        #feedback {
            display: none;
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
   <!-- Adiciona o header -->
   <?php include 'includes/header.php'; ?>


    <!-- Conteúdo principal -->
    <div class="container1">
        <header>
            <h1>Diário Pessoal</h1>
            <p>Capture seus momentos e reflexões do dia aqui.</p>
        </header>

        <main>
            <div class="diary-entry" contenteditable="true" data-placeholder="Escreva seus momentos e reflexões do dia aqui..."></div>
            <button type="button" onclick="saveEntry()" aria-label="Salvar entrada">Salvar</button>
            <div id="feedback">Texto salvo com sucesso!</div>
        </main>

        <footer>
            <p>&copy; 2024 Diário Pessoal. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script>
        function saveEntry() {
            const diaryContent = document.querySelector('.diary-entry').innerText;

            // Exemplo de exibição do conteúdo em um alerta
            alert('Seu texto salvo:\n\n' + diaryContent);

            // Mostrar feedback na página
            document.getElementById('feedback').style.display = 'block';

            // Limpar feedback após alguns segundos
            setTimeout(() => {
                document.getElementById('feedback').style.display = 'none';
            }, 3000);
        }
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
  <!-- Adiciona o footer -->
  <?php include 'footer.php'; ?>

</html>
