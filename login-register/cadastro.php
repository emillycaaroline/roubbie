<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/roubbie/images/icons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/roubbie/login-register/css/main.css">
<link rel="stylesheet" type="text/css" href="/roubbie/login-register/css/util.css">



    <meta name="robots" content="noindex, follow">
</head>
<style>
    @font-face {
    font-family: Poppins-Regular;
    src: url(../fonts/poppins/Poppins-Regular.ttf)
}

@font-face {
    font-family: Poppins-Medium;
    src: url(../fonts/poppins/Poppins-Medium.ttf)
}

@font-face {
    font-family: Poppins-Bold;
    src: url(../fonts/poppins/Poppins-Bold.ttf)
}

@font-face {
    font-family: Poppins-SemiBold;
    src: url(../fonts/poppins/Poppins-SemiBold.ttf)
}

@font-face {
    font-family: Montserrat-Bold;
    src: url(../fonts/montserrat/Montserrat-Bold.ttf)
}

@font-face {
    font-family: Montserrat-SemiBold;
    src: url(../fonts/montserrat/Montserrat-SemiBold.ttf)
}

@font-face {
    font-family: Montserrat-Regular;
    src: url(../fonts/montserrat/Montserrat-Regular.ttf)
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body,
html {
    height: 100%;
    font-family: Poppins-Regular, sans-serif
}

a {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666;
    margin: 0;
    transition: all .4s;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s
}

a:focus {
    outline: none !important
}

a:hover {
    text-decoration: none;
    color: #6675df
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0
}

p {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666;
    margin: 0
}

ul,
li {
    margin: 0;
    list-style-type: none
}

input {
    outline: none;
    border: none
}

textarea {
    outline: none;
    border: none
}

textarea:focus,
input:focus {
    border-color: transparent !important
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

input:focus:-moz-placeholder {
    color: transparent
}

input:focus::-moz-placeholder {
    color: transparent
}

input:focus:-ms-input-placeholder {
    color: transparent
}

textarea:focus::-webkit-input-placeholder {
    color: transparent
}

textarea:focus:-moz-placeholder {
    color: transparent
}

textarea:focus::-moz-placeholder {
    color: transparent
}

textarea:focus:-ms-input-placeholder {
    color: transparent
}

input::-webkit-input-placeholder {
    color: #999
}

input:-moz-placeholder {
    color: #999
}

input::-moz-placeholder {
    color: #999
}

input:-ms-input-placeholder {
    color: #999
}

textarea::-webkit-input-placeholder {
    color: #999
}

textarea:-moz-placeholder {
    color: #999
}

textarea::-moz-placeholder {
    color: #999
}

textarea:-ms-input-placeholder {
    color: #999
}

label {
    display: block;
    margin: 0
}

button {
    outline: none !important;
    border: none;
    background: 0 0
}

button:hover {
    cursor: pointer
}

iframe {
    border: none !important
}

.txt1 {
    font-family: Montserrat-Regular;
    font-size: 13px;
    line-height: 1.4;
    color: #555
}

.txt2 {
    font-family: Montserrat-Regular;
    font-size: 13px;
    line-height: 1.4;
    color: #999
}

.size1 {
    width: 355px;
    max-width: 100%
}

.size2 {
    width: calc(100% - 43px)
}

.bg1 {
    background: #3b5998
}

.bg2 {
    background: #1da1f2
}

.bg3 {
    background: #cd201f
}

.limiter {
    width: 100%;
    margin: 0 auto
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background: #f2f2f2
}

.wrap-login100 {
    width: 100%;
    background: #fff;
    overflow: hidden;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    flex-direction: row-reverse
}

.login100-more {
    width: calc(100% - 560px);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    z-index: 1
}

.login100-more::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, .1)
}

.login100-form {
    width: 560px;
    min-height: 100vh;
    display: block;
    background-color: #f7f7f7;
    padding: 173px 55px 55px
}

.login100-form-title {
    width: 100%;
    display: block;
    font-family: Poppins-Regular;
    font-size: 30px;
    color: #333;
    line-height: 1.2;
    text-align: center
}

.wrap-input100 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    width: 100%;
    height: 80px;
    position: relative;
    border: 1px solid #e6e6e6;
    border-radius: 10px;
    margin-bottom: 10px
}

