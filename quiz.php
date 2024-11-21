<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    
<link rel="stylesheet" href="/css/quiz.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background:black;
}


svg {
	font-family: 'Monoton', cursive;
	width: 100%; height: 100%;
    margin-top:2%;
}
svg text {
	animation: stroke 5s infinite alternate;
	stroke-width: 2;
	stroke: #FF71F9;
	font-size: 100px;
}


@keyframes stroke {
	0%   {
		fill: rgba(27,174,255,0); stroke: rgba(255,113,249,1);
		stroke-dashoffset: 25%; stroke-dasharray: 0 50%; stroke-width: 2;
	}
	70%  {fill: rgba(27,174,255,0); stroke: rgba(255,113,249,1); }
	80%  {fill: rgba(27,174,255,0); stroke: rgba(255,113,249,1); stroke-width: 3; }
	100% {
		fill: rgba(27,174,255,1); stroke: rgba(255,113,249,0);
		stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
	}
}

::selection{
    color: #fff;
    background: rgba(27,174,255,1);
}

.start_btn,
.info_box,
.quiz_box,
.result_box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 
                0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.info_box.activeInfo,
.quiz_box.activeQuiz,
.result_box.activeResult{
    opacity: 1;
    z-index: 5;
    pointer-events: auto;
    transform: translate(-50%, -50%) scale(1);
}



.start_btn {
    top: 77%;
    left: 46%;
    box-shadow: none;
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    }

    @-webkit-keyframes bounceInRight {
    0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    }
    0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0);
    }
    60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
    }
    75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
    }
    90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0);
    }
    100% {
    -webkit-transform: none;
    transform: none;
    }
    }
    @keyframes bounceInRight {
    0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    }
    0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0);
    }
    60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
    }
    75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
    }
    90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0);
    }
    100% {
    -webkit-transform: none;
    transform: none;
    }
    } 

/* START BUTTON FOR GAME */
.start_btn button{
    font-size: 25px;
    font-weight: 500;
    color: #FF71F9;
    padding: 15px 30px;
    outline: none;
    border: none;
    width:150px;
    height:150px;
    background: #000000;
    cursor: pointer;
}

.start_btn button:hover {
    color: rgba(27,174,255,1);
    opacity: 0.9;
}

.info_box{
    width: 540px;
    border:5px solid #FF71F9;
    border-radius: 5px;
    transform: translate(-50%, -50%) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
    background: #f1f1f1;
   
}

.info_box .info-title{
    height: 60px;
    width: 100%;
    border-bottom: 1px solid lightgrey;
    display: flex;
    align-items: center;
    padding: 0 30px;
    border-radius: 5px 5px 0 0;
    font-size: 20px;
    font-weight: 500;
}

.info_box .info-list{
    padding: 15px 30px;
}

.info_box .info-list .info{
    margin: 5px 0;
    font-size: 17px;
}

.info_box .info-list .info span{
    font-weight: 600;
    color: rgba(27,174,255,1);
}
.info_box .buttons{
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 0 30px;
    border-top: 1px solid lightgrey;
}

.info_box .buttons button{
    margin: 0 5px;
    height: 40px;
    width: 100px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    outline: none;
    border-radius: 5px;
    border: 1px solid rgba(27,174,255,1);
    transition: all 0.3s ease;
}

.quiz_box{
    width: 550px;
    border:5px solid #FF71F9;
    border-radius: 5px;
    transform: translate(-50%, -50%) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
    background-color: #ffffff;

}

.quiz_box header{
    position: relative;
    z-index: 2;
    height: 70px;
    padding: 0 30px;
    background: #fff;
    border-radius: 5px 5px 0 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 3px 5px 1px rgba(0,0,0,0.1);
}

.quiz_box header .title{
    font-size: 20px;
    font-weight: 600;
}

.quiz_box header .timer{
    color: #004085;
    background: #cce5ff;
    border: 1px solid #b8daff;
    height: 45px;
    padding: 0 8px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 145px;
}

