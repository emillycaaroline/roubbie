<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #f0e4d7, #d9c2b5);
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .container-d {
            width: 700px;
            max-width: 900px;
            margin: 130px auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }
        h3 {
            font-family: 'Dancing Script', cursive;
            color: #5a2a77;
            margin-bottom: 30px;

        h2 {
            font-weight: 600;
            color: #007bff;
            /* Azul */
            border-bottom: 2px solid #007bff;
            /* Azul */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-control,
        .btn {
            border-radius: 5px;
        }

        .entry {
            background: #ffffff;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .entry:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #ff6f61;
            border-radius: 25px;
            padding: 10px 30px;

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .entry img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .entry h3 {
            font-size: 1.5rem;
            margin-top: 0;
            color: #333;
        }

        .entry p {
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
        }

        .entry small {
            display: block;
            font-size: 0.875rem;
            color: #666;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            /* Azul */
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #ff4c3b;
        }

        .form-control {
            border-radius: 10px;
        }

            background-color: #0056b3;
            /* Azul Escuro */
        }

        .form-label {
            font-weight: 500;
        }
    </style>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="container-d">
        <h3>Notas...</h3>
    <!-- Diário Pessoal Digital -->
    <div style="margin-top: 100px;" class="container-d">
        <h2>Adicionar Entrada ao Diário</h2>
        <form action="insere-diario.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Título:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Escreva aqui...</label>
                <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data:</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

        <h3 class="mt-4">Salvar</h3>
        <?php if (!empty($entries)): ?>
            <?php foreach ($entries as $entry): ?>
                <div class="entry">
                    <?php if (!empty($entry['image'])): ?>
                        <img src="<?php echo htmlspecialchars($entry['image']); ?>" alt="Imagem da entrada" class="img-fluid" style="border-radius: 15px; margin-bottom: 10px;">
                    <?php endif; ?>
                    <h3><?php echo htmlspecialchars($entry['title']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($entry['description'])); ?></p>
                    <small>Data: <?php echo htmlspecialchars($entry['date']); ?></small>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Não há entradas no diário ainda.</p>
        <?php endif; ?>
    </div>
</body>

</html>