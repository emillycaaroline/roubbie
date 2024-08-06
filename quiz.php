<!DOCTYPE html>
<html>
<head>
    <title>Questionário de Personalidade</title>
</head>
<body>
    <form action="process.php" method="post">
        <h3>Que tipo de livro você gosta de ler?</h3>
        <input type="radio" name="q1" value="Analista"> Ciência e filosofia<br>
        <input type="radio" name="q1" value="Diplomata"> Histórias inspiradoras<br>
        <input type="radio" name="q1" value="Sentinela"> Guias práticos<br>
        <input type="radio" name="q1" value="Explorador"> Aventuras<br>
        
        <!-- Adicione mais perguntas conforme necessário -->
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
// process.php

// Inicializa as pontuações
$scores = [
    "Analista" => 0,
    "Diplomata" => 0,
    "Sentinela" => 0,
    "Explorador" => 0
];

// Processa as respostas
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (array_key_exists($value, $scores)) {
            $scores[$value]++;
        }
    }
}

// Identifica a personalidade predominante e a menos predominante
$predominant_personality = array_keys($scores, max($scores))[0];
$least_personality = array_keys($scores, min($scores))[0];

// Sugestões de atividades
$activities = [
    "Analista" => [
        "Jogos de estratégia e planejamento de projetos",
        "Leitura sobre ciência e filosofia",
        "Estudo de novos conceitos, quebra-cabeças, invenções e experimentos científicos",
        "Liderança em projetos, debates e gerenciamento de equipes",
        "Discussões intelectuais, desafios criativos e exploração de novas ideias e conceitos"
    ],
    "Diplomata" => [
        "Voluntariado e apoio a causas sociais",
        "Artes criativas (pintura, música, escrita)",
        "Participação em grupos de discussão e atividades comunitárias",
        "Meditação e práticas espirituais",
        "Eventos sociais e viagens"
    ],
    "Sentinela" => [
        "Jardinagem e projetos de bricolagem",
        "Culinária e cuidados com a família",
        "Administração e organização de eventos",
        "Participação em clubes e organizações comunitárias",
        "Eventos sociais e atividades estruturadas"
    ],
    "Explorador" => [
        "Esportes radicais e aventuras ao ar livre",
        "Fotografia e exploração de novas áreas",
        "Artesanato e consertos",
        "Dança e apresentações",
        "Participação em eventos sociais e culturais"
    ]
];

// Exibe o resultado
echo "<h2>Personalidade Predominante: $predominant_personality</h2>";
echo "<h3>Sugestões de Atividades:</h3><ul>";
foreach ($activities[$predominant_personality] as $activity) {
    echo "<li>$activity</li>";
}
echo "</ul>";

echo "<h2>Área para Desenvolvimento: $least_personality</h2>";
echo "<h3>Sugestões para Desenvolver:</h3><ul>";
foreach ($activities[$least_personality] as $activity) {
    echo "<li>$activity</li>";
}
echo "</ul>";
?>
