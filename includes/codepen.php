<html lang="en">

<head>
    <meta charset="UTF-8">


    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">




    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


    <title>CodePen - Quiz app interface</title>

    <link rel="canonical" href="https://codepen.io/FlorinPop17/pen/qqYNgW">




    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato");

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
        }

        body {
            font-family: "Lato", sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        body:before {
            content: "";
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-image: url("http://oi66.tinypic.com/23mvj48.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            filter: blur(2px);
            z-index: -1;
        }

        .quiz-container {
            width: 450px;
            color: white;
            font-size: 110%;
            margin: auto;
        }

        .quiz-container h1 {
            text-align: center;
            color: #cb2127;
            margin-bottom: 10px;
        }

        .quiz-container .box {
            padding: 10px 15px;
        }

        .quiz-container .question {
            background-color: #cb2127;
            margin-bottom: 25px;
            font-size: 115%;
            padding-top: 20px;
            padding-bottom: 20px;
            position: relative;
        }

        .quiz-container .question:after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 35px;
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #cb2127;
        }

        .quiz-container .question span {
            background-color: #cb2127;
            color: white;
            display: block;
            float: left;
            margin-left: -15px;
            margin-top: -10px;
            margin-right: 0px;
            padding: 10px 10px;
            text-align: center;
            text-transform: uppercase;
            width: 40px;
        }

        .quiz-container .answers {
            padding-left: 0;
            list-style-type: none;
        }

        .quiz-container .answers .answer {
            background-color: #fff;
            color: #cb2127;
            margin-bottom: 10px;
            position: relative;
        }

        .quiz-container .answers .answer:hover,
        .quiz-container .answers .answer.active {
            cursor: pointer;
            color: #2ecc71;
        }

        .quiz-container .answers .answer:hover span:not([class^=checkmark]),
        .quiz-container .answers .answer.active span:not([class^=checkmark]) {
            background-color: #2ecc71;
        }

        .quiz-container .answers .answer.active span.checkmark {
            background-color: #fff;
            position: absolute;
            top: 8px;
            right: 20px;
            font-size: 120%;
        }

        .quiz-container .answers .answer span:not([class^=checkmark]) {
            background-color: #cb2127;
            color: white;
            display: block;
            float: left;
            margin-left: -15px;
            margin-top: -10px;
            margin-right: 20px;
            padding: 10px 0;
            text-align: center;
            text-transform: uppercase;
            width: 40px;
        }

        .quiz-container button {
            background-color: #cb2127;
            color: #fff;
            font-size: 110%;
            border: 0;
            width: 100%;
            position: relative;
        }

        .quiz-container button:hover {
            background-color: #2ecc71;
            cursor: pointer;
        }

        .quiz-container button span {
            font-size: 200%;
            position: absolute;
            top: -3px;
            right: 10px;
        }

        @media (max-width: 450px) {
            .quiz-container {
                width: calc(100% - 30px);
            }
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



</head>

<body translate="no">
    <div class="quiz-container">
        <h1>Quiz interface</h1>
        <div class="question box">
            <p><span>1.</span> What does CSS stand for?</p>
        </div>
        <ul class="answers">
            <li class="answer box active">
                <p><span>a</span> Computer Style Sheets</p>
                <span class="checkmark">✓</span>
            </li>
            <li class="answer box">
                <p><span>b</span> Cascading Style Sheets</p>
            </li>
            <li class="answer box">
                <p><span>c</span> Colorful Style Sheets</p>
            </li>
            <li class="answer box">
                <p><span>d</span> Creative Style Sheets</p>
            </li>
        </ul>
        <button class="box">Send<span>›</span></button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script id="rendered-js">
        $(document).ready(function() {
            var checkmark = "<span class='checkmark'>&#x2713;</span>";

            $(".answer").click(function() {
                $(this).siblings(".answer").removeClass("active").children("span").remove();
                $(this).addClass("active").append(checkmark);
            });

            $("button").click(function() {
                if ($(".active").length) {
                    if ($(".active").index() === 1) {
                        alert("Well done!");
                    } else {
                        alert("Wrong answer!");
                    }
                } else {
                    alert("Please select an answer!");
                }
            });
        });
        //# sourceURL=pen.js
    </script>





</body>

</html>