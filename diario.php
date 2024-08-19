<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário Pessoal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7fa;
            color: #2c3e50;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container1 {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 30px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-weight: 600;
            color: #34495e;
        }

        .diary-entry {
            width: 100%;
            height: 200px;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
            background-color: #ecf0f1;
            outline: none;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .diary-entry:focus {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
        }

        button {
            display: inline-block;
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            background-color: #3498db;
            color: #ffffff;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }

        .dark-mode {
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .dark-mode .container1 {
            background-color: #34495e;
            border-color: #2c3e50;
        }

        .dark-mode .diary-entry {
            background-color: #3b3f47;
            color: #ecf0f1;
            border-color: #555;
        }

        .dark-mode button {
            background-color: #e74c3c;
        }
    </style>
</head>

<body>
    <div class="container1">
        <header>
            <h1>Diário Pessoal</h1>
            <p>Capture seus momentos e reflexões do dia aqui.</p>
        </header>

        <main>
            <div class="diary-entry" contenteditable="true" data-placeholder="Escreva seus momentos e reflexões do dia aqui..."></div>
            <button type="button" onclick="saveEntry()">Salvar</button>
        </main>

        <footer>
            <p>&copy; 2024 Diário Pessoal. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script>
        function saveEntry() {
            const diaryContent = document.querySelector('.diary-entry').innerText;
            alert('Seu texto salvo:\n\n' + diaryContent);
            // Aqui você pode adicionar a lógica para salvar a entrada
        }
    </script>
</body>

</html>