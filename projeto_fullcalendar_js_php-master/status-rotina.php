<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Eventos</title>
    <link rel="stylesheet" href="seu-estilo.css">
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f4f7f6;
            color: #333;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Cabeçalho fixo com navegação */
        header {
            background-color: #13547a;
            color: #fff;
            padding: 15px 20px;
            width: 100%;
            position: fixed;
            top: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        header h1 {
            font-size: 1.8rem;
            color: #fff;
        }

        .filter-container, .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .filter-button {
            background-color: #80d0c7;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        .filter-button:hover {
            background-color: #1f6f8b;
        }

        .button {
            background-color: #e07b39;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        .button:hover {
            background-color: #c46c34;
        }

        /* Main content */
        main {
            margin-top: 100px;
            width: 100%;
            max-width: 1100px;
            padding: 20px;
        }

        /* Estilos para cards */
        .dashboard-section {
            margin: 20px 0;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #13547a;
            font-weight: bold;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .card h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            color: #666;
            font-size: 0.95rem;
        }

        /* Rodapé minimalista */
        footer {
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #13547a;
            color: #fff;
            font-size: 0.9rem;
            margin-top: 30px;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.5rem;
            }

            .button, .filter-button {
                padding: 6px 14px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Dashboard de Eventos</h1>
        <div class="filter-container">
            <button class="filter-button" onclick="filterEvents('all')">Todos</button>
            <button class="filter-button" onclick="filterEvents('diario')">Diário</button>
            <button class="filter-button" onclick="filterEvents('categoria2')">Categoria 2</button>
        </div>
        <a href="http://localhost/roubbie/dashboard.php" class="button">Criar Evento</a>
    </header>

    <main>
        <section class="dashboard-section">
            <h2 class="section-title">Eventos</h2>
            <div class="card-grid">
                <!-- Cards de eventos com conteúdo dinâmico -->
            </div>
        </section>

        <section class="dashboard-section">
            <h2 class="section-title">Entradas Anteriores</h2>
            <div class="card-grid">
                <!-- Cards de entradas de diário com conteúdo dinâmico -->
            </div>
        </section>

        <section class="dashboard-section">
            <h2 class="section-title">Compromissos Futuros</h2>
            <div class="card-grid">
                <!-- Cards de compromissos com conteúdo dinâmico -->
            </div>
        </section>
    </main>

   
</body>
</html>
