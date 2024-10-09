<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }

        form,
        .entries {
            max-width: 600px;
            margin: auto;
            background: #edebff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border: 2px dashed blue;
        }

        h1 {
            text-align: center;
            color: #ff6347;
            font-family: 'Pacifico', cursive;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
            font-weight: 700;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 2px solid blue;
            border-radius: 10px;
            transition: border-color 0.3s;
            background-color: #fff;
        }

        input:focus,
        textarea:focus {
            border-color: black;
            outline: none;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: skyblue;
            transform: translateY(-2px);
        }

        .entries {
            margin-top: 20px;
            border-top: 2px solid blue;
            padding-top: 10px;
        }

        .entry {
            background: #dcd9ff;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
        }

        .feedback {
            margin-top: 10px;
        }

        .emoji {
            font-size: 24px;
            cursor: pointer;
            margin: 0 5px;
            transition: transform 0.2s;
        }

        .selected {
            transform: scale(1.5);
            background-color: skyblue;
            border-radius: 5px;
        }

        .edit-button {
            background-color: lightblue;
            border-radius: 50px;
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 5px;
        }

        .delete-button {
            background-color: red;
            border-radius: 50px;
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 5px;
        }
        select{
            margin-top: 15px;
            padding: 10px;
            background-color: skyblue;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }
    </style>
</head>

<body>

    <?php require_once 'includes/header.php'; ?>
    <div class="container">
        <h1 style="margin-top: 100px;">Meu Diário</h1>

        <form action="salvar_diario.php" method="post">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" placeholder="Como foi seu dia?" required>

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required>

    <label for="conteudo">Sobre o dia:</label>
    <textarea id="conteudo" name="conteudo" placeholder="Escreva aqui..." required></textarea>

    <label>Como você se sentiu?</label><br>
<select name="sentimento" id="sentimento" required>
    <option value="😊">😊</option>
    <option value="😐">😐</option>
    <option value="😢">😢</option>
    <option value="😡">😡</option>
</select><br><br>


    <button type="submit">Adicionar Entrada</button>
</form>


        <script>
            document.querySelectorAll('.emoji').forEach(emoji => {
                emoji.addEventListener('click', function() {
                    document.querySelectorAll('.emoji').forEach(e => e.classList.remove('selected'));
                    this.classList.add('selected');
                    document.getElementById('feelingValue').value = this.dataset.feeling; // Atualiza o valor do feeling
                });
            });
        </script>

        <div class="entries" id="entries">
            <h2>Entradas Anteriores</h2>
            <!-- Entradas serão adicionadas aqui -->
        </div>
    </div>
   
    <script>
        document.addEventListener('DOMContentLoaded', loadEntries);

        let diaryEntries = JSON.parse(localStorage.getItem('diaryEntries')) || [];

        function loadEntries() {
            const entriesContainer = document.getElementById('entries');
            entriesContainer.innerHTML = '<h2>Entradas Anteriores</h2>'; // Resetando o conteúdo
            diaryEntries.forEach((entry, index) => {
                const entryDiv = document.createElement('div');
                entryDiv.classList.add('entry');
                entryDiv.innerHTML = `
                <strong>${entry.title}</strong> <br>
                <em>${entry.date}</em> <br>
                ${entry.description} <br>
                <strong>Sentimento:</strong> ${entry.feeling} <br>
                <button class="edit-button" onclick="editEntry(${index})">Editar</button>
                <button class="delete-button" onclick="deleteEntry(${index})">Excluir</button>
            `;
                entriesContainer.appendChild(entryDiv);
            });
        }

        document.getElementById('diaryForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const titulo = document.getElementById('titulo').value;
            const data = document.getElementById('data').value;
            const conteudo = document.getElementById('conteudo').value;
            const feeling = document.querySelector('.emoji.selected')?.dataset.feeling || '😶';

            const newEntry = {
                title: titulo,
                date: data,
                description: conteudo,
                feeling: feeling
            };

            // Adiciona a nova entrada ao array e armazena no Local Storage
            diaryEntries.push(newEntry);
            localStorage.setItem('diaryEntries', JSON.stringify(diaryEntries));

            // Limpa o formulário e recarrega as entradas
            this.reset();
            loadEntries();
        });

        function editEntry(index) {
            const entry = diaryEntries[index];
            document.getElementById('titulo').value = entry.title;
            document.getElementById('data').value = entry.date;
            document.getElementById('conteudo').value = entry.description; // Atualizado para 'conteudo'
            document.querySelectorAll('.emoji').forEach(e => e.classList.remove('selected'));
            document.querySelector(`.emoji[data-feeling="${entry.feeling}"]`).classList.add('selected');

            // Remove a entrada do array e do Local Storage
            deleteEntry(index);
        }

        function deleteEntry(index) {
            diaryEntries.splice(index, 1);
            localStorage.setItem('diaryEntries', JSON.stringify(diaryEntries));
            loadEntries();
        }
    </script>

</body>

</html>
