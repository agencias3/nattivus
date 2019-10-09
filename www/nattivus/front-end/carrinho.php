<?php
$title = "Home";
$ativo = "home";
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
                            <a href="" title="Carrinho de Orçamento">
                                Carrinho de Orçamento
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="w-100 m-top-80 t-align-c m-top-1024-30">
                    <h1 class="w-100 f-w-600 f-size-26 secondary-color font-2">
                        Carrinho de Orçamento
                    </h1>
                    <div class="w-100 m-top-20 color-grey text text-3 w-1024-100">
                        <p>
                            Revise seus produtos e selecione a quantidade desejada.
                        </p>
                    </div>
                </div>
                <form class="w-100 m-top-30 def-form m-top-1024-20 m-top-800-0" id="fCart" method="post" action="">
                    <ul class="w-100 d_flex list-cart direction-column">
                        <!--li class="d_flex display-800-none">
                            <section class="d_flex">
                                <span>
                                    Produto
                                </span>
                            </section>
                            <aside class="d_flex flex-1 justify-center">
                                <span class="">
                                    Quantidade
                                </span>
                            </aside>
                        </li-->
                        <li class="d_flex column-800">
                            <section class="d_flex self-center">
                                <a class="flex-1 h-100-px d_flex justify-center t-align-c border-grey" href="" title="">
                                    <figure class="self-center">
                                        <img class="display-inline-block max-w-100 max-h-75-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                    </figure>
                                </a>
                                <div class="m-left-30-px flex-1 d_flex h-100 self-center direction-column m-left-800-20-px">
                                    <strong>
                                        Broca aço rápido haste paralela - Dormer
                                    </strong>
                                    <span>
                                        Com formato anatômico e design moderno, tem a parte frontal à prova d’água e tecido impermeável.
                                    </span>
                                </div>
                            </section>
                            <aside class="d_flex c-left flex-1 justify-center self-center">
                                <div class="box-qtd">
                                    <a class="d_flex justify-center self-center" href="javascript:void(0);" onclick="removeProduct($(this))" title="Remover">
                                        <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/remove.png" title="" alt="" />
                                    </a>
                                    <input type="text" data-stock="6" readonly value="1" />
                                    <div class="buttons d_flex direction-column">
                                        <a class="d_flex justify-center self-center" href="javascript:void(0);" onclick="actionProduct($(this))" title="+">
                                            <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/up.png" title="" alt="" />
                                        </a>
                                        <a class="d_flex justify-center self-center c-both" href="javascript:void(0);" onclick="actionProduct($(this))" title="-">
                                            <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/down-2.png" title="" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </li>
                        <li class="d_flex column-800">
                            <section class="d_flex self-center">
                                <a class="flex-1 h-100-px d_flex justify-center t-align-c border-grey" href="" title="">
                                    <figure class="self-center">
                                        <img class="display-inline-block max-w-100 max-h-75-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                    </figure>
                                </a>
                                <div class="m-left-30-px flex-1 d_flex h-100 self-center direction-column m-left-800-20-px">
                                    <strong>
                                        Broca aço rápido haste paralela - Dormer
                                    </strong>
                                    <span>
                                        Com formato anatômico e design moderno, tem a parte frontal à prova d’água e tecido impermeável.
                                    </span>
                                </div>
                            </section>
                            <aside class="d_flex c-left flex-1 justify-center self-center">
                                <div class="box-qtd">
                                    <a class="d_flex justify-center self-center" href="javascript:void(0);" onclick="removeProduct($(this))" title="Remover">
                                        <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/remove.png" title="" alt="" />
                                    </a>
                                    <input type="text" data-stock="" readonly value="1" />
                                    <div class="buttons d_flex direction-column">
                                        <a class="d_flex justify-center self-center" href="javascript:void(0);" onclick="actionProduct($(this))" title="+">
                                            <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/up.png" title="" alt="" />
                                        </a>
                                        <a class="d_flex justify-center self-center c-both" href="javascript:void(0);" onclick="actionProduct($(this))" title="-">
                                            <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/down-2.png" title="" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </li>
                        <li class="d_flex column-800 m-top-800-20">
                            <section class="d_flex self-center">
                                <a class="flex-1 h-100-px d_flex justify-center t-align-c border-grey" href="" title="">
                                    <figure class="self-center">
                                        <img class="display-inline-block max-w-100 max-h-75-px" src="<?php echo $site; ?>uploads/product/prod-9.png" title="" alt="" />
                                    </figure>
                                </a>
                                <div class="m-left-30-px flex-1 d_flex h-100 self-center direction-column m-left-800-20-px">
                                    <strong>
                                        Broca aço rápido haste paralela - Dormer
                                    </strong>
                                    <span>
                                        Com formato anatômico e design moderno, tem a parte frontal à prova d’água e tecido impermeável.
                                    </span>
                                </div>
                            </section>
                            <aside class="d_flex c-left flex-1 justify-center self-center">
                                <div class="box-qtd">
                                    <a class="d_flex justify-center self-center" href="javascript:void(0);" onclick="removeProduct($(this))" title="Remover">
                                        <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/remove.png" title="" alt="" />
                                    </a>
                                    <input type="text" data-stock="6" readonly value="1" />
                                    <div class="buttons d_flex direction-column">
                                        <a class="d_flex justify-center self-center" href="javascript:void(0);" onclick="actionProduct($(this))" title="+">
                                            <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/up.png" title="" alt="" />
                                        </a>
                                        <a class="d_flex justify-center self-center c-both" href="javascript:void(0);" onclick="actionProduct($(this))" title="-">
                                            <img class="self-center" src="<?php echo $site; ?>assets/site/images/icons/down-2.png" title="" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </li>
                    </ul>
                    <p class="w-100 m-top-60 l-height-16 t-align-c f-w-600 f-size-22 secondary-color font-2 m-top-1024-30 f-size-1024-20 f-size-600-16">
                        Preencha os dados abaixo para completar sua solicitação
                    </p>
                    <div class="w-80 m-top-20 m-left-10 d_flex wrap justify-space form w-1024-100">
                        <fieldset>
                            <input type="text" id="contact-name" placeholder="Nome e Sobrenome*" />
                        </fieldset>
                        <fieldset>
                            <input type="text" id="contact-enterprise" placeholder="Empresa:" />
                        </fieldset>
                        <fieldset>
                            <input type="email" id="contact-email" placeholder="E-mail:" />
                        </fieldset>
                        <fieldset>
                            <input class="masked-phone" type="text" id="contact-phone" placeholder="Telefone:" />
                        </fieldset>
                        <fieldset class="w-100">
                            <textarea id="contact-message" placeholder="Deseja perguntar algo? Escreva sua mensagem..."></textarea>
                        </fieldset>
                        <fieldset class="w-100 t-align-c">
                            <input class="display-inline-block pointer smooth w-600-100" type="submit" id="send-contact" value="ENVIAR SOLICITAÇÃO DE ORÇAMENTO" />
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php include_once('inc/footer.php'); ?>