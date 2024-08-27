<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Personalidade e Temperamento</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            color: #13547a;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        .question {
            margin-bottom: 20px;
        }

        .question h3 {
            font-size: 18px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button {
            background-color: #13547a;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0a2d55;
        }

        #resultTitle {
            color: #13547a;
            text-align: center;
            margin-top: 20px;
        }

        #resultText {
            text-align: center;
            color: #555;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Quiz de Personalidade e Temperamento</h1>

        <!-- Formulário para o Quiz -->
        <form id="quizForm">
            <div class="question">
                <h3>1. Como você aborda projetos novos?</h3>
                <label>
                    <input type="radio" name="question1" value="analista" required> Planejo e sigo um plano. (Analista)
                </label>
                <label>
                    <input type="radio" name="question1" value="diplomata"> Busco inspiração e impacto emocional (Diplomata)
                </label>
                <label>
                    <input type="radio" name="question1" value="sentinela"> Mantenho organização e sigo processos (Sentinela)
                </label>
                <label>
                    <input type="radio" name="question1" value="explorador"> Sou flexível e exploro novas ideias (Explorador)
                </label>
            </div>

            <div class="question">
                <h3>2. Qual é o seu papel em uma equipe?</h3>
                <label>
                    <input type="radio" name="question2" value="analista" required> Planejador (Analista)
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
            </div>

            <div class="question">
                <h3>3. Como você resolve problemas?</h3>
                <label>
                    <input type="radio" name="question3" value="analista" required> Analisando e criando estratégias (Analista)
                </label>
                <label>
                    <input type="radio" name="question3" value="diplomata"> Buscando soluções criativas (Diplomata)
                </label>
                <label>
                    <input type="radio" name="question3" value="sentinela"> Seguindo regras (Sentinela)
                </label>
                <label>
                    <input type="radio" name="question3" value="explorador"> Experimentando abordagens (Explorador)
                </label>
            </div>

            <div class="question">
                <h3>4. Qual das seguintes atividades você prefere?</h3>
                <label>
                    <input type="radio" name="temperamento" value="colerico" required> Desafios intelectuais como xadrez ou quebra-cabeças (Colérico)
                </label>
                <label>
                    <input type="radio" name="temperamento" value="sanguineo"> Atividades sociais como teatro (Sanguíneo)
                </label>
                <label>
                    <input type="radio" name="temperamento" value="fleumatico"> Atividades relaxantes como jardinagem (Fleumático)
                </label>
                <label>
                    <input type="radio" name="temperamento" value="melancolico"> Projetos detalhados como programação (Melancólico)
                </label>
            </div>

            <button type="button" onclick="processQuiz()">Enviar</button>
        </form>

        <h1 id="resultTitle"></h1>
        <p id="resultText"></p>
    </div>

    <script>
        function processQuiz() {
            let analista = 0;
            let diplomata = 0;
            let sentinela = 0;
            let explorador = 0;

            const question1 = document.querySelector('input[name="question1"]:checked').value;
            const question2 = document.querySelector('input[name="question2"]:checked').value;
            const question3 = document.querySelector('input[name="question3"]:checked').value;
            const temperamento = document.querySelector('input[name="temperamento"]:checked').value;

            if (question1 === "analista") analista += 3;
            if (question1 === "diplomata") diplomata += 3;
            if (question1 === "sentinela") sentinela += 3;
            if (question1 === "explorador") explorador += 3;

            if (question2 === "analista") analista += 3;
            if (question2 === "diplomata") diplomata += 3;
            if (question2 === "sentinela") sentinela += 3;
            if (question2 === "explorador") explorador += 3;

            if (question3 === "analista") analista += 3;
            if (question3 === "diplomata") diplomata += 3;
            if (question3 === "sentinela") sentinela += 3;
            if (question3 === "explorador") explorador += 3;

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

            let recomendacao = "";

            if (personalidadePrincipal === "analista" && temperamento === "colerico") {
                recomendacao = "Sua mente estratégica e focada busca desafios intelectuais. Atividades que envolvem lógica e planejamento, como resolver quebra-cabeças ou jogar xadrez, podem ser altamente satisfatórias.";
            } else if (personalidadePrincipal === "analista" && temperamento === "melancolico") {
                recomendacao = "Você se destaca em projetos que exigem atenção aos detalhes e um enfoque profundo. Atividades que envolvem análise e solução de problemas complexos, como programação ou design, são recomendadas.";
            } else if (personalidadePrincipal === "diplomata" && temperamento === "sanguineo") {
                recomendacao = "Sua habilidade de se conectar emocionalmente com os outros faz com que atividades sociais e expressivas sejam gratificantes. Considere se envolver em grupos artísticos ou eventos sociais que permitam explorar sua criatividade e empatia.";
            } else if (personalidadePrincipal === "diplomata" && temperamento === "fleumatico") {
                recomendacao = "Você valoriza a tranquilidade e a harmonia. Atividades que proporcionam relaxamento e conexão com a natureza, como jardinagem ou meditação, podem ser extremamente benéficas para você.";
            } else if (personalidadePrincipal === "sentinela" && temperamento === "melancolico") {
                recomendacao = "Você é organizado e meticuloso. Projetos que exigem planejamento detalhado e atenção aos detalhes, como administração de projetos ou atividades que envolvam análise profunda, podem ser altamente satisfatórios.";
            } else if (personalidadePrincipal === "sentinela" && temperamento === "fleumatico") {
                recomendacao = "Você é um indivíduo calmo e confiável. Atividades que permitem uma abordagem metódica e tranquila, como gerenciamento de tarefas ou atividades de rotina, podem ser agradáveis e produtivas.";
            } else if (personalidadePrincipal === "explorador" && temperamento === "colerico") {
                recomendacao = "Você é aventureiro e enérgico. Atividades que envolvem desafios e novas experiências, como esportes radicais ou explorações ao ar livre, podem ser especialmente empolgantes para você.";
            } else if (personalidadePrincipal === "explorador" && temperamento === "sanguineo") {
                recomendacao = "Sua natureza sociável e espontânea faz com que atividades dinâmicas e interativas sejam muito gratificantes. Considere se envolver em eventos sociais ou atividades que estimulem a criatividade e a interação.";
            }

            document.getElementById('resultTitle').textContent = "Resultado do Quiz";
            document.getElementById('resultText').textContent = recomendacao;
        }
    </script>
</body>

</html>