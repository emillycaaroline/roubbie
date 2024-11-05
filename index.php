<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <title>Bem-vindo ao Roubbie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- Esta é a página inicial do Roubbie. Usuários que já estão logados são levados ao painel de controle (dashboard). Os que não estão logados veem opções para entrar ou se cadastrar.

Objetivos
Introduzir o aplicativo Roubbie.
Oferecer links para login e cadastro.
Redirecionar usuários logados para o dashboard.
 -->
    <h1>Bem-vindo ao Roubbie!</h1>
    <p><a href="login-register/login.php">Entrar</a></p>
    <p><a href="login-register/cadastro.php">Cadastrar-se</a></p>
</body>
</html>