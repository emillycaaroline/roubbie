<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">

    <meta name="robots" content="noindex, follow">
</head>

<body style="background-color: #666666;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="cadastro_process.php" method="POST" class="login100-form validate-form">
                    <input type="hidden" name="csrf_token" value="<?php echo hash('sha256', session_id()); ?>"> <!-- Token CSRF -->
                    
                    <span class="login100-form-title p-b-43">
                        Vamos começar essa jornada juntos!
                    </span>

                    <!-- Nome -->
                    <div class="wrap-input100 validate-input" data-validate="Nome é obrigatório e deve conter apenas letras.">
                        <input class="input100" type="text" name="nome" pattern="[A-Za-zÀ-ÿ\s'-]+" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Nome</span>
                    </div>

                    <!-- Email -->
                    <div class="wrap-input100 validate-input" data-validate="Formato de email inválido: ex@abc.xyz">
                        <input class="input100" type="email" name="email" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>

                    <!-- Senha -->
                    <div class="wrap-input100 validate-input"  data-validate="A senha é obrigatória e deve ter no mínimo 6 caracteres.">
                        <input class="input100" type="password" name="senha" minlength="6"  required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Senha</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div>
                            <a href="#" class="txt1">
                                Esqueceu a senha?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Cadastrar
                        </button>
                    </div>
                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            ou cadastre-se usando
                        </span>
                    </div>
                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('img/tsos.jpg');">

                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
