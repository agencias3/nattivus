<?php
$title = "Home";
$ativo = "home";
include_once('inc/header.php');
?>
    <div class="w-100 relative">
        <article class="w-100 display-1024-none overflow-h relative z-index-1 cycle-slideshow" id="slideshow" data-cycle-speed="2000" data-cycle-fx="fade" data-cycle-pager=".pager-banner" data-cycle-next=".next-banner" data-cycle-prev=".prev-banner" data-cycle-timeout="5000">
            <figure class="w-100">
                <a class="w-100" href="" title="">
                    <img class="w-100" src="<?php echo $site; ?>uploads/banner/main-banner.jpg" title="" alt="" />
                </a>
            </figure>
            <figure class="w-100">
                <a class="w-100" href="" title="">
                    <img class="w-100" src="<?php echo $site; ?>uploads/banner/banner-cases.jpg" title="" alt="" />
                </a>
            </figure>
            <figure class="w-100">
                <a class="w-100" href="" title="">
                    <img class="w-100" src="<?php echo $site; ?>uploads/banner/main-banner.jpg" title="" alt="" />
                </a>
            </figure>
            <figure class="w-100">
                <a class="w-100" href="" title="">
                    <img class="w-100" src="<?php echo $site; ?>uploads/banner/banner-cases.jpg" title="" alt="" />
                </a>
            </figure>
        </article>
        <div class="w-100 h-0 absolute z-index-2 bottom-0 left-0 display-1024-none m-bottom-1024-20">
            <div class="relative t-align-c">
                <div class="display-inline-block pager-banner m-top-60-neg">
                </div>
            </div>
        </div>
        <figure class="w-100 display-none display-1024-block">
            <a class="w-100" href="" title="">
                <img class="w-100" src="<?php echo $site; ?>uploads/banner/main-banner.jpg" title="" alt="" />
            </a>
        </figure>
    </div>
    <section class="w-100 p-top-80 relative z-index-2 p-top-1024-30">
        <div class="center">
            <h1 class="w-100 title">
                Brindes Personalizados - Categorias
            </h1>
            <div class="w-100 list-group justify-space d_flex wrap">
                <?php
                $color_1 = '#5b38a1';
                $color_2 = '#f3f3f3';
                ?>
                <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                    <a class="d_flex flex-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                            <figure class="self-center">
                                <img src="<?php echo $site; ?>uploads/product/prod-1.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 d_flex self-center direction-column">
                            <span>
                                Squeezes
                            </span>
                            <div class="w-100 m-top-20 color-white text">
                                <p>
                                    Sua marca presente no dia a dia das pessoas! Personalize agora
                                </p>
                            </div>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        &#65515;
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <?php
                $color_1 = '#273c75';
                $color_2 = '';
                ?>
                <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                    <a class="d_flex flex-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                            <figure class="self-center">
                                <img src="<?php echo $site; ?>uploads/product/prod-2.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 d_flex self-center direction-column">
                            <span>
                                Souvenirs
                            </span>
                            <div class="w-100 m-top-20 color-white text">
                                <p>
                                    Sua marca presente no dia a dia das pessoas! Personalize agora
                                </p>
                            </div>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        &#65515;
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <?php
                $color_1 = '#ffe12d';
                $color_2 = '#f3f3f3';
                ?>
                <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                    <a class="d_flex flex-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                            <figure class="self-center">
                                <img src="<?php echo $site; ?>uploads/product/prod-4.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 d_flex self-center direction-column">
                            <span>
                                Brindes Tecnológicos
                            </span>
                            <div class="w-100 m-top-20 color-black text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu lectus venenatis nibh tempus tincidunt. Etiam quis massa vitae risus
                                    feugiat faucibus quis eget enim. Nullam nunc quam, pellentesque sit amet aliquet eu, eleifend a eros.
                                </p>
                            </div>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        &#65515;
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <?php
                $color_1 = '#db7822';
                $color_2 = '';
                ?>
                <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                    <a class="d_flex flex-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                            <figure class="self-center">
                                <img src="<?php echo $site; ?>uploads/product/prod-3.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 d_flex self-center direction-column">
                            <span>
                                Lançamentos
                            </span>
                            <div class="w-100 m-top-20 color-white text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu lectus venenatis nibh tempus tincidunt. Etiam quis massa vitae risus
                                    feugiat faucibus quis eget enim. Nullam nunc quam, pellentesque sit amet aliquet eu, eleifend a eros.
                                </p>
                            </div>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        &#65515;
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <article class="flex-1 d_flex relative list-group-2">
                    <div class="flex-1 w-100 d_flex wrap justify-space">
                        <?php
                        $color_1 = '#65c22d';
                        $color_2 = '';
                        ?>
                        <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                            <a class="d_flex flex-1" href="" title="">
                                <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                    <figure class="self-center">
                                        <img src="<?php echo $site; ?>uploads/product/prod-5.png" title="" alt="" />
                                    </figure>
                                </section>
                                <aside class="flex-1 d_flex self-center direction-column">
                                    <span>
                                        Utilidade & Escritório
                                    </span>
                                    <div class="w-100 m-top-20 color-white text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu lectus venenatis nibh tempus tincidunt. Etiam quis massa vitae risus
                                            feugiat faucibus quis eget enim. Nullam nunc quam, pellentesque sit amet aliquet eu, eleifend a eros.
                                        </p>
                                    </div>
                                    <div class="w-100 m-top-20">
                                        <span class="d_flex justify-center see-more">
                                            <b class="self-center">
                                                Saiba mais
                                            </b>
                                            <i class="self-center">
                                                &#65515;
                                            </i>
                                        </span>
                                    </div>
                                </aside>
                            </a>
                        </div>
                        <?php
                        $color_1 = '#7f8fa6';
                        $color_2 = '';
                        ?>
                        <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                            <a class="d_flex flex-1" href="" title="">
                                <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                    <figure class="self-center">
                                        <img src="<?php echo $site; ?>uploads/product/prod-6.png" title="" alt="" />
                                    </figure>
                                </section>
                                <aside class="flex-1 d_flex self-center direction-column">
                                    <span>
                                        Brindes Ecológicos
                                    </span>
                                    <div class="w-100 m-top-20 color-white text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu lectus venenatis nibh tempus tincidunt. Etiam quis massa vitae risus
                                            feugiat faucibus quis eget enim. Nullam nunc quam, pellentesque sit amet aliquet eu, eleifend a eros.
                                        </p>
                                    </div>
                                    <div class="w-100 m-top-20">
                                        <span class="d_flex justify-center see-more">
                                            <b class="self-center">
                                                Saiba mais
                                            </b>
                                            <i class="self-center">
                                                &#65515;
                                            </i>
                                        </span>
                                    </div>
                                </aside>
                            </a>
                        </div>
                        <?php
                        $color_1 = '#0097e6';
                        $color_2 = '';
                        ?>
                        <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                            <a class="d_flex flex-1" href="" title="">
                                <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                    <figure class="self-center">
                                        <img src="<?php echo $site; ?>uploads/product/prod-7.png" title="" alt="" />
                                    </figure>
                                </section>
                                <aside class="flex-1 d_flex self-center direction-column">
                                    <span>
                                        Eletrônicos
                                    </span>
                                    <div class="w-100 m-top-20 color-white text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu lectus venenatis nibh tempus tincidunt. Etiam quis massa vitae risus
                                            feugiat faucibus quis eget enim. Nullam nunc quam, pellentesque sit amet aliquet eu, eleifend a eros.
                                        </p>
                                    </div>
                                    <div class="w-100 m-top-20">
                                        <span class="d_flex justify-center see-more">
                                            <b class="self-center">
                                                Saiba mais
                                            </b>
                                            <i class="self-center">
                                                &#65515;
                                            </i>
                                        </span>
                                    </div>
                                </aside>
                            </a>
                        </div>
                        <?php
                        $color_1 = '#c32e17';
                        $color_2 = '';
                        ?>
                        <div class="flex-1 relative item" style="background-color: <?php echo $color_1; ?>">
                            <a class="d_flex flex-1" href="" title="">
                                <section class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                    <figure class="self-center">
                                        <img src="<?php echo $site; ?>uploads/product/prod-8.png" title="" alt="" />
                                    </figure>
                                </section>
                                <aside class="flex-1 d_flex self-center direction-column">
                                    <span>
                                        Datas Especiais
                                    </span>
                                    <div class="w-100 m-top-20 color-white text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu lectus venenatis nibh tempus tincidunt. Etiam quis massa vitae risus
                                            feugiat faucibus quis eget enim. Nullam nunc quam, pellentesque sit amet aliquet eu, eleifend a eros.
                                        </p>
                                    </div>
                                    <div class="w-100 m-top-20">
                                        <span class="d_flex justify-center see-more">
                                            <b class="self-center">
                                                Saiba mais
                                            </b>
                                            <i class="self-center">
                                                &#65515;
                                            </i>
                                        </span>
                                    </div>
                                </aside>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="w-90 m-left-5 w-1024-100">
                <div class="w-100 m-top-50 d_flex wrap justify-center list-spotlight m-top-1024-0">
                    <div class="d_flex flex-1 item">
                        <a class="flex-1 d_flex" href="" title="">
                            <section class="flex-1 self-center">
                                <strong class="f-size-1024-16">
                                    Nome do produto
                                </strong>
                                <div class="w-100 m-top-20">
                                    <span class="f-left d_flex">
                                        <b class="self-center">
                                            Saiba mais
                                        </b>
                                        <i class="self-center">
                                            &#65515;
                                        </i>
                                    </span>
                                </div>
                            </section>
                            <aside class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                <figure class="self-center">
                                    <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </figure>
                            </aside>
                        </a>
                    </div>
                    <div class="d_flex flex-1 item">
                        <a class="flex-1 d_flex" href="" title="">
                            <section class="flex-1 self-center">
                                <strong class="f-size-1024-16">
                                    Nome do produto
                                </strong>
                                <div class="w-100 m-top-20">
                                    <span class="f-left d_flex">
                                        <b class="self-center">
                                            Saiba mais
                                        </b>
                                        <i class="self-center">
                                            &#65515;
                                        </i>
                                    </span>
                                </div>
                            </section>
                            <aside class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                <figure class="self-center">
                                    <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </figure>
                            </aside>
                        </a>
                    </div>
                    <div class="d_flex flex-1 item">
                        <a class="flex-1 d_flex" href="" title="">
                            <section class="flex-1 self-center">
                                <strong class="f-size-1024-16">
                                    Nome do produto
                                </strong>
                                <div class="w-100 m-top-20">
                                    <span class="f-left d_flex">
                                        <b class="self-center">
                                            Saiba mais
                                        </b>
                                        <i class="self-center">
                                            &#65515;
                                        </i>
                                    </span>
                                </div>
                            </section>
                            <aside class="d_flex flex-1 justify-center self-center" style="background-color: <?php echo $color_2; ?>">
                                <figure class="self-center">
                                    <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </figure>
                            </aside>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="w-100 m-top-80 menu-category-3 d_flex wrap m-top-1024-30">
                <ul class="flex-1 wrap d_flex w-1024-100 justify-1024-center">
                    <li class="active">
                        <a href="" title="Mais Vendidos">
                            Mais Vendidos
                        </a>
                    </li>
                    <li>
                        <a href="" title="Souvenirs">
                            Souvenirs
                        </a>
                    </li>
                    <li>
                        <a href="" title="Bar">
                            Bar
                        </a>
                    </li>
                    <li>
                        <a href="" title="Canecas">
                            Canecas
                        </a>
                    </li>
                    <li>
                        <a href="" title="Ecológicos">
                            Ecológicos
                        </a>
                    </li>
                    <li>
                        <a href="" title="Souvenirs">
                            Souvenirs
                        </a>
                    </li>
                    <li>
                        <a href="" title="Bar">
                            Bar
                        </a>
                    </li>
                    <li>
                        <a href="" title="Canecas">
                            Canecas
                        </a>
                    </li>
                    <li>
                        <a href="" title="Ecológicos">
                            Ecológicos
                        </a>
                    </li>
                </ul>
                <div class="flex-1 self-center buttons d_flex w-1024-100 justify-1024-center">
                    <a class="prev-category disabled" href="javascript:void(0);"></a>
                    <a class="next-category" href="javascript:void(0);"></a>
                </div>
            </nav>
            <nav class="w-100 list-group-3 w-1024-100">
                <ul class="w-100 d_flex wrap justify-center">
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b>
                                    Mais Vendidos
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b class="type-1">
                                    -20%
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b class="type-2">
                                    NOVO
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b class="type-2">
                                    NOVO
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b class="type-2">
                                    NOVO
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b class="type-2">
                                    NOVO
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                    <li class="d_flex flex-1">
                        <a class="d_flex direction-column" href="" title="">
                            <article class="w-100">
                                <b class="type-2">
                                    NOVO
                                </b>
                                <div class="w-100">
                                    <p class="w-100">
                                        CARREGADORES
                                    </p>
                                    <span class="w-100">
                                        Kit para Churrasco
                                    </span>
                                </div>
                            </article>
                            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                                <div class="self-center">
                                    <img class="display-inline-block max-w-100 max-h-180-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                </div>
                            </figure>
                            <div class="w-100 m-top-10 text text-2">
                                <p>
                                    Kit churrasco 10 peças em maleta de alumínio com relevo. Possui:
                                    faca, pegador, escova(com proteção plástica), garfo, duas facas
                                    de serra pequenas, dois garfos pequenos...
                                </p>
                            </div>
                        </a>
                        <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart" href="" class="ADICIONAR AO CARRINHO">
                            ADICIONAR AO CARRINHO
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="w-90 m-top-30 m-left-5 m-top-80 d_flex wrap box-title w-1024-100 m-top-1024-30">
                <div class="flex-1">
                    <h2 class="f-left title">
                        Mais Vendidos
                    </h2>
                </div>
                <div class="flex-1 self-center buttons">
                    <a class="prev-category disabled" href="javascript:void(0);"></a>
                    <a class="next-category" href="javascript:void(0);"></a>
                </div>
            </div>
            <div class="w-90 m-top-30 m-left-5 d_flex relative w-1024-100 column-1024">
                <section class="flex-1 d_flex wrap bg-white w-1024-100">
                    <div class="w-100 d_flex self-center list-group-4 direction-column">
                        <div class="flex-1 item">
                            <a class="d_flex" href="" title="">
                                <figure class="flex-1 bg-grey"></figure>
                                <div class="flex-1">
                                    <article class="w-100">
                                        <p class="w-100">
                                            CARREGADORES
                                        </p>
                                        <span class="w-100">
                                            Kit para Churrasco
                                        </span>
                                    </article>
                                    <span class="w-100 h-1-px m-top-10 bg-grey"></span>
                                    <div class="w-100 m-top-10 text text-2">
                                        <p>
                                            Donec quis orci euismod, hendrerit libero id, pharetra elit.
                                            Proin vestibulum, libero id eleifend tincidunt, nulla tellus
                                            interdum mi, in efficitur magna ante non est.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-1 item">
                            <a class="d_flex" href="" title="">
                                <figure class="flex-1 bg-grey"></figure>
                                <div class="flex-1">
                                    <article class="w-100">
                                        <p class="w-100">
                                            CARREGADORES
                                        </p>
                                        <span class="w-100">
                                            Kit para Churrasco
                                        </span>
                                    </article>
                                    <span class="w-100 h-1-px m-top-10 bg-grey"></span>
                                    <div class="w-100 m-top-10 text text-2">
                                        <p>
                                            Donec quis orci euismod, hendrerit libero id, pharetra elit.
                                            Proin vestibulum, libero id eleifend tincidunt, nulla tellus
                                            interdum mi, in efficitur magna ante non est.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-1 item">
                            <a class="d_flex" href="" title="">
                                <figure class="flex-1 bg-grey"></figure>
                                <div class="flex-1">
                                    <article class="w-100">
                                        <p class="w-100">
                                            CARREGADORES
                                        </p>
                                        <span class="w-100">
                                            Kit para Churrasco
                                        </span>
                                    </article>
                                    <span class="w-100 h-1-px m-top-10 bg-grey"></span>
                                    <div class="w-100 m-top-10 text text-2">
                                        <p>
                                            Donec quis orci euismod, hendrerit libero id, pharetra elit.
                                            Proin vestibulum, libero id eleifend tincidunt, nulla tellus
                                            interdum mi, in efficitur magna ante non est.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <aside class="flex-1 bg-grey w-1024-100" style="background: url(<?php echo $site; ?>uploads/page/case.jpg) no-repeat;background-position: top left;background-size: auto 100%;">
                    <img class="w-100 display-none display-1024-block" src="<?php echo $site; ?>uploads/page/case.jpg" title="" alt="" />
                </aside>
            </div>
        </div>
    </section>
    <section class="w-100 p-top-80 content p-top-1024-30 m-top-1024-0">
        <div class="w-100 p-top-80 relative z-index-2 p-top-1024-0">
            <div class="center">
                <h3 class="w-100 t-align-c f-w-700 color-black f-size-30 font-2 f-size-1024-20">
                    Conheça  os  nossos  Catálogos
                </h3>
                <div class="w-80 m-top-50 m-left-10 w-1024-100 m-top-1024-20">
                    <div class="w-100 t-align-c color-black text">
                        <p>
                            Pellentesque feugiat sagittis eros ut iaculis. Duis finibus erat cursus orci condimentum congue. Cras viverra eget metus at tincidunt.
                        </p>
                    </div>
                    <div class="w-100 m-top-20 d_flex wrap justify-center list-group-5 m-top-1024-0">
                        <div class="flex-1 item">
                            <a class="w-100" href="" title="">
                                <figure class="w-100">
                                    <img class="w-100" src="<?php echo $site; ?>uploads/page/catalog.jpg" title="" alt="" />
                                </figure>
                            </a>
                        </div>
                        <div class="flex-1 item">
                            <a class="w-100" href="" title="">
                                <figure class="w-100 relative">
                                    <img class="w-100" src="<?php echo $site; ?>uploads/page/catalog.jpg" title="" alt="" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 p-top-60 p-bottom-80 p-top-1024-10 p-bottom-1024-30">
        <div class="center">
            <div class="w-80 m-left-10 d_flex wrap justify-center list-group-6 w-1024-100 m-top-1024-0">
                <div class="flex-1 item w-1024-100">
                    <a class="d_flex secondary-bg-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center">
                            <figure class="self-center">
                                <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 self-center">
                            <span class="w-100 f-size-1024-16">
                                Para se hidratar
                                & carregar as
                                energias!
                            </span>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        ￫
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <div class="flex-1 item w-1024-100">
                    <a class="d_flex secondary-bg-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center">
                            <figure class="self-center">
                                <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 self-center">
                            <span class="w-100 f-size-1024-16">
                                Para se hidratar
                                & carregar as
                                energias!
                            </span>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        ￫
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <div class="flex-1 item w-1024-100">
                    <a class="d_flex secondary-bg-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center">
                            <figure class="self-center">
                                <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 self-center">
                            <span class="w-100 f-size-1024-16">
                                Para se hidratar
                                & carregar as
                                energias!
                            </span>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        ￫
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
                <div class="flex-1 item w-1024-100">
                    <a class="d_flex secondary-bg-1" href="" title="">
                        <section class="d_flex flex-1 justify-center self-center">
                            <figure class="self-center">
                                <img class="max-w-100" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                            </figure>
                        </section>
                        <aside class="flex-1 self-center">
                            <span class="w-100 f-size-1024-16">
                                Para se hidratar
                                & carregar as
                                energias!
                            </span>
                            <div class="w-100 m-top-20">
                                <span class="d_flex justify-center see-more">
                                    <b class="self-center">
                                        Saiba mais
                                    </b>
                                    <i class="self-center">
                                        ￫
                                    </i>
                                </span>
                            </div>
                        </aside>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php include_once('inc/footer.php'); ?>