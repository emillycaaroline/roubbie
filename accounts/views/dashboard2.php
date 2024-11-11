<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">

    <style>
        body {
            background-color: #E5D7F2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            width: 80%;
            max-width: 600px;
            text-align: center;
            box-sizing: border-box;
        }

        h1 {
            color: #520E6B;
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            color: #333333;
            font-size: 18px;
        }

        .btn-gerenciar {
            display: inline-block;
            padding: 12px 20px;
            background-color: #520E6B;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-gerenciar:hover {
            background-color: #E5D7F2;
            transform: scale(1.05);
        }

        .btn-logout {
            display: inline-block;
            padding: 12px 20px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-logout:hover {
            background-color: #e63946;
            transform: scale(1.05);
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
<div class="container">
        <!-- Exibe o nome do usuário logado -->
        <h1>Bem-vindo, <?= $usuario_id; ?>!</h1>

        <p>Esta é a sua área de Dashboard no Roubbie.</p>

        <!-- Aqui você pode colocar links para outras páginas do app, como a agenda, diário, etc. -->
        <a href="" class="btn-gerenciar">Ver Agenda</a>
        
        <br><br><br><br>
        <a href="index.php?action=logout" class="btn-logout">Logout</a> <!-- Botão de logout -->
    </div>
</body>

</html>