<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roubbie Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="dashboard.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" rel="stylesheet">

    <!-- Intro.js CSS -->
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">

    <!-- Scripts (declarados no final para melhor performance) -->
</head>

<?php require_once 'C:\xampp\htdocs\roubbie\includes\header.php'; ?>

<body id="top">
    <br>
    <div style="margin-top: 70px;"  class="dashboard-container">
        <main class="card-grid" aria-label="Painel de Controle">
            <!-- Card de Status das Tarefas -->
            <div class="card">
                <h2>Status das Tarefas</h2>
                <ul class="task-list">
                    <li class="task-item">
                        Revisar checklist do TCC <span class="status">Pendente</span>
                    </li>
                    <li class="task-item">
                        Enviar relatório final <span class="status">Em andamento</span>
                    </li>
                    <li class="task-item">
                        Finalizar design da Home <span class="status">Concluído</span>
                    </li>
                </ul>
            </div>

            <!-- Card do Calendário Compacto -->
            <div class="card">
                <h2>Calendário</h2>
                <div class="calendar">
                    <div class="month">Dezembro 2024</div>
                    <table>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>9</td>
                            <td class="today">10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Card de Compromissos -->
            <div class="card">
                <h2>Compromissos</h2>
                <ul class="task-list">
                    <li class="task-item">
                        Consulta médica <span class="status">08/12</span>
                    </li>
                    <li class="task-item">
                        Reunião de TCC <span class="status">10/12</span>
                    </li>
                    <li class="task-item">
                        Caminhada <span class="status">09/12</span>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    
    <footer>
        © 2024 Roubbie - Todos os direitos reservados.
    </footer>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>

    <!-- Bootstrap Bundle Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
