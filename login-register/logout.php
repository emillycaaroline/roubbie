<?php
session_start(); 

// Remove todas as variáveis de sessão
session_unset();

session_destroy();

// Redireciona o usuário para a página de login ou inicial
header("Location: /roubbie/login-register/login.php");
exit();
?>
