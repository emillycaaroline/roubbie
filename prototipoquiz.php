<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoubQuiz</title>
    <style>
        /* (A) CONTÊINER DO QUIZ */
        #quizWrap {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 10px;
            /* Adicionado padding horizontal */
        }

        /* (B) PERGUNTA */
        #quizQn {
            padding: 15px;
            color: #fff;
            font-size: 20px;
            border-radius: 10px;
            background: #4c93ba;
            /* Adicionado fundo para contraste */
        }

        /* (C) RESPOSTAS */
        #quizAns {
            margin: 10px 0;
            display: grid;
            grid-template-columns: 1fr;
            /* Ajuste padrão para uma coluna */
            grid-gap: 15px;
            /* Aumentado o espaçamento */
        }

        #quizAns input[type=radio] {
            display: none;
        }

        #quizAns label {
            background: #f9f9f9;
            /* Alterado para um fundo mais neutro */
            border: 1px solid #ddd;
            /* Ajustado para uma borda mais leve */
            border-radius: 10px;
            padding: 15px;
            font-size: 18px;
            /* Reduzido para melhor ajuste */
            cursor: pointer;
            text-align: center;
            transition: background 0.3s, transform 0.2s;
            /* Adiciona transições */
        }

        #quizAns label.correct {
            background: #d8ffc4;
            border: 1px solid #60a03f;
        }

        #quizAns label.wrong {
            background: #ffe8e8;
            border: 1px solid #c78181;
        }

        #quizAns label:hover {
            transform: scale(1.05);
            /* Efeito de zoom ao passar o mouse */
        }

        /* PÁGINA & CORPO */
        * {
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #13547a;
            /* Paleta aplicada */
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
        }

        /* WIDGET */
        .widget-wrap {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border-radius: 20px;
            background-color: #80d0c7;
            /* Paleta aplicada */
        }

        /* RODAPÉ */
        #code-boxx {
            font-weight: 600;
            margin-top: 30px;
        }

        #code-boxx a {
            display: inline-block;
            border: 0;
            padding: 5px;
            text-decoration: none;
            background: #b90a0a;
            color: #fff;
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
            /* Adiciona transição */
        }

        #restartBtn:hover {
            background: #357aab;
            /* Alterado para um tom mais escuro ao passar o mouse */
        }

        /* Estilos para dispositivos móveis */
        @media (max-width: 767px) {
            #quizQn {
                font-size: 18px;
                padding: 15px;
            }

            #quizAns {
                grid-template-columns: 1fr;
                /* Uma coluna em telas menores */
            }

            #quizAns label {
                font-size: 16px;
                /* Ajustado para melhor ajuste */
                padding: 15px;
            }

            .widget-wrap {
                padding: 15px;
            }
        }

        /* Estilos para dispositivos maiores (tablets e desktops) */
        @media (min-width: 768px) {
            #quizQn {
                font-size: 24px;
                padding: 20px;
            }

            #quizAns {
                grid-template-columns: 1fr 1fr;
                /* Duas colunas em telas maiores */
            }

            #quizAns label {
                font-size: 20px;
                padding: 15px;
            }

            .widget-wrap {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="widget-wrap">
        <h1>RoubQuiz</h1>

        <!-- (A) QUIZ CONTAINER -->
        <div id="quizWrap"></div>

        <!-- RESTART BUTTON -->
        <button id="restartBtn" style="display: none;" onclick="quiz.reset()">Restart Quiz</button>

    </div>

    <script>
        // Perguntas e alternativas que levara a uma personalidade a qual sera recomendado o hobby que se adequa com o tipo de personalidade do usuario

        var quiz = {
            data: [
                {
                    q: "1.Qual o seu papel na sua equipe ou grupo de amigos?",
                    o: ["Faço minhas obrigações com antecedência e gosto de planejar as coisas.", "Sou conselheiro, estou sempre aí para conversar e ajudar a manter um clima bom.", "Sou aquele que coloca a mão na massa, tomo atitudes para cumprir os processos.", "Penso fora da caixinha, me adapto bem às circunstâncias facilmente e agilizo os processos."]
                },
                {
                    q: "2.Quando você tem que tomar decisões, como você reage?",
                    o: ["Planejo e sigo um plano se fizer sentido na minha mente, não necessariamente preciso de um método ou muitas opiniões", "Busco inspiração e penso em como todos os envolvidos vão se sentir", "Mantenho a estabilidade e sigo com o que organizei", "Ajo naturalmente e deixo as coisas fluir"]
                },
                {
                    q: "3.Como você prefere resolver problemas?",
                    o: ["Analisando o ambiente e suas informações e criando estratégias", "Buscando soluções criativas e colaborativas", "Sigo meus princípios, normas e processos à risca", "Penso em diferentes formas de resolução para o problema"]
                },
                {
                    q: "4.Em uma viagem você prefere",
                    o: ["Procurar lugares do meu interesse", "Ir à lugares diferentes e agradar todo mundo na escolha", "Seguir minha programação à risca, evitando contratempos", "Deixo a vida me levar, qualquer lugar que eu chegar é uma nova experiência"]
                },
                {
                    q: "5.Você está entediado e procura algumas atividades para ocuparem seu tempo. Quais você escolhe?",
                    o: ["Pintura, jogos de tabuleiro ou escrita", "Meditação, yoga ou fotografia", "Jardinagem, culinária ou caminhada", "Skate, dança ou saio para correr"]
                },
                {
                    q: "6.Em uma festa, como você se comporta?",
                    o: ["Prefiro ficar no meu canto observando as pessoas", "Tento deixar todo mundo unido e fico próximo de quem já conheço", "Procuro lugares mais calmos", "Danço até não poder mais e converso até com as paredes"]
                },
                {
                    q: "7.No seu grupo de amigos ou colegas você desempenha o \"papel\" de",
                    o: ["Pessoa das ideias criativas e idealizador de soluções e trabalhos", "Conselheiro(a) e resolvedor(a) de problemas", "Planejador de encontros e atividades mais elaboradas, aquele que faz as coisas acontecerem", "Aquele que topa tudo e anima o clima"]
                },
                {
                    q: "8.Qual é sua visão sobre regras e tradições?",
                    o: ["Questiono as regras, mas as sigo se fizerem sentido lógico", "Tento seguir as regras, mas sou flexível para manter a harmonia", "Valorizo muito as regras e tradições estabelecidas", "Prefiro quebrar as regras e buscar novas experiências"]
                },
                {
                    q: "9.Quando você inicia um novo projeto ou hobby, como você aborda isso?",
                    o: ["Pesquiso profundamente antes de começar", "Busco a opinião de outros e procuro trabalhar em conjunto", "Sigo um plano bem definido para alcançar resultados eficientes", "Gosto de começar logo e aprender ao longo do caminho"]
                },
                {
                    q: "10.Como você lida com a incerteza em projetos ou situações novas?",
                    o: ["Prefiro analisar todas as variáveis antes de tomar qualquer decisão", "Tento manter a calma e busco compreender como a incerteza pode afetar os envolvidos", "Procuro seguir processos e métodos para lidar com a incerteza", "Me adapto e faço mudanças conforme necessário"]
                },
            ],
            // propriedades e variáveis que ajudam a controlar e gerenciar o estado do quiz e a interação do usuário com as perguntas e respostas.
            hWrap: null,
            hQn: null,
            hAns: null,
            now: 0,
            score: 0,

            //Inicializar o quiz criando e anexando os elementos HTML necessários para mostrar a pergunta e as opções de resposta.
            init: () => {
                quiz.hWrap = document.getElementById("quizWrap");
                quiz.hQn = document.createElement("div");
                quiz.hQn.id = "quizQn";
                quiz.hWrap.appendChild(quiz.hQn);
                quiz.hAns = document.createElement("div");
                quiz.hAns.id = "quizAns";
                quiz.hWrap.appendChild(quiz.hAns);
                quiz.draw();
            },

            //Exibir a pergunta e as opções de resposta para a pergunta atual. Cria inputs de tipo radio e labels para cada opção e adiciona eventos de clique para selecionar a resposta.
            draw: () => {
                quiz.hQn.innerHTML = quiz.data[quiz.now].q;
                quiz.hAns.innerHTML = "";
                for (let i in quiz.data[quiz.now].o) {
                    let radio = document.createElement("input");
                    radio.type = "radio";
                    radio.name = "quiz";
                    radio.id = "quizo" + i;
                    quiz.hAns.appendChild(radio);
                    let label = document.createElement("label");
                    label.innerHTML = quiz.data[quiz.now].o[i];
                    label.setAttribute("for", "quizo" + i);
                    label.dataset.idx = i;
                    label.addEventListener("click", () => { quiz.select(label); });
                    quiz.hAns.appendChild(label);
                }
            },

            //Verificar se a resposta selecionada está correta. Atualiza a pontuação e destaca a resposta correta. Depois de um breve atraso, avança para a próxima pergunta ou mostra o resultado final se todas as perguntas foram respondidas.
            select: (option) => {
                let all = quiz.hAns.getElementsByTagName("label");
                for (let label of all) {
                    label.removeEventListener("click", quiz.select);
                }
                let correct = option.dataset.idx == quiz.data[quiz.now].a;
                if (correct) {
                    quiz.score++;
                    option.classList.add("correct");
                } else {
                    option.classList.add("wrong");
                    // Destaque a resposta correta
                    all[quiz.data[quiz.now].a].classList.add("correct");
                }
                quiz.now++;
                setTimeout(() => {
                    if (quiz.now < quiz.data.length) { quiz.draw(); }
                    else {
                        quiz.hQn.innerHTML = `Você respondeu ${quiz.score} de ${quiz.data.length} corretamente.`;
                        quiz.hAns.innerHTML = "";
                        document.getElementById("restartBtn").style.display = "block";
                    }
                }, 1000);
            },

            //Reiniciar o quiz, definindo o índice da pergunta atual e a pontuação para zero, e ocultar o botão de reinício.
            reset: () => {
                quiz.now = 0;
                quiz.score = 0;
                document.getElementById("restartBtn").style.display = "none";
                quiz.draw();
            }
        };

        //Quando a página é carregada, o método init é chamado para configurar e iniciar o quiz.
        window.addEventListener("load", quiz.init);
    </script>
</body>

</html>