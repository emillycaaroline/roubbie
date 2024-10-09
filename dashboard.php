<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard do Roubbie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Resetando margens e preenchimentos padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Estilo do Navbar */
        .navbar {
            background-color: #007bff;
            color: white;
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }

        /* Estilo geral do container do dashboard */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 2rem;
        }

        /* Estilo das seções do dashboard */
        .card {
            background-color: white;
            border-radius: 12px;
            margin: 1rem;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1 1 300px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        /* Estilo da tabela dentro do card */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .table th {
            background-color: #f8f9fa;
        }

        /* Estilo das badges */
        .badge {
            padding: 0.5rem 0.75rem;
            border-radius: 12px;
        }

        .bg-label-success {
            background-color: #28a745;
            color: white;
        }

        .bg-label-danger {
            background-color: #dc3545;
            color: white;
        }

        .bg-label-warning {
            background-color: #ffc107;
            color: black;
        }

        /* Estilo do gráfico de progresso */
        .progress {
            height: 20px;
            margin-top: 1rem;
        }
    </style>
</head>

<body>

<?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="card">
            <h2>Status do Usuário</h2>
            <p>Atualize seu progresso e mantenha-se em dia com seus objetivos!</p>
            <h5>Progresso Geral</h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
        </div>

        <div class="card">
            <h2>Pilares da Saúde</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Saúde Física</td>
                        <td><span class="badge bg-label-success">Ativo</span></td>
                    </tr>
                    <tr>
                        <td>Saúde Emocional</td>
                        <td><span class="badge bg-label-danger">Inativo</span></td>
                    </tr>
                    <tr>
                        <td>Saúde Social</td>
                        <td><span class="badge bg-label-warning">Precisa de Atenção</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card">
            <h2>Diário</h2>
            <p><a href="/diario.php">Acesse suas anotações...</a> <span class="badge bg-label-success">+5 novas entradas</span></p>
        </div>

        <div class="card">
            <h2>Progresso Recentes</h2>
            <p>Últimas atualizações sobre suas atividades.</p>
            <ul>
                <li>Exercícios físicos: 3 vezes na semana passada.</li>
                <li>Apoio emocional: Participação em grupo.</li>
                <li>Leitura: Livro sobre saúde mental concluído.</li>
            </ul>
        </div>

        <div class="card">
            <h2>Tarefas Pendentes</h2>
            <p>Verifique suas tarefas para esta semana:</p>
            <ul>
                <li>Completar a atividade de meditação.</li>
                <li>Marcar consulta com terapeuta.</li>
                <li>Preparar refeição saudável para a semana.</li>
                <li><a href="/add_task.php" class="btn btn-primary btn-sm">Adicionar Tarefa</a></li>
            </ul>
        </div>

        <div class="card">
            <h2>Compromissos Futuros</h2>
            <p>Não perca os próximos compromissos:</p>
            <ul>
                <li>Reunião de grupo de apoio: Segunda-feira, 15h.</li>
                <li>Consulta médica: Quarta-feira, 10h.</li>
                <li>Evento de bem-estar: Sexta-feira, 18h.</li>
            </ul>
        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
