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
<<<<<<< HEAD
    <!-- Este arquivo HTML cria um quiz dinâmico de personalidade que exibe perguntas e, ao final, apresenta um resultado com base nas respostas do usuário, incluindo um GIF relaxante como parte da apresentação do resultado. -->

    <!-- este link tem giff de facil acesso e uso -->
    <!-- https://tenor.com/pt-BR/view/chill-relax-peace-yoga-positive-gif-9312942009826875346 -->
=======
>>>>>>> 7743cbbce92a908d46b018080dc59613cc880e70
    <div class="container">
        <h1>Quiz Dinâmico de Personalidade</h1>

        <div id="quizContainer">
            <!-- Pergunta 1 -->
            <div class="question" id="question1">
                <h3>1. Como você aborda projetos novos?</h3>
                <label><input type="radio" name="question1" value="analista"> Planejo e sigo um plano. (Analista)</label>
                <label><input type="radio" name="question1" value="diplomata"> Busco inspiração e impacto emocional. (Diplomata)</label>
                <label><input type="radio" name="question1" value="sentinela"> Mantenho organização e sigo processos. (Sentinela)</label>
                <label><input type="radio" name="question1" value="explorador"> Sou flexível e exploro novas ideias. (Explorador)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(1)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="question hidden" id="question2">
                <h3>2. Qual é o seu papel em uma equipe?</h3>
                <label><input type="radio" name="question2" value="analista"> Planejador (Analista)</label>
                <label><input type="radio" name="question2" value="diplomata"> Motivador (Diplomata)</label>
                <label><input type="radio" name="question2" value="sentinela"> Organizador (Sentinela)</label>
                <label><input type="radio" name="question2" value="explorador"> Inovador (Explorador)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(2)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="question hidden" id="question3">
                <h3>3. Como você reage a mudanças inesperadas?</h3>
                <label><input type="radio" name="question3" value="analista"> Reavalio a situação com base em lógica. (Analista)</label>
                <label><input type="radio" name="question3" value="diplomata"> Tento entender o impacto emocional. (Diplomata)</label>
                <label><input type="radio" name="question3" value="sentinela"> Prefiro manter a ordem e seguir planos. (Sentinela)</label>
                <label><input type="radio" name="question3" value="explorador"> Me adapto rapidamente e improviso. (Explorador)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(3)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 4 -->
            <div class="question hidden" id="question4">
                <h3>4. Como você se motiva em um desafio pessoal?</h3>
                <label><input type="radio" name="question4" value="analista"> Defino metas claras e planejo. (Analista)</label>
                <label><input type="radio" name="question4" value="diplomata"> Busco inspiração e motivação emocional. (Diplomata)</label>
                <label><input type="radio" name="question4" value="sentinela"> Mantenho uma rotina e sigo as regras. (Sentinela)</label>
                <label><input type="radio" name="question4" value="explorador"> Experimento novas abordagens. (Explorador)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(4)">Próxima</button>

                </div>
            </div>

            <!-- Pergunta 5 -->
            <div class="question hidden" id="question5">
                <h3>5. Como você lida com um conflito de opinião?</h3>
                <label><input type="radio" name="question5" value="analista"> Analisando os argumentos e buscando a solução lógica. (Analista)</label>
                <label><input type="radio" name="question5" value="diplomata"> Tentando compreender as emoções envolvidas e encontrar um consenso. (Diplomata)</label>
                <label><input type="radio" name="question5" value="sentinela"> Seguindo regras estabelecidas e buscando uma solução prática. (Sentinela)</label>
                <label><input type="radio" name="question5" value="explorador"> Explorando novas perspectivas e soluções criativas. (Explorador)</label>
                <div class="button-container">
                    <button onclick="nextQuestion(5)">Próxima</button>
                </div>
            </div>

            <!-- Pergunta 6 -->
            <div class="question hidden" id="question6">
                <h3>6. O que você valoriza mais em um projeto colaborativo?</h3>
                <label><input type="radio" name="question6" value="analista"> Clareza e eficiência na execução. (Analista)</label>
                <label><input type="radio" name="question6" value="diplomata"> Colaboração e harmonia entre os membros da equipe. (Diplomata)</label>
                <label><input type="radio" name="question6" value="sentinela"> Organização e estrutura bem definida. (Sentinela)</label>
                <label><input type="radio" name="question6" value="explorador"> Liberdade para experimentar e inovar. (Explorador)</label>
                <div class="button-container">
                    <button onclick="showResult()">Finalizar</button>
                </div>
            </div>

            <!-- Resultado -->
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
            // Inicializa a contagem de pontos
            let pontuacao = {
                analista: 0,
                diplomata: 0,
                sentinela: 0,
                explorador: 0
            };

            // Conta os pontos com base nas respostas selecionadas
            const respostas = document.querySelectorAll('input[type="radio"]:checked');
            respostas.forEach(resposta => {
                pontuacao[resposta.value] += 1;
            });

            // Determina o tipo de personalidade com mais pontos
            let personalidadePrincipal = "";
            let maiorPontuacao = 0;
            for (const [tipo, pontos] of Object.entries(pontuacao)) {
                if (pontos > maiorPontuacao) {
                    maiorPontuacao = pontos;
                    personalidadePrincipal = tipo;
                }
            }

            // Define a recomendação com base na personalidade
            const mensagens = {
                analista: 'Você é um Analista! Racional e lógico, você se destaca em criar planos e estruturas eficientes. Sua capacidade de pensar de maneira crítica e detalhista é admirável. Para relaxar e manter sua mente afiada, considere hobbies como quebra-cabeças, xadrez ou programação. Esses interesses permitem que você continue a usar suas habilidades analíticas de maneira divertida e desafiadora.',
                diplomata: 'Você é um Diplomata! Sensível e empático, busca sempre impacto emocional e harmonia. Seu talento para criar conexões genuínas e promover um ambiente positivo é notável. Para relaxar e recarregar suas energias, explore hobbies criativos e introspectivos como meditação, fotografia ou yoga. Esses interesses não só ajudam a manter seu equilíbrio, mas também aprofundam sua conexão com o mundo ao seu redor.',
                sentinela: 'Você é um Sentinela! Organizado e prático, valoriza a ordem e a eficiência. Sua capacidade de estruturar e gerenciar tarefas é excepcional. Para relaxar, você pode aproveitar hobbies que envolvem planejamento e estrutura, como jardinagem, trabalhos manuais ou até mesmo organização de eventos. Essas atividades são perfeitas para equilibrar sua energia e manter sua rotina organizada.',
                explorador: 'Você é um Explorador! Curioso e adaptável, você adora experimentar e inovar. Sua natureza aberta a novas experiências é uma grande vantagem. Para satisfazer seu desejo de novidade, experimente hobbies como trilhas, esportes radicais ou viagens. Esses interesses ajudam a manter sua vida emocionante e repleta de descobertas.'
            };

            // Exibe o resultado
            document.getElementById("resultTitle").innerText = "Resultado do Quiz";
            document.getElementById("resultText").innerText = mensagens[personalidadePrincipal];
            document.getElementById("result").classList.remove('hidden');
        }
    </script>
</body>

</html>