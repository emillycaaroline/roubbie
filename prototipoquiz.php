<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Dinâmico de Personalidade</title>
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
<!-- Este arquivo HTML cria um quiz dinâmico de personalidade que exibe perguntas e, ao final, apresenta um resultado com base nas respostas do usuário, incluindo um GIF relaxante como parte da apresentação do resultado. -->
 
 <!-- este link tem giff de facil acesso e uso -->
 <!-- https://tenor.com/pt-BR/view/chill-relax-peace-yoga-positive-gif-9312942009826875346 -->
    <div class="container">
        <h1>Quiz Dinâmico de Personalidade</h1>

        <div id="quizContainer">
            <!-- Perguntas do Quiz -->
            <div class="question" id="question1">
                <h3>1. Como você aborda projetos novos?</h3>
                <label>
                    <input type="radio" name="question1" value="analista"> Planejo e sigo um plano. (Analista)
                </label>
                <label>
                    <input type="radio" name="question1" value="diplomata"> Busco inspiração e impacto emocional. (Diplomata)
                </label>
                <label>
                    <input type="radio" name="question1" value="sentinela"> Mantenho organização e sigo processos. (Sentinela)
                </label>
                <label>
                    <input type="radio" name="question1" value="explorador"> Sou flexível e exploro novas ideias. (Explorador)
                </label>
                <div class="button-container">
                    <button onclick="nextQuestion(1)">Próxima</button>
                </div>
            </div>

            <div class="question hidden" id="question2">
                <h3>2. Qual é o seu papel em uma equipe?</h3>
                <label>
                    <input type="radio" name="question2" value="analista"> Planejador (Analista)
                </label>
                <label>
                    <input type="radio" name="question2" value="diplomata"> Motivador (Diplomata)
                </label>
                <label>
                    <input type="radio" name="question2" value="sentinela"> Organizador (Sentinela)
                </label>
                <label>
                    <input type="radio" name="question2" value="explorador"> Inovador (Explorador)
                </label>
                <div class="button-container">
                    <button onclick="nextQuestion(2)">Próxima</button>
                </div>
            </div>

            <!-- Mais perguntas aqui... -->

            <div class="question hidden" id="result">
                <h1 id="resultTitle">Resultado do Quiz</h1>
                <p id="resultText"></p>
                <div class="tenor-gif-embed" data-postid="9312942009826875346" data-share-method="host" data-aspect-ratio="1" data-width="100%">
                    <a href="https://tenor.com/view/chill-relax-peace-yoga-positive-gif-9312942009826875346">Chill Relax GIF</a> from <a href="https://tenor.com/search/chill-gifs">Chill GIFs</a>
                </div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
        </div>
    </div>

    <script>
        let currentQuestion = 1;

        function nextQuestion(questionNumber) {
            // Oculta a pergunta atual
            document.getElementById(`question${questionNumber}`).classList.add('hidden');

            // Mostra a próxima pergunta
            const nextQuestionNumber = questionNumber + 1;
            const nextQuestionElement = document.getElementById(`question${nextQuestionNumber}`);
            if (nextQuestionElement) {
                nextQuestionElement.classList.remove('hidden');
            } else {
                // Se não houver mais perguntas, exibe o resultado
                showResult();
            }
        }

        function showResult() {
            // Calcula as pontuações
            let analista = 0;
            let diplomata = 0;
            let sentinela = 0;
            let explorador = 0;

            const answers = document.querySelectorAll('input[type="radio"]:checked');

            answers.forEach(answer => {
                if (answer.value === "analista") analista += 3;
                if (answer.value === "diplomata") diplomata += 3;
                if (answer.value === "sentinela") sentinela += 3;
                if (answer.value === "explorador") explorador += 3;
            });

            // Determina a personalidade principal
            let personalidadePrincipal = "";
            if (analista >= diplomata && analista >= sentinela && analista >= explorador) {
                personalidadePrincipal = "analista";
            } else if (diplomata >= analista && diplomata >= sentinela && diplomata >= explorador) {
                personalidadePrincipal = "diplomata";
            } else if (sentinela >= analista && sentinela >= diplomata && sentinela >= explorador) {
                personalidadePrincipal = "sentinela";
            } else {
                personalidadePrincipal = "explorador";
            }

            // Define a recomendação com base na personalidade
            let recomendacao = "";
            if (personalidadePrincipal === "analista") {
                recomendacao = "Você é um planejador meticuloso. Aproveite atividades que envolvem estratégia e lógica.";
            } else if (personalidadePrincipal === "diplomata") {
                recomendacao = "Você é um motivador criativo. Atividades sociais e expressivas são ideais para você.";
            } else if (personalidadePrincipal === "sentinela") {
                recomendacao = "Você é um organizador detalhista. Atividades que exigem estrutura e organização são perfeitas para você.";
            } else {
                recomendacao = "Você é um inovador aventureiro. Experimente novas ideias e explore atividades variadas.";
            }

            // Exibe o resultado
            document.getElementById("resultTitle").innerText = "Resultado do Quiz";
            document.getElementById("resultText").innerText = recomendacao;
            document.getElementById("result").classList.remove('hidden');
        }
    </script>
</body>

</html>