.quiz_box header .timer .time_left_txt{
    font-weight: 400;
    font-size: 17px;
    user-select: none;
}

.quiz_box header .timer .timer_sec{
    font-size: 18px;
    font-weight: 500;
    height: 30px;
    width: 45px;
    color: #fff;
    border-radius: 5px;
    line-height: 30px;
    text-align: center;
    background: #343a40;
    border: 1px solid #343a40;
    user-select: none;
}

.quiz_box header .time_line{
    position: absolute;
    bottom: 0px;
    left: 0px;
    height: 3px;
    background: rgba(27,174,255,1);
}

section{
    padding: 25px 30px 20px 30px;
    background: #fff;
    background: #f1f1f1;
}

section .que_text{
    font-size: 25px;
    font-weight: 600;
}

section .option_list{
    padding: 20px 0px;
    display: block;   
}

section .option_list .option{
    background: aliceblue;
    border: 1px solid #84c5fe;
    border-radius: 5px;
    padding: 8px 15px;
    font-size: 17px;
    margin-bottom: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

section .option_list .option:last-child{
    margin-bottom: 0px;
}

section .option_list .option:hover{
    color: #004085;
    background: #cce5ff;
    border: 1px solid #b8daff;
}

section .option_list .option.correct{
    color: #155724;
    background: #d4edda;
    border: 1px solid #c3e6cb;
}

section .option_list .option.incorrect{
    color: #721c24;
    background: #f8d7da;
    border: 1px solid #f5c6cb;
}

section .option_list .option.disabled{
    pointer-events: none;
}

section .option_list .option .icon{
    height: 26px;
    width: 26px;
    border: 2px solid transparent;
    border-radius: 50%;
    text-align: center;
    font-size: 13px;
    pointer-events: none;
    transition: all 0.3s ease;
    line-height: 24px;
}
.option_list .option .icon.tick{
    color: #23903c;
    border-color: #23903c;
    background: #d4edda;
}

.option_list .option .icon.cross{
    color: #a42834;
    background: #f8d7da;
    border-color: #a42834;
}

footer{
    height: 60px;
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid lightgrey;
}

footer .total_que span{
    display: flex;
    user-select: none;
}

footer .total_que span p{
    font-weight: 500;
    padding: 0 5px;
}

footer .total_que span p:first-child{
    padding-left: 0px;
}

footer button{
    height: 40px;
    padding: 0 13px;
    font-size: 18px;
    font-weight: 400;
    cursor: pointer;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    background: rgba(27,174,255,1);
    border: 1px solid rgba(27,174,255,1);
    line-height: 10px;
    opacity: 0;
    pointer-events: none;
    transform: scale(0.95);
    transition: all 0.3s ease;
}

footer button:hover{
    background: rgba(27,174,255,1);
}

footer button.show{
    opacity: 1;
    pointer-events: auto;
    transform: scale(1);
}

.result_box{
    background: #fff;
    border-radius: 5px;
    display: flex;
    padding: 25px 30px;
    width: 450px;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    transform: translate(-50%, -50%) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
    border:5px solid #FF71F9;
}

.result_box .icon{
    font-size: 100px;
    color: rgba(27,174,255,1);
    margin-bottom: 10px;
}

.result_box .complete_text{
    font-size: 20px;
    font-weight: 500;
}

.result_box .score_text span{
    display: flex;
    margin: 10px 0;
    font-size: 18px;
    font-weight: 500;
}

.result_box .score_text span p{
    padding: 0 4px;
    font-weight: 600;
}

.result_box .buttons{
    display: flex;
    margin: 20px 0;
}

.result_box .buttons button{
    margin: 0 10px;
    height: 45px;
    padding: 0 20px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    outline: none;
    border-radius: 5px;
    border: 1px solid rgba(27,174,255,1);
    transition: all 0.3s ease;
}

.buttons button.restart{
    color: #fff;
    background: rgba(27,174,255,1);
}

.buttons button.restart:hover{
    background: rgba(27,174,255,1);
}

.buttons button.quit{
    color: rgba(27,174,255,1);
    background: #fff;
}

.buttons button.quit:hover{
    color: #fff;
    background: rgba(27,174,255,1);
}
</style>
<body>
<div class="wrapper">
        <svg>
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                QuizRoub
            </text>
        </svg>
        </div>


    <!-- start Quiz button -->
    <div class="start_btn"><button>Bora!</button></div>

    <!-- Info Box -->
    <div class="info_box">
    <div class="info-title"><span>Regras do Quiz</span></div>
    <div class="info-list">
        <div class="info">Responda 10 perguntas rápidas.</div>
        <div class="info">As perguntas ajudam a entender sua personalidade.</div>
        <div class="info">Ao final, você receberá sugestões de hobbies.</div>
    </div>
        <div class="buttons">
            <button class="quit">Sair</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>


    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>
    <script>
        // creating an array and passing the number, questions, options, and answers
let questions = [
    {
    numb: 1,
    question: "What challenge did codepen have in the month of March 2023?",
    answer: "Buttons",
    options: [
      "Shape",
      "Buttons",
      "Texture",
      "The typography of quotes"
    ]
  },
    {
    numb: 2,
    question: "What color shade is this hex #ffff00?",
    answer: "yellow",
    options: [
      "orange",
      "red",
      "yellow",
      "pink"
    ]
  },
    {
    numb: 3,
    question: "How does a FOR loop start?",
    answer: "for (i = 0; i <= 5; i++)",
    options: [
      "for (i = 0; i <= 5; i++)",
      "for (i <= 5; i++)",
      "for i = 1 to 5",
      "for (i = 0; i <= 5)"
    ]
  },
    {
    numb: 4,
    question: "How do you round the number 7.25, to the nearest integer?",
    answer: "Math.round(7.25)",
    options: [
      "Math.rnd(7.25)",
      "rnd(7.25)",
      "round(7.25)",
      "Math.round(7.25)"
    ]
  },
    {
    numb: 5,
    question: "What is the default value of the position property?",
    answer: "static",
    options: [
      "relative",
      "fixed",
      "static",
      "absolute"
    ]
  },
    {
    numb: 6,
    question: "How do you make each word in a text start with a capital letter?",
    answer: "text-transform:capitalize",
    options: [
      "text-transform:capitalize",
      "text-style:capitalize",
      "transform:capitalize",
      "You can't do that with css"
    ]
  },
    {
    numb: 7,
    question: "How do you group selectors?",
    answer: "Separate each selector with a comma",
    options: [
      "Separate each selector with a slash",
      "Separate each selector with a plus sign",
      "Separate each selector with a space",
      "Separate each selector with a comma"
    ]
  },
    {
    numb: 8,
    question: "How to write an IF statement in JavaScript?",
    answer: "if (i == 5)",
    options: [
      "if (i == 5)",
      "if i = 5 then",
      "if i = 5",
      "if i == 5 then"
    ]
  },
    {
    numb: 9,
    question: "How do you select all p elements inside a div element?",
    answer: "div p",
    options: [
      "p,div",
      "div.p",
      "div + p",
      "div p"
    ]
  },
    {
    numb: 10,
    question: "How can you detect the client's browser name?",
    answer: "navigator.appName",
    options: [
      "client.browserName",
      "client.navName",
      "navigator.appName",
      "browser.name"
    ]
  },
];
// Seleção dos elementos necessários
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");

// Ao clicar no botão startQuiz
start_btn.onclick = () => {
    info_box.classList.add("activeInfo"); // Mostra a caixa de informações
}

// Ao clicar no botão exitQuiz
exit_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); // Oculta a caixa de informações
}

