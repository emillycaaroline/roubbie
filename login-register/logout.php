<?php
session_start(); 

// Remover apenas as variáveis de autenticação da sessão
unset($_SESSION['logged_in']);  // Supondo que esta variável controla o estado de login
unset($_SESSION['user_id']);    // Remover o ID do usuário, se estiver armazenado
unset($_SESSION['user_name']);  // Remover o nome do usuário, se estiver armazenado

// Qualquer outra variável de autenticação que você queira desabilitar
// unset($_SESSION['outra_variavel']);

// Redireciona o usuário para a página de login ou inicial
header("Location: /roubbie/index.php");
exit();
?>
