<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Array com as funcionalidades do Roubbie
$funcionalidades = [
    [
        'titulo' => 'Organize sua Rotina',
        'descricao' => 'Gerencie todos os seus compromissos e tarefas de forma simples e intuitiva.',
        'imagem' => 'https://via.placeholder.com/150',
    ],
    [
        'titulo' => 'Diário Pessoal',
        'descricao' => 'Registre seus pensamentos e experiências diárias em um ambiente seguro e privado.',
        'imagem' => 'https://via.placeholder.com/150',
    ],
    [
        'titulo' => 'Acompanhe seus Eventos',
        'descricao' => 'Fique por dentro dos seus eventos e lembre-se dos compromissos importantes com facilidade.',
        'imagem' => 'https://via.placeholder.com/150',
    ],
    [
        'titulo' => 'Aumente sua Produtividade',
        'descricao' => 'Use as ferramentas de produtividade do Roubbie para cumprir suas metas e manter o foco.',
        'imagem' => 'https://via.placeholder.com/150',
    ],
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo ao Roubbie</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f9fc;
            /* Um azul claro e suave */
        }

        header {
            background: linear-gradient(to right, #13547a, #80d0c7);
            margin-top: auto;
            color: white;
            padding: 3px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 0.5rem;
            font-size: 3rem;
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        h2 {
            margin-top: 1.5rem;
            font-size: 1.8rem;
            color: #333;
        }

        .funcionalidades {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }

        .funcionalidade {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 25px;
            text-align: center;
            flex-basis: 22%;
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            /* Para permitir posicionamento de elementos de fundo */
        }

        .funcionalidade:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
        }

        img {
            width: 100px;
            height: auto;
            margin-bottom: 1rem;
            transition: transform 0.3s;
        }

        .funcionalidade:hover img {
            transform: scale(1.1);
            /* Aumenta a imagem no hover */
        }

        p {
            color: #555;
        }

        .cta {
            text-align: center;
            margin: 40px 0;
        }

        .cta a {
            padding: 15px 30px;
            background: #28A745;
            /* Verde vibrante */
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background 0.3s, transform 0.3s;
        }

        .cta a:hover {
            background: #218838;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .funcionalidade {
                flex-basis: 45%;
            }
        }

        @media (max-width: 480px) {
            .funcionalidade {
                flex-basis: 100%;
            }

            h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Descubra o Roubbie!</h1>
        <p>O aplicativo que transforma a forma como você organiza sua vida.</p>
    </header>

    <div class="container">

        <div class="funcionalidades">
            <?php foreach ($funcionalidades as $funcionalidade) : ?>
                <div class="funcionalidade">
                    <img src="<?php echo $funcionalidade['imagem']; ?>" alt="<?php echo $funcionalidade['titulo']; ?>">
                    <h2><?php echo $funcionalidade['titulo']; ?></h2>
                    <p><?php echo $funcionalidade['descricao']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="cta">
            <h2>Pronto para começar?</h2>
            <a href="login-register/login.php">Entrar no Roubbie</a>
            <p>Não tem uma conta? <a href="login-register/cadastro.php">Cadastrar-se</a></p>
        </div>

    </div>

    <footer>
        <p>&copy; 2024 Roubbie. Todos os direitos reservados.</p>
    </footer>

</body>

</html>