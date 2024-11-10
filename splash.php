<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Splash</title>
    <link rel="stylesheet" href="styles.css">
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
            background: linear-gradient(to bottom right, #80d0c7, #13547a);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 1;
            transition: opacity 1s ease;
        }

        #logo {
            width: 400px;
        }
    </style>
</head>
<body>
    <!-- tela de abertura com a logo do roubbie  -->
    <div id="splash-screen">
        <img src="../roubbie/img/logo/logo_branco.png" alt="Logo" id="logo">
    </div>

    <script>
        // Aguarda 3 segundos e depois redireciona para o dashboard
        setTimeout(function() {
            window.location.href = "/roubbie/dashboard.php"; // Redireciona para o dashboard
        }, 3000); // 3 segundos de espera
    </script>
</body>
</html>
