<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra Sua Personalidade!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            color: #00796b;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #004d40;
        }

        .question {
            margin-bottom: 20px;
        }

        .options label {
            display: block;
            margin-bottom: 12px;
        }

        .submit-btn {
            background-color: #00796b;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #004d40;
        }

        #result {
            display: none;
            margin-top: 20px;
            text-align: left;
            color: #004d40;
        }

        #result h2 {
            color: #004d40;
        }

        #result ul {
            list-style-type: disc;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <!-- 
        Página de quiz para descobrir seu tipo de personalidade com base nas perguntas. ele mostra:
        Personalidade Principal: Identifica o tipo de personalidade predominante.
        Sugestões de Atividades: Recomenda atividades para o tipo de personalidade principal.
        Área para Desenvolvimento: Sugere atividades para melhorar ou explorar uma área menos compatível. 
     -->

    <div class="container">
        <h1>Descubra Sua Personalidade!</h1>
        <form id="quiz-form">
            <div class="question">
                <h3>Qual tipo de livro você prefere?</h3>
                <div class="options">
                    <label><input type="radio" name="q1" value="Analista" required> Ciência e Filosofia</label>
                    <label><input type="radio" name="q1" value="Diplomata" required> Histórias Inspiradoras</label>
                    <label><input type="radio" name="q1" value="Sentinela" required> Guias Práticos</label>
                    <label><input type="radio" name="q1" value="Explorador" required> Aventuras</label>
                </div>
            </div>
            <!-- Adicione mais perguntas conforme necessário -->
            <button type="submit" class="submit-btn">Ver Resultado</button>
        </form>
        <div id="result">
            <h2 id="result-title"></h2>
            <h3>Atividades que combinam com você:</h3>
            <ul id="activity-list"></ul>
            <h3>Área para Desenvolver:</h3>
            <ul id="development-list"></ul>
        </div>
    </div>

    <script>
        document.getElementById('quiz-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const personality = formData.get('q1');

            const scores = {
                "Analista": 0,
                "Diplomata": 0,
                "Sentinela": 0,
                "Explorador": 0
            };
            scores[personality] = 1; // Simulação simples: um ponto para a escolha

            const activities = {
                "Analista": [
                    "Desafie-se com jogos de estratégia!",
                    "Aprofunde-se em leitura sobre ciência e filosofia.",
                    "Explore conceitos novos com quebra-cabeças e experimentos."
                ],
                "Diplomata": [
                    "Participe de projetos voluntários e sociais.",
                    "Deixe sua criatividade fluir com artes, música e escrita.",
                    "Engaje-se em discussões e atividades comunitárias."
                ],
                "Sentinela": [
                    "Cuide de projetos de jardinagem e bricolagem.",
                    "Experimente receitas e cuide da família com a culinária.",
                    "Organize eventos e participe de clubes comunitários."
                ],
                "Explorador": [
                    "Aventure-se em esportes radicais e atividades ao ar livre.",
                    "Capture momentos com fotografia e explore novos lugares.",
                    "Liberte sua criatividade com artesanato e dança."
                ]
            };

            // Identifica a personalidade predominante e a menos predominante
            const predominant_personality = Object.keys(scores).reduce((a, b) => scores[a] > scores[b] ? a : b);
            const least_personality = Object.keys(scores).reduce((a, b) => scores[a] < scores[b] ? a : b);

            document.getElementById('result-title').textContent = `Sua Personalidade Principal: ${predominant_personality}`;
            const activityList = document.getElementById('activity-list');
            activityList.innerHTML = '';
            activities[predominant_personality].forEach(activity => {
                const listItem = document.createElement('li');
                listItem.textContent = activity;
                activityList.appendChild(listItem);
            });

            document.getElementById('result').style.display = 'block';

            // Exibe a área para desenvolvimento
            const developmentList = document.getElementById('development-list');
            developmentList.innerHTML = '';
            activities[least_personality].forEach(activity => {
                const listItem = document.createElement('li');
                listItem.textContent = activity;
                developmentList.appendChild(listItem);
            });
        });
    </script>
</body>

</html>