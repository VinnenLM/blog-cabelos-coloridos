$('.nav__menu__trigger').on('click', function (e) {
    e.preventDefault();
    $(".nav__mobile").toggleClass('nav__menu--active');
    $(".nav__menu__trigger").toggleClass('nav__menu--active');
    if ($(".nav__menu__trigger").hasClass('nav__menu--active')) {
        PropriedadesNavBarMobileInvisivel();
    } else {
        PropriedadesNavBarMobileVisivel();
    }
});

function PropriedadesNavBarMobileInvisivel() {
    $('.header__menu__botao').addClass('nav-ativo');
}

function PropriedadesNavBarMobileVisivel() {
    $('.header__menu__botao').removeClass('nav-ativo');
}

// $('#botao-pesquisar').on('click', function (e) {
//     e.preventDefault();
//     $('#barra-pesquisa').toggleClass('barra-pesquisa');
// });

// $(document).ready(function () { --utilizar para display reduzido de frase
//     $(".main__description").each(function () {
//         let texto = $(this);
//         if (texto.text().length > 20) {
//             texto.text(texto.text().slice(0, 160) + '...');
//         }
//     });
// });