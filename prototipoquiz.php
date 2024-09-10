<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Personalidade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #13547a, #80d0c7);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: #13547a;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .question {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 8px;
            background: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .question h3 {
            font-size: 18px;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
            color: #555;
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 10px;
            cursor: pointer;
        }

        .button-container {
            margin-top: 20px;
        }

        button {
            background-color: #13547a;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0a2d55;
        }

        #resultTitle {
            color: #13547a;
            margin-top: 20px;
            font-size: 22px;
            font-weight: bold;
        }

        #resultText {
            color: #555;
            font-size: 18px;
            margin-top: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Quiz de Personalidade</h1>

        <div id="quizContainer">
            <!-- Pergunta 1 -->
            <div class="question" id="question1">
                <h3>1. Como você lida com projetos complexos no trabalho?</h3>
                <label><input type="radio" name="question1" value="analista"> Planejo meticulosamente e busco entender todos os detalhes. (Analista)</label>
                <label><input type="radio" name="question1" value="diplomata"> Busco uma abordagem colaborativa e foco na harmonia do grupo. (Diplomata)</label>
                <label><input type="radio" name="question1" value="explorador"> Adoro experimentar novas abordagens e sou flexível diante dos desafios. (Explorador)</label>
                <label><input type="radio" name="question1" value="sentinela"> Prefiro seguir procedimentos estabelecidos e garantir que tudo esteja em ordem. (Sentinela)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(1)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="question hidden" id="question2">
                <h3>2. Qual é a sua abordagem ao resolver conflitos?</h3>
                <label><input type="radio" name="question2" value="analista"> Analiso a situação de forma lógica e busco uma solução objetiva. (Analista)</label>
                <label><input type="radio" name="question2" value="diplomata"> Tento entender as necessidades de todas as partes e encontrar um compromisso. (Diplomata)</label>
                <label><input type="radio" name="question2" value="explorador"> Sou aberto a várias soluções e busco uma abordagem criativa para resolver o conflito. (Explorador)</label>
                <label><input type="radio" name="question2" value="sentinela"> Prefiro seguir regras e procedimentos para garantir uma solução estruturada. (Sentinela)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(2)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="question hidden" id="question3">
                <h3>3. Como você prefere passar o seu tempo livre?</h3>
                <label><input type="radio" name="question3" value="analista"> Trabalhando em projetos de interesse pessoal ou estudando novos tópicos. (Analista)</label>
                <label><input type="radio" name="question3" value="diplomata"> Socializando com amigos e participando de atividades em grupo. (Diplomata)</label>
                <label><input type="radio" name="question3" value="explorador"> Explorando novos lugares e buscando aventuras emocionantes. (Explorador)</label>
                <label><input type="radio" name="question3" value="sentinela"> Organizando e estruturando atividades ou cuidando de tarefas práticas. (Sentinela)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(3)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 4 -->
            <div class="question hidden" id="question4">
                <h3>4. Como você reage a mudanças inesperadas?</h3>
                <label><input type="radio" name="question4" value="analista"> Analiso as mudanças de forma lógica e ajusto meu planejamento conforme necessário. (Analista)</label>
                <label><input type="radio" name="question4" value="diplomata"> Procuro adaptar-me de forma positiva e manter um bom relacionamento com os outros. (Diplomata)</label>
                <label><input type="radio" name="question4" value="explorador"> Aceito as mudanças com entusiasmo e vejo-as como uma oportunidade para novas experiências. (Explorador)</label>
                <label><input type="radio" name="question4" value="sentinela"> Adapto-me às mudanças seguindo procedimentos e tentando manter a ordem. (Sentinela)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(4)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 5 -->
            <div class="question hidden" id="question5">
                <h3>5. Qual é a sua abordagem ao tomar decisões importantes?</h3>
                <label><input type="radio" name="question5" value="analista"> Recolho todas as informações possíveis e faço uma análise detalhada. (Analista)</label>
                <label><input type="radio" name="question5" value="diplomata"> Considero como minha decisão afetará os outros e busco um consenso. (Diplomata)</label>
                <label><input type="radio" name="question5" value="explorador"> Tomo decisões baseadas em minha intuição e nas oportunidades que vejo. (Explorador)</label>
                <label><input type="radio" name="question5" value="sentinela"> Sigo regras e precedentes estabelecidos para tomar a decisão. (Sentinela)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(5)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 6 -->
            <div class="question hidden" id="question6">
                <h3>6. Como você lida com a pressão?</h3>
                <label><input type="radio" name="question6" value="analista"> Mantenho a calma e utilizo métodos lógicos para gerenciar a pressão. (Analista)</label>
                <label><input type="radio" name="question6" value="diplomata"> Busco apoio e incentivo dos outros e tento manter uma atitude positiva. (Diplomata)</label>
                <label><input type="radio" name="question6" value="explorador"> Encaro a pressão como um desafio e procuro soluções criativas para lidar com ela. (Explorador)</label>
                <label><input type="radio" name="question6" value="sentinela"> Sigo procedimentos estabelecidos e busco manter a organização em meio à pressão. (Sentinela)</label>
                <div class="button-container">
                    <button onclick="showResult()">Ver Resultado</button>
                </div>
            </div>

            <!-- Resultado -->
            <div id="result" class="hidden">
                <h2 id="resultTitle">Seu Tipo de Personalidade</h2>
                <p id="resultText"></p>
            </div>
        </div>
    </div>

    <script>
        let currentQuestion = 1;

        function nextQuestion(questionNumber) {
            const currentDiv = document.getElementById(`question${questionNumber}`);
            const nextDiv = document.getElementById(`question${questionNumber + 1}`);
            if (nextDiv) {
                currentDiv.classList.add('hidden');
                nextDiv.classList.remove('hidden');
            }
        }

        function showResult() {
            const answers = document.querySelectorAll('input[type="radio"]:checked');
            const counts = {
                analista: 0,
                diplomata: 0,
                explorador: 0,
                sentinela: 0
            };

            answers.forEach(answer => {
                counts[answer.value]++;
            });

            const maxCount = Math.max(counts.analista, counts.diplomata, counts.explorador, counts.sentinela);
            let resultType = 'analista';

            if (counts.diplomata === maxCount) resultType = 'diplomata';
            if (counts.explorador === maxCount) resultType = 'explorador';
            if (counts.sentinela === maxCount) resultType = 'sentinela';

            const resultTitle = document.getElementById('resultTitle');
            const resultText = document.getElementById('resultText');

            resultTitle.textContent = `Você é um ${capitalize(resultType)}!`;
            resultText.textContent = getResultDescription(resultType);

            document.getElementById('quizContainer').classList.add('hidden');
            document.getElementById('result').classList.remove('hidden');
        }

        function capitalize(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }

        function getResultDescription(type) {
            switch (type) {
                case 'analista':
                    return 'Você é um Analista, focado em lógica e detalhes. Você adora resolver problemas complexos e encontrar soluções eficientes.';
                case 'diplomata':
                    return 'Você é um Diplomata, valorizando a harmonia e o entendimento entre as pessoas. Você é ótimo em colaborar e encontrar compromissos.';
                case 'explorador':
                    return 'Você é um Explorador, buscando novas experiências e abordagens criativas. Você adora se aventurar e enfrentar desafios com entusiasmo.';
                case 'sentinela':
                    return 'Você é um Sentinela, preferindo estrutura e ordem. Você é confiável e trabalha bem seguindo procedimentos estabelecidos.';
                default:
                    return '';
            }
        }
    </script>
</body>

</html>
