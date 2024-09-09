<!doctype html>
<html lang="en">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio</title>
    <link rel="import" href="/php_login/cadastro.php">
    <link rel="import" href="/php_login/cadastro_form.php">
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <!-- 
            TemplateMo 590 topic listing 
            https://templatemo.com/tm-590-topic-listing
         -->
</head>
<!-- Conteudo da página -->

<body id="top">  
    <main>
        <!-- Adiciona o header -->
        <?php include 'includes/header.php'; ?>



        <!-- Conteudo da pagina  -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Encontre equilíbrio
                        </h1>

                        <h6 class="text-center">Descubra paixões e conecte-se com você mesmo</h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">

                                </span>

                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Encontre um Novo Hobby" aria-label="Search">

                                <button type="submit" class="form-control">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- Perguntas para informar objetivo do app -->
        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="https://blog.eurekka.me/o-que-e-hobby/">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Você Sabe o Que é um Hobby?
                                        </h5>

                                        <p class="mb-0">Um hobby é uma atividade realizada regularmente em seus tempos
                                            livres por prazer. Pesquisar novos hobbies pode abrir portas para novas
                                            paixões e habilidades.</p>
                                    </div>

                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                </div>

                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png"
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="images/businesswoman-using-tablet-analysis.jpg"
                                    class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Por Que Ter um Hobby?
                                        </h5>

                                        <p class="text-white">Ter um hobby melhora sua qualidade de vida, ajuda a
                                            relaxar, se divertir e aprender algo novo. Além disso, é ótimo para aliviar
                                            o estresse.

                                        </p>

                                        <a href="https://lfidiomas.com.br/os-beneficios-e-a-importancia-de-ter-um-hobby/"
                                            class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                </div>

                                <div class="social-share d-flex">
                                    <p class="text-white me-4">Share:</p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li></a>
                                </div>

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Conheça os Pilares da Saúde
                        </h1>
                </div>

            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                aria-controls="design-tab-pane" aria-selected="true">Fisico</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                aria-controls="marketing-tab-pane" aria-selected="false">Emocional</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab"
                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                aria-controls="finance-tab-pane" aria-selected="false">Espiritual</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane"
                                aria-selected="false">nenhum</button>
                        </li>


                    </ul>
                </div>
            </div>
            <!-- Card dos pilares -->

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                                aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a
                                                href="https://www.usebob.com.br/blogs/news/autocuidado-conheca-os-4-pilares-para-incluir-no-seu-dia-a-dia">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">
                                                            Saúde Física</h5>

                                                        <p class="mb-0">Cuidar do corpo através de atividade física,
                                                            alimentação equilibrada e hábitos saudáveis.

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                </div>

                                                <img src="https://magscan.com.br/wp-content/uploads/2020/02/original-df8beb46a3d3178a1a7bcd1bc90dfc98.jpeg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Emocional</h5>

                                                        <p class="mb-0">Gerenciar o estresse, cultivar relacionamentos
                                                            positivos e praticar o autocuidado.</p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/s-emocional.jpg" class="custom-block-image img-fluid"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Social</h5>

                                                        <p class="mb-0">Estabelecer e manter conexões sociais
                                                            significativas para apoio emocional e senso de
                                                            pertencimento.

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                </div>

                                                <img src="images/topics/colleagues-working-cozy-office-medium-shot.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cards do emocional -->
                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Emocional</h5>

                                                        <p class="mb-0">Buscar significado e propósito na vida, seja
                                                            através da espiritualidade, meditação ou práticas de
                                                            gratidão.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="images/topics/undraw_online_ad_re_ol62.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Emocional</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                </div>

                                                <img src="images/topics/undraw_Group_video_re_btu7.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Emocional</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                </div>

                                                <img src="images/topics/undraw_viral_tweet_gndb.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- cards de espiritual -->
                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel"
                                aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Espiritual</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="images/topics/undraw_Finance_re_gnv2.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg"
                                                    class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Espiritual</h5>

                                                        <p class="text-white">Lorem ipsum dolor, sit amet consectetur
                                                            adipisicing elit. Sint animi necessitatibus aperiam
                                                            repudiandae nam omnis</p>

                                                        <a href="topics-detail.html"
                                                            class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                </div>

                                                <div class="social-share d-flex">
                                                    <p class="text-white me-4">Espiritual</p>

                                                    <ul class="social-icon">
                                                        <li class="social-icon-item">
                                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                                        </li>

                                                        <li class="social-icon-item">
                                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                                        </li>

                                                        <li class="social-icon-item">
                                                            <a href="#" class="social-icon-link bi-pinterest"></a>
                                                        </li>
                                                    </ul>

                                                    <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- card pra adicionar tema  -->
                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">ADICIONAR TEMA</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                </div>

                                                <img src="images/topics/undraw_Compose_music_re_wpiw.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">ADICIONAR TEMA</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                </div>

                                                <img src="images/topics/undraw_happy_music_g6wc.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">ADICIONAR TEMA</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">20</span>
                                                </div>

                                                <img src="images/topics/undraw_Podcast_audience_re_4i5q.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                                aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">ADICIONAR TEMA</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                </div>

                                                <img src="images/topics/undraw_Graduation_re_gthn.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">ADICIONAR TEMA</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/topics/undraw_Educator_re_ju47.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>


        <!-- Linha informativa  -->
        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">How does it work?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">A Importância do Autoconhecimento e Autocuidado para a
                                        Saúde Mental</h4>

                                    <p class="text-white">Problemas como ansiedade, depressão e estresse na sociedade
                                        moderna muitas vezes estão relacionados à falta de autoconhecimento e práticas
                                        regulares de cuidado pessoal.</p>

                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Como a Falta de um Hobby Afeta a Saúde Mental</h4>

                                    <p class="text-white">A ausência de um hobby pode resultar em falta de propósito e
                                        satisfação na vida, contribuindo para sentimentos de tédio, apatia e desânimo,
                                        que podem aumentar a ansiedade e a depressão.</p>

                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">A Importância de uma Rotina Organizada</h4>

                                    <p class="text-white">Uma rotina estruturada proporciona estabilidade e
                                        previsibilidade, ajudando a evitar sentimentos de desmotivação e perdidos, além
                                        de combater a procrastinação, o estresse e a falta de realização pessoal.</p>

                                    <div class="icon-holder">
                                        <i class="bi-book"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <p class="text-white">
                            Want to learn more?
                            <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Seção de explore -->
        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Explore e Descubra <br> Mais
                        </h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Descubra Novos Interesses
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Encontre inspiração e explore uma variedade de tópicos interessantes para
                                        enriquecer sua vida diária.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Como Funciona?

                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Saiba como o Topic Listing pode ajudá-lo a encontrar hobbies que se alinhem com
                                        seus interesses e estilo de vida.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Gratuito e Acessível
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Nosso serviço é totalmente gratuito e acessível a todos. Comece sua jornada para
                                        um estilo de vida mais equilibrado hoje mesmo!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


  <!-- Adiciona o footer -->
  <?php include 'includes/footer.php'; ?>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>