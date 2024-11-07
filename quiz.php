<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoubQuiz</title>
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">

    <style>
        /* PÁGINA & CORPO */
        * {
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #F8F8FF;
            color: #F8F8FF;
            text-align: center;
        }

        main {
            width: 100%;
            max-width: 800px;
            padding: 20px;
        }

        /* CONTAINER PRINCIPAL DO QUIZ */
        .widget-wrap {
            background-color: #80d0c7;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* TÍTULO */
        h1 {
            margin-bottom: 20px;
            font-size: 28px;
        }

        /* PERGUNTA */
        #quizQn {
            padding: 15px;
            color: #fff;
            font-size: 20px;
            border-radius: 10px;
            background: #4c93ba;
            margin-bottom: 15px;
        }

        /* RESPOSTAS */
        #quizAns {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 15px;
        }

        #quizAns label {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            color: black;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            transition: background 0.3s, transform 0.2s;
        }

        #quizAns label:hover {
            background: #e0f7fa;
            transform: scale(1.05);
        }

        /* BOTÃO DE REINICIAR */
        #restartBtn {
            margin-top: 20px;
            padding: 10px 20px;
            background: #4c93ba;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s;
        }

        #restartBtn:hover {
            background: #357aab;
        }

        /* Estilos para dispositivos móveis */
        @media (max-width: 767px) {
            #quizQn {
                font-size: 18px;
            }

            #quizAns label {
                font-size: 16px;
                padding: 12px;
            }

            .widget-wrap {
                padding: 15px;
            }
        }

        /* Estilos para dispositivos maiores */
        @media (min-width: 768px) {
            #quizQn {
                font-size: 24px;
            }

            #quizAns {
                grid-template-columns: 1fr 1fr;
            }

            #quizAns label {
                font-size: 20px;
            }
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #80d0c7;
            color: white;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #357aab;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <button onclick="window.history.back()">Voltar</button>

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
                            "Ir à lugares diferentes e agradar todo mundo na escolha.",
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
                    for (let i in quiz.data[quiz.now].o) {
                        let label = document.createElement("label");
                        label.innerHTML = quiz.data[quiz.now].o[i];
                        label.classList.add("quiz-option");
                        label.dataset.idx = i;
                        label.addEventListener("click", () => quiz.select(label));
                        quiz.hAns.appendChild(label);
                    }
                },

                select: function (option) {
                    let allLabels = quiz.hAns.getElementsByTagName("label");
                    for (let label of allLabels) {
                        label.style.pointerEvents = "none";
                    }
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
                    document.getElementById("homeBtn").style.display = "inline-block"; // Exibe o botão para a página inicial
                },

                reset: function () {
                    quiz.now = 0;
                    document.getElementById("restartBtn").style.display = "none";
                    document.getElementById("homeBtn").style.display = "none"; // Esconde o botão para a página inicial
                    quiz.draw();
                }
            };

            window.addEventListener("load", quiz.init);
        </script>
    </main>
</body>

</html>