.label-input100 {
    font-family: Montserrat-Regular;
    font-size: 18px;
    color: #999;
    line-height: 1.2;
    display: block;
    position: absolute;
    pointer-events: none;
    width: 100%;
    padding-left: 24px;
    left: 0;
    top: 30px;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.input100 {
    display: block;
    width: 100%;
    background: 0 0;
    font-family: Montserrat-Regular;
    font-size: 18px;
    color: #555;
    line-height: 1.2;
    padding: 0 26px
}

input.input100 {
    height: 100%;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.focus-input100 {
    position: absolute;
    display: block;
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    top: -1px;
    left: -1px;
    pointer-events: none;
    border: 1px solid #6675df;
    border-radius: 10px;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s;
    -webkit-transform: scaleX(1.1) scaleY(1.3);
    -moz-transform: scaleX(1.1) scaleY(1.3);
    -ms-transform: scaleX(1.1) scaleY(1.3);
    -o-transform: scaleX(1.1) scaleY(1.3);
    transform: scaleX(1.1) scaleY(1.3)
}

.input100:focus+.focus-input100 {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1)
}

.eff-focus-selection {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1)
}

.input100:focus {
    height: 48px
}

.input100:focus+.focus-input100+.label-input100 {
    top: 14px;
    font-size: 13px
}

.has-val {
    height: 48px !important
}

.has-val+.focus-input100+.label-input100 {
    top: 14px;
    font-size: 13px
}

.input-checkbox100 {
    display: none
}

.label-checkbox100 {
    font-family: Poppins-Regular;
    font-size: 13px;
    color: #999;
    line-height: 1.4;
    display: block;
    position: relative;
    padding-left: 26px;
    cursor: pointer
}

.label-checkbox100::before {
    content: "\f00c";
    font-family: FontAwesome;
    font-size: 13px;
    color: transparent;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 2px;
    background: #fff;
    border: 1px solid #6675df;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%)
}

.input-checkbox100:checked+.label-checkbox100::before {
    color: #6675df
}

.container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center
}

.login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px;
    border-radius: 10px;
    background: #6675df;
    font-family: Montserrat-Bold;
    font-size: 12px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.login100-form-btn:hover {
    background: #333
}

@media(max-width:992px) {
    .login100-form {
        width: 50%;
        padding-left: 30px;
        padding-right: 30px
    }

    .login100-more {
        width: 50%
    }
}

@media(max-width:768px) {
    .login100-form {
        width: 100%
    }

    .login100-more {
        display: none
    }
}

@media(max-width:576px) {
    .login100-form {
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 70px
    }
}

.validate-input {
    position: relative
}

.alert-validate::before {
    content: attr(data-validate);
    position: absolute;
    z-index: 100;
    max-width: 70%;
    background-color: #fff;
    border: 1px solid #c80000;
    border-radius: 2px;
    padding: 4px 25px 4px 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 12px;
    pointer-events: none;
    font-family: Poppins-Regular;
    color: #c80000;
    font-size: 13px;
    line-height: 1.4;
    text-align: left;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity .4s;
    -o-transition: opacity .4s;
    -moz-transition: opacity .4s;
    transition: opacity .4s
}

.alert-validate::after {
    content: "\f12a";
    font-family: FontAwesome;
    display: block;
    position: absolute;
    z-index: 110;
    color: #c80000;
    font-size: 16px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 18px
}

.alert-validate:hover:before {
    visibility: visible;
    opacity: 1
}

@media(max-width:992px) {
    .alert-validate::before {
        visibility: visible;
        opacity: 1
    }
}

.login100-form-social-item {
    width: 36px;
    height: 36px;
    font-size: 18px;
    color: #fff;
    border-radius: 50%
}

.login100-form-social-item:hover {
    background: #333;
    color: #fff
}
</style>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form style="padding-top: 80px; background-color: white; max-width: 100%; max-height: 700px;" action="cadastro_process.php" method="POST" class="login100-form validate-form">
                    <input type="hidden" name="csrf_token" value="<?php echo hash('sha256', session_id()); ?>"> <!-- Token CSRF -->
                    <span class="login100-form-title p-b-43 ">
                        Crie sua conta!
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
                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatória e deve ter no mínimo 6 caracteres.">
                        <input class="input100" type="password" name="senha" minlength="6" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Senha</span>
                    </div>

                    <!-- Confirmação da Senha -->
                    <div class="wrap-input100 validate-input" data-validate="Confirme sua senha">
                        <input class="input100" type="password" name="confirm_senha" minlength="6" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Confirmar Senha</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-20">
                        <div class="p-t-46 p-b-20">
                        <span>Já tem uma conta? <a href="login.php">Fazer login</a></span>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Cadastrar
                        </button>
                    </div>
                    

                </form>
                <div class="login100-more" style="max-width: 100%; max-height: 700px; background-image: url('img/confuso.jpg'); background-size: cover; background-position: center;">
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
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
