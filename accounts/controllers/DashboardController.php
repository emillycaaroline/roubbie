<?php
class DashboardController
{
    public function index()
    {
        // Verifica se a sessão já foi iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Verifica se a variável de sessão "usuario_id" está definida
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php');
            exit; // Garante que o script será interrompido após o redirecionamento
        }

        // Atribui o valor de 'usuario_id' à variável
        $usuario_id = $_SESSION['usuario_id'];

        // Inclui a view e passa a variável para ela
        include 'views/dashboard.php'; // Certifique-se que o caminho está correto
    }
}
