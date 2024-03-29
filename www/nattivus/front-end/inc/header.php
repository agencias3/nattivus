<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#" xmlns="http://www.w3.org/1999/html">
<head>
    <?php
    $site = 'http://agencias3.web2217.uni5.net/nattivus/';
    $urlIcon = $site.'assets/images/icons/';
    ?>
    <title><?php echo $title; ?></title>
    <base href="<?php echo $site; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="Shortcut Icon" type="image/x-icon" href="/wesa/assets/site/images/favicon.ico"/>
    <link rel="stylesheet" href="<?php echo $site; ?>assets/site/css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,600,700&display=swap" rel="stylesheet">

    <!-- JS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="w-100 relative">
    <header class="w-100">
        <div class="w-100 p-top-10 p-bottom-10 secondary-bg fixed z-index-8 top-0 left-0">
            <div class="center">
                <div class="w-90 m-left-5 w-1024-100">
                    <div class="f-left c-left action-menu display-none display-1024-block">
                        <a href="javascript:void(0);" onclick="menu($('.main-menu'));" title="Menu">
                            <span class="smooth"></span>
                            <span class="smooth"></span>
                            <span class="smooth"></span>
                        </a>
                    </div>
                    <nav class="f-left c-left m-top-3 main-menu display-1024-none">
                        <ul>
                            <li class="display-none display-1024-flex">
                                <a class="active" href="javascript:void(0);" onclick="menu($('.main-menu'));" title="FECHAR">
                                    FECHAR
                                </a>
                            </li>
                            <li>
                                <a class="active" href="" title="HOME">
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a href="" title="QUEM SOMOS">
                                    QUEM SOMOS
                                </a>
                            </li>
                            <li>
                                <a href="" title="CATÁLOGOS">
                                    CATÁLOGOS
                                </a>
                            </li>
                            <li>
                                <a href="" title="CASES">
                                    CASES
                                </a>
                            </li>
                            <li>
                                <a href="" title="CONTATO">
                                    CONTATO
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="f-right c-left">
                        <a class="t-decoration" href="mailto:comercial@nattivusbrindes.com" title="comercial@nattivusbrindes.com">
                            <span class="m-top-2 color-white f-size-14">comercial@nattivusbrindes.com</span>
                            <img class="m-left-10-px" src="<?php echo $site; ?>assets/site/images/icons/facebook.png" title="comercial@nattivusbrindes.com" alt="comercial@nattivusbrindes.com" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 p-top-15 p-bottom-15 m-top-40 p-top-1024-10 p-bottom-1024-10">
            <div class="center">
                <article class="w-90 m-left-5 d_flex w-1024-100">
                    <figure class="flex-1 c-left">
                        <a class="max-w-100" href="" title="">
                            <img class="max-w-100" src="<?php echo $site; ?>assets/site/images/icons/main-logo.png" title="" alt="" />
                        </a>
                    </figure>
                    <section class="flex-1 justify-end d_flex m-right-1250-0 m-left-1250-20-px column-600">
                        <form class="flex-1 d_flex form-search display-1024-none" id="fSearch" method="post" action="">
                            <fieldset class="flex-1">
                                <input class="w-100" type="text" id="txt-search" name="txt-search" value="" placeholder="DIGITE O BRINDE QUE VOCÊ DESEJA" />
                            </fieldset>
                            <fieldset class="flex-1">
                                <input class="w-100 pointer smooth" type="submit" id="send-search" name="send-search" value="" />
                            </fieldset>
                        </form>
                        <a class="flex-1 c-left d_flex justify-center main-bg-1 bt-cart smooth w-600-100" href="" title="">
                            <figure>
                                <img src="<?php echo $site; ?>assets/site/images/icons/cart.png" title="" alt="" />
                            </figure>
                            <span>
                                (0) itens
                            </span>
                        </a>
                        <a class="flex-1 c-left d_flex justify-center secondary-bg-1 bt-login smooth w-600-100" href="" title="">
                            <span class="font-2 smooth">
                                Cadastro/Login
                            </span>
                            <figure>
                                <img src="<?php echo $site; ?>assets/site/images/icons/down.png" title="" alt="" />
                            </figure>
                        </a>
                    </section>
                    <aside class="flex-1 display-1250-none">
                        <p class="w-100 t-align-r font-2">
                            (51) 3475.4689<br />
                            (51) 98594.1753
                        </p>
                    </aside>
                </article>
            </div>
        </div>
        <div class="w-100 p-top-10 p-bottom-10 box-category p-top-1024-0 p-bottom-1024-0">
            <div class="center">
                <div class="w-90 m-left-5 d_flex wrap w-1024-100">
                    <a class="w-100 p-top-15 p-bottom-15 display-none t-align-c color-white f-size-16 font-2 open-category smooth display-1024-block" href="javascript:void(0);" onclick="menu($('.menu-category'));" title="Menu">
                        Categorias
                    </a>
                    <nav class="flex-1 d_flex self-center menu-category w-1024-100 display-1024-none menu-category-mobile">
                        <ul class="w-100 c-left relative">
                            <li class="open-category">
                                <a class="d_flex justify-space" href="javascript:void(0);" title="CATEGORIAS">
                                    <span></span>
                                    <p>
                                        CATEGORIAS
                                    </p>
                                    <figure>
                                        <img src="<?php echo $site; ?>assets/site/images/icons/down-white.png" title="" alt="" />
                                    </figure>
                                </a>
                            </li>
                            <ul class="w-100 absolute top-100 left-0">
                                <li class="display-none display-1024-block">
                                    <a href="javascript:void(0);" onclick="menu($('.menu-category'));" title="FECHAR">
                                        FECHAR
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        Lorem ipsum
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        Lorem ipsum
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        Lorem ipsum
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        Lorem ipsum
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        Lorem ipsum
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </nav>
                    <nav class="flex-1 d_flex menu-category-2 display-1024-none w-800-100">
                        <ul class="flex-1 d_flex wrap justify-space column-600">
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Papelaria
                                    </span>
                                </a>
                            </li>
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Promocionais
                                    </span>
                                </a>
                            </li>
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Ferramentas
                                    </span>
                                </a>
                            </li>
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Souvenir
                                    </span>
                                </a>
                            </li>
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Datas Comemorativas
                                    </span>
                                </a>
                            </li>
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Infantil
                                    </span>
                                </a>
                            </li>
                            <li class="d_flex">
                                <a class="d_flex" href="" title="">
                                    <figure>
                                        <img src="<?php echo $site; ?>uploads/category/category.png" title="" alt="" />
                                    </figure>
                                    <span>
                                        Bolsas
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>












