<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoubQuiz</title>
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="stylesheet" href="css/quiz.css">
</head>

<body>

    <main>
        <div class="widget-wrap">
            <h1>RoubQuiz</h1>

            <!-- QUIZ CONTAINER -->
            <div id="quizWrap"></div>

            <!-- RESTART BUTTON -->
            <button id="restartBtn" style="display: none;" onclick="quiz.reset()">Reiniciar Quiz</button>

            <!-- HOME BUTTON -->
            <button id="homeBtn" style="display: none;" onclick="window.location.href = 'index.php';">Ir para a Página Inicial</button>
        </div>
        <button onclick="window.history.back()">Voltar</button>

        <script>
            // Definição do quiz com perguntas e alternativas
            var quiz = {
                data: [
                    {
                        q: "1. Qual o seu papel na sua equipe ou grupo de amigos?",
                        o: [
                            "Faço minhas obrigações com antecedência e gosto de planejar as coisas.",
                            "Sou conselheiro, estou sempre aí para conversar e ajudar a manter um clima bom.",
                            "Sou aquele que coloca a mão na massa, tomo atitudes para cumprir os processos.",
                            "Penso fora da caixinha, me adapto bem às circunstâncias facilmente e agilizo os processos."
                        ]
                    },
                    {
                        q: "2. Quando você tem que tomar decisões, como você reage?",
                        o: [
                            "Planejo e sigo um plano se fizer sentido na minha mente.",
                            "Busco inspiração e penso em como todos os envolvidos vão se sentir.",
                            "Mantenho a estabilidade e sigo com o que organizei.",
                            "Ajo naturalmente e deixo as coisas fluírem."
                        ]
                    },
                    {
                        q: "3. Como você prefere resolver problemas?",
                        o: [
                            "Analisando o ambiente e criando estratégias.",
                            "Buscando soluções criativas e colaborativas.",
                            "Sigo meus princípios, normas e processos à risca.",
                            "Penso em diferentes formas de resolução para o problema."
                        ]
                    },
                    {
                        q: "4. Em uma viagem você prefere?",
                        o: [
                            "Procurar lugares do meu interesse.",
                            "Ir a lugares diferentes e agradar todo mundo na escolha.",
                            "Seguir minha programação à risca, evitando contratempos.",
                            "Deixo a vida me levar, qualquer lugar é uma nova experiência."
                        ]
                    }
                ],
                hWrap: null,
                hQn: null,
                hAns: null,
                now: 0,

                init: function () {
                    quiz.hWrap = document.getElementById("quizWrap");
                    quiz.hQn = document.createElement("div");
                    quiz.hQn.id = "quizQn";
                    quiz.hWrap.appendChild(quiz.hQn);
                    quiz.hAns = document.createElement("div");
                    quiz.hAns.id = "quizAns";
                    quiz.hWrap.appendChild(quiz.hAns);
                    quiz.draw();
                },

                draw: function () {
                    quiz.hQn.innerHTML = quiz.data[quiz.now].q;
                    quiz.hAns.innerHTML = "";
                    quiz.data[quiz.now].o.forEach((option, i) => {
                        let label = document.createElement("label");
                        label.innerHTML = option;
                        label.classList.add("quiz-option");
                        label.dataset.idx = i;
                        label.addEventListener("click", () => quiz.select(label));
                        quiz.hAns.appendChild(label);
                    });
                },

                select: function (option) {
                    [...quiz.hAns.getElementsByTagName("label")].forEach(label => {
                        label.style.pointerEvents = "none";
                    });
                    quiz.now++;
                    setTimeout(() => {
                        if (quiz.now < quiz.data.length) {
                            quiz.draw();
                        } else {
                            quiz.showResult();
                        }
                    }, 1000);
                },

                showResult: function () {
                    quiz.hQn.innerHTML = `Você completou o quiz!`;
                    quiz.hAns.innerHTML = "";
                    document.getElementById("restartBtn").style.display = "inline-block";
                    document.getElementById("homeBtn").style.display = "inline-block";
                },

                reset: function () {
                    quiz.now = 0;
                    document.getElementById("restartBtn").style.display = "none";
                    document.getElementById("homeBtn").style.display = "none";
                    quiz.draw();
                }
            };

            window.addEventListener("load", quiz.init);
        </script>
    </main>
</body>

</html>
