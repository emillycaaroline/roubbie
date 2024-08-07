<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $servername = "localhost"; // endereço do servidor
    $username = "root"; // nome de usuário do banco de dados
    $password = ""; // senha do banco de dados
    $dbname = "roubbie_bd";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar a consulta SQL para evitar SQL Injection
    $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);

    if ($stmt->num_rows == 1) {
        $stmt->fetch();
        if (password_verify($senha, $hashed_password)) {
            // Login bem-sucedido
            session_start();
            $_SESSION['email'] = $email;
            header("Location: home.html");  // Redireciona para a página inicial
            exit();
        } else {
            // Senha incorreta
            echo "<script>alert('Senha incorreta');</script>";
        }
    } else {
        // Email não encontrado
        echo "<script>alert('Usuário não encontrado');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
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
    <meta name="robots" content="noindex, follow">
</head>
<body style="background-color: #666666;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">Entrar</span>
                    <div class="wrap-input100 validate-input" data-validate="Email válido é requerido: ex@abc.xyz">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="focus-input100"></span>
                        <label class="label-input100" for="email">Email</label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Senha é requerida">
                        <input class="input100" type="password" name="senha" id="senha" required>
                        <span class="focus-input100"></span>
                        <label class="label-input100" for="senha">Senha</label>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">Lembrar-me</label>
                        </div>
                        <div><a href="#" class="txt1">Esqueceu a senha?</a></div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" value="Login" name="login" class="login100-form-btn">Login</button>
                    </div>
                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">Não tem uma conta? <a href="cadastro.html">Criar nova conta</a></span>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('img/meditacao.jpg');"></div>
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
</body>
</html>
