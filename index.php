<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Roubbie - Encontre o equilíbrio perfeito entre trabalho e lazer com hobbies e rotinas personalizadas." />
    <meta name="author" content="Larissa Santos" />
    <title>Roubbie - Equilíbrio entre trabalho e lazer</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="styles.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    /* Estilos gerais */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        color: #333;
    }

    /* General styles */
    .text-white {
        color: #fff;
    }

    /* Navbar styles */
    .navbar {
        background: linear-gradient(to right, #13547a, #80d0c7);
        margin-top: auto;
    }

    .navbar-brand img {
        width: 100px;
    }

    .nav-link {
        color: white !important;
    }

    .nav-link:hover {
        color: #80d0c7 !important;
    }

    .navbar-collapse {
        display: none;
    }

    .navbar-collapse.show {
        display: block;
    }

    /* Mobile nav styles */
    .mobile-nav {
        display: none;
    }

    @media (max-width: 767.98px) {
        .navbar-nav .nav-item .nav-link {
            font-size: 12px;
        }

        .mobile-nav {
            display: block;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to right, #13547a, #80d0c7);
            color: #ffffff;
            border-top: 1px solid #80d0c7;
            border-radius: 5px;
            z-index: 1000;
            text-align: center;
        }

        .mobile-nav ul {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            margin: 0;
            list-style: none;
        }

        .mobile-nav a {
            color: white;
            /* Garantindo que os links sejam brancos no mobile */
        }

        .mobile-nav a:hover {
            color: #80d0c7;
            /* Mudança de cor ao passar o mouse no mobile */
        }
    }

    i {
        color: white;
        /* Garantindo que todos os ícones sejam brancos */
    }

    /* Masthead */
    .masthead {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/roubbie/pubimg/public1.jpg') no-repeat center center;
        background-size: cover;
        padding: 10rem 0;
        color: white;
    }

    .masthead-heading {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .masthead-subheading {
        font-size: 1.5rem;
        margin-bottom: 3rem;
    }

    .masthead .btn {
        background-color: #009688;
        border-color: #00796b;
        font-size: 1.25rem;
        padding: 12px 30px;
    }

    .masthead .btn:hover {
        background-color: #00796b;
        border-color: #004d40;
    }

    /* Seções de conteúdo */
    section {
        padding: 60px 0;
        background-color: #ffffff;
    }

    section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #009688;
        margin-bottom: 1.5rem;
    }

    section p {
        font-size: 1.125rem;
        line-height: 1.6;
        color: #555;
    }

    section img {
        max-width: 100%;
        border-radius: 50%;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Footer */
    footer {
        background-color: #333;
        color: white;
        padding: 20px 0;
    }

    footer .small {
        font-size: 0.875rem;
        color: #bbb;
    }

    /* Estilos responsivos */
    @media (max-width: 767px) {
        .masthead-heading {
            font-size: 2.5rem;
        }

        .masthead-subheading {
            font-size: 1.2rem;
        }

        section h2 {
            font-size: 2rem;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            font-size: 1rem;
        }
    }
</style>

<body id="page-top">
    <!-- Navegação da pagina publica  -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="#page-top">Roubbie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/roubbie/login-register/login.php">Entrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/roubbie/login-register/cadastro.php">Cadastre-se</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Está na hora de encontrar o equilíbrio perfeito entre trabalho e lazer!</h1>
                <h2 class="masthead-subheading mb-0">Com o Roubbie, você pode descobrir hobbies que tornam seu dia mais leve.</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="/roubbie/login-register/cadastro.php" aria-label="Criar conta">Criar conta</a>
            </div>
        </div>
    </header>

    <!-- Seções de conteúdo -->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid" src="/roubbie/pubimg/public1.jpg" alt="Pessoa relaxando com atividades recreativas" loading="lazy" /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Transforme sua rotina com hobbies que são a sua cara!</h2>
                        <p>Cadastre-se e descubra como o Roubbie pode deixar seus dias mais leves e divertidos!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid" src="/roubbie/pubimg/public2.jpg" alt="Pessoa se organizando em uma rotina saudável" loading="lazy" /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Vamos deixar seu dia mais equilibrado e divertido?</h2>
                        <p>Com o Roubbie, você pode explorar hobbies, criar lembretes e ter uma rotina mais saudável. Dê o primeiro passo agora!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid" src="/roubbie/pubimg/public3.jpg" alt="Pessoa sorrindo e se sentindo bem" loading="lazy" /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Redescubra a alegria de viver com o Roubbie!</h2>
                        <p>Vamos juntos explorar hobbies que trazem mais equilíbrio, felicidade e qualidade de vida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container px-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4 text-center">
                    <p class="small mb-0">© 2024 Roubbie. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybKyS0FfDOMT+zF6+Ytnxu2e/ffm9kG7tpczvfuJ4lk6D5Tq3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0b8pYy4+fhFhAvzjz8J9Qx5ItjqK9z5FfWVV25PqFpxdSS7y" crossorigin="anonymous"></script>
</body>

</html>