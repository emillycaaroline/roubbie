<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Splash</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff; /* Cor de fundo da tela de splash */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Para garantir que a tela de splash fique acima do conteúdo */
        }

        #logo {
            width: 200px; /* Ajuste o tamanho do logo conforme necessário */
        }
    </style>
</head>
<body>
    <div id="splash-screen">
        <img src="../roubbie/img/logo/Logo_preta.png" alt="Logo" id="logo">
    </div>
    <div id="main-content" style="display: none;">
    </div>
    <script>
        // Espera 3 segundos e depois oculta a tela de splash e exibe o conteúdo principal
        setTimeout(function() {
            document.getElementById('splash-screen').style.display = 'none';
            document.getElementById('main-content').style.display = 'block';
        }, 3000); // Tempo em milissegundos (3000 ms = 3 segundos)
    </script>
</body>
</html>
