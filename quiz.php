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
    padding: 0 20px; /* Aumentado para um melhor espaçamento em telas pequenas */
}

/* (B) PERGUNTA */
#quizQn {
    padding: 20px; /* Aumentado para mais espaço */
    color: #fff;
    font-size: 24px; /* Aumentado para melhor legibilidade */
    border-radius: 12px; /* Bordas mais suaves */
    background: linear-gradient(135deg, #4c93ba 0%, #3a7a9e 100%); /* Gradiente para um visual mais dinâmico */
}

/* (C) RESPOSTAS */
#quizAns {
    margin: 15px 0; /* Aumentado para maior espaçamento entre as opções */
    display: grid;
    grid-template-columns: 1fr; /* Mantém em coluna única por padrão */
    grid-gap: 15px;
}

#quizAns input[type=radio] {
    display: none; /* Esconde os botões de rádio */
}

#quizAns label {
    background: #f9f9f9;
    border: 2px solid #ddd; /* Aumentado para um contraste mais forte */
    border-radius: 12px; /* Bordas mais suaves */
    padding: 15px;
    font-size: 20px; /* Aumentado para melhor legibilidade */
    cursor: pointer;
    text-align: center;
    transition: background 0.3s, transform 0.2s, border 0.2s; /* Transição para bordas */
}

#quizAns label.correct {
    background: #d8ffc4;
    border: 2px solid #60a03f; /* Aumentado para um contraste mais forte */
}

#quizAns label.wrong {
    background: #ffe8e8;
    border: 2px solid #c78181; /* Aumentado para um contraste mais forte */
}

#quizAns label:hover {
    transform: scale(1.05);
    border-color: #a0a0a0; /* Mudança de cor ao passar o mouse */
}

/* PÁGINA & CORPO */
* {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte mais moderna */
    box-sizing: border-box;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    text-align: center;
}

/* WIDGET */
.widget-wrap {
    width: 100%;
    max-width: 700px; /* Aumentado para mais espaço em dispositivos maiores */
    padding: 30px; /* Aumentado para mais espaçamento interno */
    border-radius: 20px;
    background-color: rgba(255, 255, 255, 0.9); /* Fundo branco com leve transparência */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Sombra para dar profundidade */
}

/* BOTÃO DE REINICIAR */
#restartBtn {
    margin-top: 20px;
    padding: 12px 25px; /* Aumentado para maior área clicável */
    background: #4c93ba;
    color: #fff;
    border: none;
    border-radius: 8px; /* Bordas mais suaves */
    cursor: pointer;
    font-size: 20px; /* Aumentado para melhor legibilidade */
    transition: background 0.3s, transform 0.2s; /* Adicionando transições */
}

#restartBtn:hover {
    background: #357aab;
    transform: translateY(-2px); /* Leve elevação no hover */
}

/* Estilos para dispositivos móveis */
@media (max-width: 767px) {
    #quizQn {
        font-size: 20px; /* Mantido maior para leitura em telas pequenas */
    }

    #quizAns {
        grid-template-columns: 1fr; /* Uma coluna por padrão */
    }

    #quizAns label {
        font-size: 18px; /* Mantido grande o suficiente */
    }

    .widget-wrap {
        padding: 20px; /* Menos espaço em dispositivos menores */
    }
}

/* Estilos para dispositivos maiores */
@media (min-width: 768px) {
    #quizQn {
        font-size: 26px; /* Aumentado para telas maiores */
    }

    #quizAns {
        grid-template-columns: repeat(2, 1fr); /* Duas colunas em telas maiores */
    }

    #quizAns label {
        font-size: 22px; /* Aumentado para leitura em telas maiores */
    }

    .widget-wrap {
        padding: 30px; /* Mais espaço em telas maiores */
    }
}

    </style>
</head>

