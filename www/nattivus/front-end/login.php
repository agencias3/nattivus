<?php
$title = "Quem somos";
$ativo = "quemsomos";
include_once('inc/header.php');
?>
<section class="w-100 p-top-30 p-bottom-80 relative z-index-2 p-bottom-1024-30">
    <div class="center">
        <div class="w-90 m-left-5 w-1024-100">
            <nav class="w-100 bread-crumbs d_flex wrap">
                <ul class="flex-1 wrap d_flex">
                    <li>
                        <a href="" title="Home">
                            Home
                        </a>
                    </li>
                    <li>
                        •
                    </li>
                    <li class="active">
                        <a href="" title="Cadastro/Login">
                            Login
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="w-90 m-top-50 m-left-5 w-1024-100 m-top-1024-30">
                <h1 class="w-100 t-align-c f-w-600 l-height-14 f-size-20 secondary-color font-2">
                    Identificação
                </h1>
                <article class="w-100 m-top-50 d_flex m-top-1024-20 column-1024">
                    <section class="flex-1 w-1024-100">
                        <form class="w-70 form w-1024-100" id="fLogin" method="post" action="">
                            <label class="w-100 t-align-c f-w-800 l-height-14 f-size-20 secondary-color font-2">
                                Já sou cliente
                            </label>
                            <fieldset class="w-100">
                                <input type="email" id="login-email" placeholder="E-mail:" />
                            </fieldset>
                            <fieldset class="w-100">
                                <input type="password" id="login-password" placeholder="Senha:" />
                            </fieldset>
                            <p class="w-100 m-top-15">
                                <a class="f-right color-grey f-size-12 t-under" href="" title="Esqueci minha senha">
                                    Esqueci minha senha
                                </a>
                            </p>
                            <fieldset class="w-100 t-align-c">
                                <input class="display-inline-block pointer smooth w-600-100" type="submit" id="login-register" value="CONTINUAR" />
                            </fieldset>
                        </form>
                    </section>
                    <aside class="flex-1 d_flex justify-end right-login w-1024-100 border-1024-none m-top-1024-30">
                        <div class="w-70 self-center t-align-c w-1024-100">
                            <span class="w-100 f-w-800 l-height-14 f-size-20 secondary-color font-2">
                                Ainda não tenho cadastro
                            </span>
                            <div class="w-100 m-top-30 text m-top-1024-20">
                                <p>
                                    Para comprar em nosso site é preciso realizar um cadastro. Através dele você ficará por dentro das novidades, ofertas e promoções!
                                </p>
                            </div>
                            <div class="w-100 m-top-30 m-top-1024-20">
                                <a class="display-inline-block bt-enter smooth w-600-100" href="" title="INICIAR CADASTRO">
                                    INICIAR CADASTRO
                                </a>
                            </div>
                        </div>
                    </aside>
                </article>
            </div>
        </div>
    </div>
</section>
<?php include_once('inc/footer.php'); ?>