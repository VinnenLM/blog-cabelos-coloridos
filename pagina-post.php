<?php

require 'config.php';
require 'repositorio.php';

$conexao = ConnectionCreator::createConnection();
$obj_artigo = new Repositorio($conexao);
$artigo = $obj_artigo->exibirPorId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles-pagina-post.css">
    <link rel="stylesheet" href="assets/css/styles-header.css">
    <link rel="stylesheet" href="assets/css/styles-navbar.css">
    <link rel="stylesheet" href="assets/css/styles-footer.css">
    <link rel="stylesheet" href="assets/css/styles-pagination.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="icon" sizes="192x192" href="assets/img/icon-title.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>POSTS | Blog Cabelos Coloridos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>

        <div class="nav">
            <div class="nav__mobile">
                <nav class="nav__menu">
                    <div class="container">
                        <ul class="nav__menu__list">
                            <li class="nav__menu__item"><i class="material-icons menu__login">account_circle</i></li>
                            <li class="nav__menu__item"><a class="nav__menu__link" href="#">Log In</a></li>
                            <li class="nav__menu__item"><a class="nav__menu__link" href="index.html">Home</a></li>
                            <li class="nav__menu__item"><a class="nav__menu__link" href="posts.html">Posts</a></li>
                            <li class="nav__menu__item"><a class="nav__menu__link" href="sobre.html">Sobre</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="header">

            <div class="header__border">
                <nav class="header__menu">
                    <div class="header__menu__mobile">
                        <div class="header__menu__nav">
                            <div class="header__menu__botao">
                                <a href="#" class="nav__menu__trigger"><span class="nav__menu__icon"></span></a>
                            </div>
                        </div>
                    </div>
                    <ul class="header__menu__lista">
                        <li class="header__menu__lista__links"><a href="index.html">INÍCIO</a></li>
                        <li class="header__menu__lista__links"><a href="posts.html">POSTS</a></li>
                        <li class="header__menu__lista__links"><a href="sobre.html">SOBRE</a></li>
                        <li class="header__menu__lista__links"><i class="material-icons header__menu__login">account_circle</i><a href="#" class="login">Log
                                In</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__banner" title="Banner Cabelos Coloridos">
                <img src="" class="header__img">
            </div>
        </div>

    </header>

    <main class="main">
        <div class="container">
            <div class="background">
                <div class="conteudo">
                    <h3><?= $artigo['postado_por'] ?></h3>
                    <h1><?= $artigo['titulo'] ?></h1>
                    <div>
                        <?= nl2br($artigo['conteudo']); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="footer">
        <footer class="container">

            <section>
                <div class="footer__title">
                    <h2 class="footer__h2">Blog Cabelos Coloridos</h2>
                </div>
            </section>

            <section class="footer__noticia">
                <div class="footer__form">
                    <form class="footer__noticia__form">
                        <!-- <span class="teste"></span> -->
                        <label class="footer__label" for="footer__input">Receba notícias do Blog</label>
                        <input type="text" placeholder="Insira seu email" class="footer__input">
                        <button class="btn btn-dark footer__botao">Se increva já!</button>
                    </form>
                </div>
            </section>

            <section class="footer__redes">
                <div class="footer__redes-sociais">
                    <div class="footer__icones">
                        <a href="https://www.instagram.com/blogcabeloscoloridos/" target="_blank"><img src="assets/img/instagram-icone.webp" alt="Ícone do Intagram" class="footer__icones-img"></a>
                        <a href="https://www.facebook.com/BlogCabelosColoridos/" target="_blank"><img src="assets/img/facebook-icone.webp" alt="Ícone do Facebook" class="footer__icones-img"></a>
                        <a href="https://twitter.com/Cabelo_Colorido" target="_blank"><img src="assets/img/twitter-icone.webp" alt="Ícone do Twitter" class="footer__icones-img"></a>
                    </div>
                </div>
            </section>

            <section class="footer__copyright">
                <div class="footer__copyright-texto">
                    <h3 class="footer__copyright-h3">© 2022 by <a href="https://github.com/VinnenLM" target="_blank">VinnenLM</a>
                    </h3>
                    <div class="footer__copyright-git">
                        <a href="https://github.com/VinnenLM" target="_blank"><img src="assets/img/github.svg" alt="Icone do GitHub"></a>
                        <a href="https://github.com/VinnenLM" target="_blank">
                            <h4 class="footer__copyright-nome">/VinnenLM</h4>
                        </a>
                    </div>
            </section>
    </div>
    </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/navbar.js"></script>
</body>

</html>