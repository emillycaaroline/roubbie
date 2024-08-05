// script.js
var sectionArray = [1, 2, 3, 4, 5];

$(document).scroll(function(){
    var docScroll = $(document).scrollTop();
    
    // Controlar visibilidade do menu ao rolar
    if (docScroll > 200) { // Exemplo: menu começa a desaparecer após rolar 100px
        $('.navbar').addClass('hidden');
    } else {
        $('.navbar').removeClass('hidden');
    }
    
    // Atualizar classe do link ativo conforme a seção visível
    $.each(sectionArray, function(index, value){
        var offsetSection = $('#' + 'section_' + value).offset().top - 75;
        if (docScroll >= offsetSection){
            $('.navbar-nav .nav-item .nav-link').removeClass('active');
            $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');  
            $('.navbar-nav .nav-item .nav-link').eq(index).addClass('active');
            $('.navbar-nav .nav-item .nav-link').eq(index).removeClass('inactive');
        }
    });
});

$('.click-scroll').click(function(e){
    var sectionIndex = $(this).index();
    var offsetClick = $('#' + 'section_' + sectionArray[sectionIndex]).offset().top - 75;
    e.preventDefault();
    $('html, body').animate({
        scrollTop: offsetClick
    }, 300);
});

$(document).ready(function(){
    // Definir classe inicial do menu ao carregar a página
    if ($(document).scrollTop() > 100) {
        $('.navbar').addClass('hidden');
    }
    
    // Definir classe inicial dos links de navegação
    $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');    
    $('.navbar-nav .nav-item .nav-link').eq(0).addClass('active');
    $('.navbar-nav .nav-item .nav-link:link').eq(0).removeClass('inactive');
});
