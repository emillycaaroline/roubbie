<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bloco de Notas para gerenciar e adicionar suas notas.">
    <meta name="author" content="Seu Nome">
    <title>Bloco de Notas</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> <!-- External CSS -->
</head>
<style>
    /* Estilo para feedback de sucesso */
    #feedback {
        display: none;
        color: green;
        text-align: center;
        margin-top: 10px;
    }

    /* Outros estilos podem ser adicionados aqui */
    body{
        background-image: none; /* Certifique-se de que não há imagem de fundo */
    }
</style>

<body id="top">
    <main>
         <!-- Adiciona o header -->
         <?php include 'includes/header.php'; ?>

         <!-- Card das notas -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <!-- Botão para adicionar nota -->
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addNoteModal">
                        Adicionar Nota
                    </button>

                    <!-- Feedback de sucesso -->
                    <div id="feedback" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        Nota adicionada com sucesso!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <!-- Conteúdo das notas -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="#">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Nota</h5>
                                                    <p class="mb-0">Adicionar notas</p>
                                                </div>
                                                <span class="badge bg-design rounded-pill ms-auto">14</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para adicionar nova nota -->
                    <div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNoteModalLabel">Adicionar Nota</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="noteTitle" class="form-label">Título</label>
                                            <input type="text" class="form-control" id="noteTitle" placeholder="Digite o título da nota">
                                        </div>
                                        <div class="mb-3">
                                            <label for="noteContent" class="form-label">Conteúdo</label>
                                            <textarea class="form-control" id="noteContent" rows="3" placeholder="Digite o conteúdo da nota"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary" id="saveNoteButton">Salvar Nota</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('saveNoteButton').addEventListener('click', function() {
                // Exibir feedback na página
                document.getElementById('feedback').style.display = 'block';

                // Limpar feedback após alguns segundos
                setTimeout(() => {
                    document.getElementById('feedback').style.display = 'none';
                }, 3000);
            });
        });
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script> <!-- External JS -->

</body>
</html>