<body>

    <!-- Quiz -->
    <div class="widget-wrap">
        <h1>RoubQuiz</h1>

        <!-- (A) QUIZ CONTAINER -->
        <div id="quizWrap"></div>

        <!-- RESTART BUTTON -->
        <button id="restartBtn" style="display: none;" onclick="quiz.reset()">Restart Quiz</button>
        <?php
    // Inclui a barra de progresso
    include 'includes/barra_progresso.php';
    ?>
    </div>
  
    <script>
        // Definição do quiz com perguntas e alternativas
        var quiz = {
            data: [{
                    q: "1. Qual o seu papel na sua equipe ou grupo de amigos?",
                    o: ["Faço minhas obrigações com antecedência e gosto de planejar as coisas.", "Sou conselheiro, estou sempre aí para conversar e ajudar a manter um clima bom.", "Sou aquele que coloca a mão na massa, tomo atitudes para cumprir os processos.", "Penso fora da caixinha, me adapto bem às circunstâncias facilmente e agilizo os processos."]
                },
                {
                    q: "2. Quando você tem que tomar decisões, como você reage?",
                    o: ["Planejo e sigo um plano se fizer sentido na minha mente, não necessariamente preciso de um método ou muitas opiniões", "Busco inspiração e penso em como todos os envolvidos vão se sentir", "Mantenho a estabilidade e sigo com o que organizei", "Ajo naturalmente e deixo as coisas fluir"]
                },
                {
                    q: "3. Como você prefere resolver problemas?",
                    o: ["Analisando o ambiente e suas informações e criando estratégias", "Buscando soluções criativas e colaborativas", "Sigo meus princípios, normas e processos à risca", "Penso em diferentes formas de resolução para o problema"]
                },
                {
                    q: "4.Em uma viagem você prefere",
                    o: ["Procurar lugares do meu interesse (A)", "Ir à lugares diferentes e agradar todo mundo na escolha (D)", "Seguir minha programação à risca, evitando contratempos (S)", "Deixo a vida me levar, qualquer lugar que eu chegar é uma nova experiência (E)"]
                },
                {
                    q: "5.Você está entediado e procura algumas atividades para ocuparem seu tempo. Quais você escolhe?",
                    o: ["Pintura, jogos de tabuleiro ou escrita (A)", "Meditação, yoga ou fotografia (D)", "Jardinagem, culinária ou caminhada (S)", "Skate, dança ou saio para correr (E)"]
                },
                {
                    q: "6.Em uma festa, como você se comporta",
                    o: ["Prefiro ficar no meu canto observando as pessoas (A)", "Tento deixar todo mundo unido e fico próximo de quem já conheço (D)", "Procuro lugares mais calmos (S)", "Danço até não poder mais e converso até com as paredes (E)"]
                },
                {
                    q: "7.No seu grupo de amigos ou colegas você desempenha o papel de",
                    o: ["Pessoa das ideias criativas e idealizador de soluções e trabalhos(A)", "Conselheiro(a) e resolvedor(a) de problemas (D)", "Planejador de encontros e atividades mais elaboradas, aquele que faz as coisas acontecerem (S)", "Aquele que topa tudo e anima o clima (E)"]
                },
                {
                    q: "8.Qual é sua visão sobre regras e tradições?",
                    o: ["Questiono as regras, mas as sigo se fizerem sentido lógico. (A)", "Tento seguir as regras, mas sou flexível para manter a harmonia. (D)", "Valorizo muito as regras e tradições estabelecidas. (S)", "Prefiro quebrar as regras e buscar novas experiências. (E)"]
                },
                {
                    q: "9.Quando você inicia um novo projeto ou hobby, como você aborda isso?",
                    o: ["Pesquiso profundamente antes de começar. (A)", "Busco a opinião de outros e procuro trabalhar em conjunto. (D)", "Sigo um plano bem definido para alcançar resultados eficientes. (S)", "Gosto de começar logo e aprender ao longo do caminho. (E)"]
                },
                {
                    q: "10.Como você lida com a incerteza em projetos ou situações novas?",
                    o: ["Prefiro analisar todas as variáveis antes de tomar qualquer decisão. (A)", "Tento entender como a incerteza afeta os outros e busco soluções colaborativas. (D)", "Procuro seguir processos comprovados e manter a organização mesmo em situações incertas. (S)", "Abraço a incerteza e vejo como uma oportunidade para explorar novas possibilidades e improvisar. (E)"]
                },
            ],
            hWrap: null,
            hQn: null,
            hAns: null,
            now: 0,
            score: 0,

            // Inicializa o quiz
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

            // Desenha a pergunta e as opções
            draw: () => {
                quiz.hQn.innerHTML = quiz.data[quiz.now].q;
                quiz.hAns.innerHTML = "";
                for (let i in quiz.data[quiz.now].o) {
                    let label = document.createElement("label");
                    label.innerHTML = quiz.data[quiz.now].o[i];
                    label.classList.add("quiz-option");
                    label.dataset.idx = i;
                    label.addEventListener("click", () => {
                        quiz.select(label);
                    });
                    quiz.hAns.appendChild(label);
                }
            },

            // Seleciona a resposta e avança para a próxima pergunta
            select: (option) => {
                // Desabilitar a seleção de outras opções
                let allLabels = quiz.hAns.getElementsByTagName("label");
                for (let label of allLabels) {
                    label.style.pointerEvents = "none";
                }

                // Avança para a próxima pergunta após um breve intervalo
                quiz.now++;
                setTimeout(() => {
                    if (quiz.now < quiz.data.length) {
                        quiz.draw(); // Vai para a próxima pergunta
                    } else {
                        quiz.showResult(); // Mostra o resultado se todas as perguntas foram respondidas
                    }
                }, 1000); // Tempo de espera de 1 segundo antes de avançar
            },

            // Exibe o resultado final
            showResult: () => {
                quiz.hQn.innerHTML = `Você completou o quiz!`;
                quiz.hAns.innerHTML = "";
                document.getElementById("restartBtn").style.display = "block";
            },

            // Reinicia o quiz
            reset: () => {
                quiz.now = 0;
                document.getElementById("restartBtn").style.display = "none";
                quiz.draw();
            }
        };

        // Inicializa o quiz quando a página é carregada
        window.addEventListener("load", quiz.init);
    </script>

</body>

</html>