// Ao clicar no botão continueQuiz
continue_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); // Oculta a caixa de informações
    quiz_box.classList.add("activeQuiz"); // Mostra a caixa de quiz
    showQuestions(0); // Chama a função showQuestions
    queCounter(1); // Passa 1 como parâmetro para queCounter
}

let timeValue = 15;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// Ao clicar no botão restartQuiz
restart_quiz.onclick = () => {
    quiz_box.classList.add("activeQuiz");
    result_box.classList.remove("activeResult");
    timeValue = 15;
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuestions(que_count); // Chama a função showQuestions
    queCounter(que_numb); // Passa que_numb como parâmetro
    clearInterval(counter); // Limpa o temporizador
    clearInterval(counterLine); // Limpa o temporizador da linha
    startTimer(timeValue); // Inicia o temporizador
    startTimerLine(widthValue); // Inicia a linha do tempo
    timeText.textContent = "Time Left"; // Atualiza o texto
    next_btn.classList.remove("show"); // Esconde o botão 'next'
}

// Ao clicar no botão quitQuiz
quit_quiz.onclick = () => {
    window.location.reload(); // Recarrega a página
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// Ao clicar no botão 'Next Question'
next_btn.onclick = () => {
    if(que_count < questions.length - 1) {
        que_count++;
        que_numb++;
        showQuestions(que_count); // Chama a função showQuestions
        queCounter(que_numb); // Passa que_numb como parâmetro
        clearInterval(counter); // Limpa o temporizador
        clearInterval(counterLine); // Limpa o temporizador da linha
        startTimer(timeValue); // Inicia o temporizador
        startTimerLine(widthValue); // Inicia a linha do tempo
        next_btn.classList.remove("show"); // Esconde o botão 'next'
    } else {
        clearInterval(counter); // Limpa o temporizador
        clearInterval(counterLine); // Limpa o temporizador da linha
        showResult(); // Chama a função showResult
    }
}

// Função para exibir as perguntas e opções
function showQuestions(index) {
    const que_text = document.querySelector(".que_text");

    // Criação do conteúdo para a pergunta e opções
    let que_tag = `<span>${questions[index].numb}. ${questions[index].question}</span>`;
    let option_tag = questions[index].options.map((option, i) => {
        return `<div class="option"><span>${option}</span></div>`;
    }).join('');
    
    que_text.innerHTML = que_tag;
    option_list.innerHTML = option_tag;

    const options = option_list.querySelectorAll(".option");

    // Adicionando evento de clique para cada opção
    options.forEach(option => {
        option.addEventListener("click", () => optionSelected(option));
    });
}

// Ícones de resposta
const tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
const crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

// Função para selecionar a opção
function optionSelected(answer) {
    clearInterval(counter); // Limpa o temporizador
    clearInterval(counterLine); // Limpa o temporizador da linha
    let userAns = answer.textContent;
    let correcAns = questions[que_count].answer;
    const allOptions = option_list.children.length;

    if(userAns === correcAns) {
        userScore++;
        answer.classList.add("correct");
        answer.insertAdjacentHTML("beforeend", tickIconTag);
    } else {
        answer.classList.add("incorrect");
        answer.insertAdjacentHTML("beforeend", crossIconTag);
        
        for(let i = 0; i < allOptions; i++) {
            if(option_list.children[i].textContent === correcAns) {
                option_list.children[i].classList.add("correct");
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
            }
        }
    }

    // Desabilita todas as opções
    for(let i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add("disabled");
    }

    // Mostra o botão 'next'
    next_btn.classList.add("show");
}

function showResult() {
    info_box.classList.remove("activeInfo");
    quiz_box.classList.remove("activeQuiz");
    result_box.classList.add("activeResult");

    const scoreText = result_box.querySelector(".score_text");
    let scoreTag;

    if(userScore > 3) {
        scoreTag = `<span>Congrats! You got <p>${userScore}</p> out of <p>${questions.length}</p></span>`;
    } else if(userScore > 1) {
        scoreTag = `<span>Nice! You got <p>${userScore}</p> out of <p>${questions.length}</p></span>`;
    } else {
        scoreTag = `<span>Sorry! You got <p>${userScore}</p> out of <p>${questions.length}</p></span>`;
    }

    scoreText.innerHTML = scoreTag;
}

    </script>
</body>
</html>