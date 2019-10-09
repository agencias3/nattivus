<?php
$title = "Contato";
$ativo = "contato";
include_once('inc/header.php');
?>
    <section class="w-100 p-top-60 p-bottom-60 top-page-2 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <h1 class="w-100 t-align-c color-white f-size-30 font-2 f-size-1024-20 f-size-600-18">
                Quem Somos
            </h1>
            <ul class="w-100 m-top-10 c-left d_flex wrap justify-center bread-crumbs-2">
                <li>
                    <a href="" title="Home">
                        Home
                    </a>
                </li>
                <li>
                    •
                </li>
                <li>
                    <a href="" title="Contato">
                        Contato
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-100 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <div class="w-100 t-align-c">
                    <span class="display-inline-block w-60-px f-none h-3-px secondary-bg-1"></span>
                </div>
                <div class="w-80 m-left-10 m-top-20 t-align-c text text-3 w-1024-100">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="w-100 m-top-20 wrap d_flex justify-center list-address m-top-1024-0">
                    <div class="item">
                        <div class="w-100 d_flex justify-center">
                            <span class="d_flex justify-center">
                                <img class="f-left self-center" src="<?php echo $site; ?>assets/site/images/icons/address-1.png" title="" alt="" />
                            </span>
                        </div>
                        <div class="w-100 m-top-20 t-align-c text">
                            <p>
                                Av. do Nazário, 515<br />
                                Olaria - Canoas/RS<br />
                                CEP 92035-000
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="w-100 d_flex justify-center">
                            <span class="d_flex justify-center">
                                <img class="f-left self-center" src="<?php echo $site; ?>assets/site/images/icons/address-2.png" title="" alt="" />
                            </span>
                        </div>
                        <div class="w-100 m-top-20 t-align-c text">
                            <p>
                                (51) 3012.3222<br />
                                (51) 3012.3222
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="w-100 d_flex justify-center">
                            <span class="d_flex justify-center">
                                <img class="f-left self-center" src="<?php echo $site; ?>assets/site/images/icons/address-3.png" title="" alt="" />
                            </span>
                        </div>
                        <div class="w-100 m-top-20 t-align-c text">
                            <p>
                                <a href="" title="">contato@nattivus.com.br</a>
                            </p>
                        </div>
                    </div>
                </div>
                <iframe class="w-100 m-top-50 m-top-1024-30 h-1024-350-px h-600-250-px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.760236132119!2d-51.19081598427843!3d-30.043735738205317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197823229c28a5%3A0x6cf8e8f4472c08c!2sRua%20V%C3%ADtor%20Hugo%2C%2037%20-%20Petr%C3%B3polis%2C%20Porto%20Alegre%20-%20RS%2C%2090630-070!5e0!3m2!1spt-BR!2sbr!4v1567520237150!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <div class="w-80 m-left-10 w-1024-100">
                    <div class="w-100 m-top-30 d_flex buttons-options column-600 m-top-1024-10">
                        <a class="flex-1 smooth f-size-1024-16 active" href="javascript:void(0);" onclick="altContact($(this));" title="Envie uma Mensagem">
                            Envie uma Mensagem
                        </a>
                        <a class="flex-1 smooth f-size-1024-16" href="javascript:void(0);" onclick="altContact($(this));" title="Trabalhe Conosco">
                            Trabalhe Conosco
                        </a>
                    </div>
                    <div class="w-100 option-contact">
                        <div class="w-100 m-top-50 t-align-c text text-3 w-1024-100 m-top-1024-30">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="w-100 m-top-20 t-align-c">
                            <span class="display-inline-block w-60-px f-none h-3-px secondary-bg-1"></span>
                        </div>
                        <form class="w-100 d_flex wrap justify-space form column-800 m-top-800-5" id="fContact" method="post" action="">
                            <fieldset>
                                <input type="text" id="contact-name" placeholder="Nome e Sobrenome*" />
                            </fieldset>
                            <fieldset>
                                <input type="email" id="contact-email" placeholder="E-mail" />
                            </fieldset>
                            <fieldset>
                                <input class="masked-phone" type="text" id="contact-phone" placeholder="Telefone:" />
                            </fieldset>
                            <fieldset>
                                <input type="text" id="contact-subject" placeholder="Assunto" />
                            </fieldset>
                            <fieldset class="w-100">
                                <textarea id="contact-message" placeholder="Escreva a sua mensagem..."></textarea>
                            </fieldset>
                            <fieldset class="w-100 t-align-c">
                                <input class="display-inline-block pointer smooth w-600-100" type="submit" id="send-contact" value="Enviar" />
                            </fieldset>
                        </form>
                    </div>
                    <div class="w-100 option-contact display-none">
                        <div class="w-100 m-top-50 t-align-c text text-3 w-1024-100 m-top-1024-30">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="w-100 m-top-20 t-align-c">
                            <span class="display-inline-block w-60-px f-none h-3-px secondary-bg-1"></span>
                        </div>
                        <form class="w-100 d_flex wrap justify-space form column-800 m-top-800-5" id="fWork" method="post" action="">
                            <fieldset>
                                <input type="text" id="contact-name" placeholder="Nome e Sobrenome*" />
                            </fieldset>
                            <fieldset>
                                <input type="email" id="contact-email" placeholder="E-mail" />
                            </fieldset>
                            <fieldset>
                                <input class="masked-phone" type="text" id="contact-phone" placeholder="Telefone:" />
                            </fieldset>
                            <fieldset>
                                <input type="text" id="contact-subject" placeholder="Assunto" />
                            </fieldset>
                            <fieldset>
                                <input type="text" id="contact-city" placeholder="Cidade:" />
                            </fieldset>
                            <fieldset class="file relative">
                                <span class="w-100 d_flex relative z-index-1">
                                    <b class="d_flex flex-1 direction-column self-center">
                                        Anexo (Currículo)
                                    </b>
                                    <figure></figure>
                                </span>
                                <input class="w-100 h-100 absolute z-index-2 top-0 left-0 opacity-0" type="file" id="contact-file" value="" />
                            </fieldset>
                            <fieldset class="w-100">
                                <textarea id="contact-message" placeholder="Escreva a sua mensagem..."></textarea>
                            </fieldset>
                            <fieldset class="w-100 t-align-c">
                                <input class="display-inline-block pointer smooth w-600-100" type="submit" id="send-contact" value="Enviar" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once('inc/footer.php'); ?>