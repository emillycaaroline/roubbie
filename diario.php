<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário</title>
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
            margin: 0;
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
            overflow-y: auto;
            position: relative;
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
            margin-top: 20px;
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
            <h1>Pensar e Refletir</h1>
            <p>Conte o que aconteceu e suas emoções do dia.</p>
        </header>

        <main>
            <div class="diary-entry" contenteditable="true" aria-label="Área para escrever suas reflexões do dia" data-placeholder="Escreva seus momentos e reflexões do dia aqui...">
                <!-- Placeholder adicionado via CSS -->
            </div>
            <button type="button" onclick="saveEntry()">Guardar</button>
        </main>

        <footer>
            <p>&copy; 2024 Diário Pessoal. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const diaryEntry = document.querySelector('.diary-entry');

            // Carregar o conteúdo salvo
            const savedContent = localStorage.getItem('diaryEntry');
            if (savedContent) {
                diaryEntry.innerHTML = savedContent;
            }

            // Função para formatar a data atual
            function getCurrentDate() {
                const now = new Date();
                const day = now.getDate().toString().padStart(2, '0');
                const month = (now.getMonth() + 1).toString().padStart(2, '0');
                const year = now.getFullYear();
                return `${day}/${month}/${year}`;
            }

            // Função para salvar a entrada
            window.saveEntry = function() {
                const date = getCurrentDate();
                const diaryContent = diaryEntry.innerText;
                const contentWithDate = `<strong>${date}</strong><br><br>${diaryContent}`;
                localStorage.setItem('diaryEntry', contentWithDate);
                alert('Seu texto foi salvo.');
            }
        });
    </script>
</body>

</html>
