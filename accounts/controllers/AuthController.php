<?php
// Inicia a sessão no início da página
session_start();

// Incluir arquivo do modelo de usuário
require_once 'models/user.php';

// Classe AuthController
class AuthController
{
    // Função de login
    public function login()
    {
        // Verificar se o formulário foi enviado via POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recuperar dados do formulário
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $senha = $_POST['senha'];

            // Verificar se o e-mail é válido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='error-message'>Por favor, insira um e-mail válido.</div>";
                return;
            }

            // Buscar o usuário pelo e-mail
            $user = User::findByEmail($email);

            // Verificar se o usuário foi encontrado e se a senha é válida
            if ($user && password_verify($senha, $user['senha'])) {
                // Definir variáveis de sessão (somente o ID do usuário)
                $_SESSION['usuario_id'] = $user['id'];

                // Redirecionar para o dashboard após login bem-sucedido
                header('Location: index.php?action=dashboard');
                exit();
            } else {
                // Exibir mensagem de erro se o login falhar
                echo "<div class='error-message'>Email ou senha incorretos</div>";
            }
        } else {
            // Incluir a view de login se o método não for POST
            include 'views/login.php';
        }
    }

    // Função de logout
    public function logout()
    {
        session_start();
        session_unset(); // Remove todas as variáveis de sessão
        session_destroy(); // Destrói a sessão
        header('Location: index.php?action=login');
        exit();
    }
}
?>
