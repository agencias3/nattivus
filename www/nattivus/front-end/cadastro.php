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
                            Cadastro
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="w-80 m-top-50 m-left-10 w-1024-100 m-top-1024-30">
                <form class="w-100 d_flex wrap justify-space form" id="fRegister" method="post" action="">
                    <div class="w-100">
                        <label class="w-100 f-w-600 l-height-14 f-size-20 secondary-color font-2 t-align-1024-c">
                            Identificação
                        </label>
                    </div>
                    <div class="w-100 m-top-25 m-bottom-5 d_flex wrap bg-white-1 box-buttons">
                        <fieldset class="display-1024-flex w-600-100">
                            <p class="f-right m-right-20-px display-1024-flex justify-1024-center w-800-100">
                                <input type="radio" id="pf-1" name="people" value="1" />
                                <b>
                                    Pessoa Física
                                </b>
                            </p>
                        </fieldset>
                        <fieldset class="display-1024-flex">
                            <p class="m-left-20-px display-1024-flex justify-1024-center w-800-100 m-top-800-10">
                                <input type="radio" id="pj-1" name="people" value="2" />
                                <b>
                                    Pessoa Jurídica
                                </b>
                            </p>
                        </fieldset>
                    </div>
                    <fieldset>
                        <input type="text" id="register-name" placeholder="Nome Completo" />
                    </fieldset>
                    <fieldset>
                        <input class="masked-cpf" type="text" id="register-cpf" placeholder="CPF" />
                    </fieldset>
                    <fieldset>
                        <input class="masked-phone" type="text" id="register-phone" placeholder="Telefone" />
                    </fieldset>
                    <fieldset>
                        <input class="masked-date" type="text" id="register-date" placeholder="Data de Nascimento" />
                    </fieldset>
                    <fieldset>
                        <select>
                            <option value="0">
                                Sexo
                            </option>
                            <option value="m">
                                Masculino
                            </option>
                            <option value="f">
                                Feminino
                            </option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <input type="email" id="register-email" placeholder="E-mail" />
                    </fieldset>
                    <fieldset>
                        <input type="password" id="register-password" placeholder="Senha" />
                    </fieldset>
                    <fieldset>
                        <input type="password" id="register-repeat-password" placeholder="Confirmar Senha" />
                    </fieldset>

                    <div class="w-100 m-top-50 m-top-1024-30">
                        <label class="w-100 f-w-600 l-height-14 f-size-20 secondary-color font-2">
                            Endereço de Entrega
                        </label>
                    </div>
                    <fieldset>
                        <input type="text" id="register-address" placeholder="Logradouro (Rua, Avenida...)" />
                    </fieldset>
                    <fieldset>
                        <input type="text" id="register-number" placeholder="Número" />
                    </fieldset>
                    <fieldset>
                        <input class="masked-cep" type="text" id="register-cep" placeholder="CEP" />
                    </fieldset>
                    <fieldset>
                        <input type="text" id="register-complement" placeholder="Complemento" />
                    </fieldset>
                    <fieldset>
                        <input type="text" id="register-reference" placeholder="Ponto de Referência" />
                    </fieldset>
                    <fieldset>
                        <select>
                            <option value="0">
                                Estado
                            </option>
                            <option value="m">
                                Estado 01
                            </option>
                            <option value="f">
                                Estado 02
                            </option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <select>
                            <option value="0">
                                Cidade
                            </option>
                            <option value="m">
                                Cidade 01
                            </option>
                            <option value="f">
                                Cidade 02
                            </option>
                        </select>
                    </fieldset>
                    <fieldset class="c-left d_flex self-center box-confirm">
                        <div class="w-100">
                            <span class="f-w-600 l-height-14 f-size-14 secondary-color font-2">
                                Mesmo endereço de Cobrança?
                            </span>
                            <p>
                                <input type="radio" id="confirm-1" name="confirm" value="1" />
                                <b>
                                    Sim
                                </b>
                            </p>
                            <p>
                                <input type="radio" id="confirm-2" name="confirm" value="2" />
                                <b>
                                    Não
                                </b>
                            </p>
                        </div>
                    </fieldset>

                    <fieldset class="w-100 m-top-50 t-align-c">
                        <input class="display-inline-block pointer smooth w-600-100" type="submit" id="send-register" value="CONTINUAR" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once('inc/footer.php'); ?>