<footer class="w-100">
    <div class="w-100 p-top-40 p-bottom-40 bg-white-1 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <article class="w-90 m-left-5 d_flex wrap w-1024-100">
                <section class="w-1024-100">
                    <figure class="d_flex justify-center">
                        <a class="max-w-100" href="{{ route('home') }}" title="{{ config('app.name') }}">
                            <img class="max-w-100" src="{{ asset('assets/site/images/icons/main-logo.png') }}" title="{{ config('app.name') }}" alt="{{ config('app.name') }}" />
                        </a>
                    </figure>
                    @if(isPost(session()->get('configuration')[8]['description']))
                    <div class="m-top-40 d_flex justify-center m-top-1024-30">
                        <figure>
                            <img class="f-left" src="{{ asset('assets/site/images/icons/phone.png') }}" title="Telefone" alt="Telefone" />
                        </figure>
                        <p class="d_flex justify-center direction-column c-left m-left-20-px">
                            <span class="color-grey f-size-12">FALE CONOSCO</span>
                            <strong class="m-top-8 f-w-600 color-grey f-size-18">{{ session()->get('configuration')[8]['description'] }}</strong>
                        </p>
                    </div>
                    @endif
                </section>
                <aside class="flex-1 d_flex m-left-120-px w-1024-100 column-800">
                    <nav class="m-top-40 d_flex flex-1 direction-column menu-footer t-align-800-c">
                        <span>
                            Informações
                        </span>
                        <ul class="d_flex direction-column">
                            <li>
                                <a href="{{ route('about') }}" title="Quem Somos">
                                    - Quem Somos
                                </a>
                            </li>
                            <li>
                                <a href="" title="Informações de Entrega">
                                    - Informações de Entrega
                                </a>
                            </li>
                            <li>
                                <a href="" title="Dúvidas no site">
                                    - Dúvidas no site
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" title="Fale Conosco">
                                    - Fale Conosco
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="m-top-40 d_flex flex-1 direction-column menu-footer t-align-800-c">
                            <span>
                                Minha Conta
                            </span>
                        <ul class="d_flex direction-column">
                            <li>
                                <a href="" title="Login">
                                    - Login
                                </a>
                            </li>
                            <li>
                                <a href="" title="Cadastro">
                                    - Cadastro
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="m-top-40 d_flex flex-1 direction-column menu-footer t-align-800-c">
                        <span>
                            Nattivus Brindes
                        </span>
                        <div class="flex-1 m-top-20 color-grey text">
                            <p>
                            <?php
                                echo nl2br(session()->get('configuration')[6]['description']).'<br />';
                                echo nl2br(session()->get('configuration')[5]['description']).'<br />';
                                echo '<a href="mailto:'.session()->get('configuration')[3]['description'].'" title="'.session()->get('configuration')[3]['description'].'">'.session()->get('configuration')[3]['description'].'</a>';
                            ?>
                            </p>
                        </div>
                    </div>
                </aside>
            </article>
        </div>
    </div>
    <div class="w-100 p-top-20 p-bottom-20 secondary-bg end-footer">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                @if(isPost(session()->get('configuration')[4]['description']) || isPost(session()->get('configuration')[9]['description']) || isPost(session()->get('configuration')[10]['description']))
                <ul class="f-left c-left social-footer w-800-100 t-align-800-c">
                    @if(isPost(session()->get('configuration')[4]['description']))
                    <li class="display-inline-block f-800-n">
                        <a href="{{ session()->get('configuration')[4]['description'] }}" title="Facebook" target="_blank">
                            <img class="display-inline-block f-none" src="{{ asset('assets/site/images/icons/social-1.png') }}" title="Facebook" alt="Facebook" />
                        </a>
                    </li>
                    @endif
                    @if(isPost(session()->get('configuration')[9]['description']))
                    <li class="display-inline-block f-800-n">
                        <a href="{{ session()->get('configuration')[9]['description'] }}" target="_blank" title="Instagram">
                            <img class="display-inline-block f-none" src="{{ asset('assets/site/images/icons/social-2.png') }}" title="Instagram" alt="Instagram" />
                        </a>
                    </li>
                    @endif
                    @if(isPost(session()->get('configuration')[10]['description']))
                    <li class="display-inline-block f-800-n">
                        <a href="{{ session()->get('configuration')[10]['description'] }}" target="_blank" title="WhatsApp">
                            <img class="display-inline-block f-none" src="{{ asset('assets/site/images/icons/social-3.png') }}" title="WhatsApp" alt="WhatsApp" />
                        </a>
                    </li>
                    @endif
                </ul>
                @endif
                <p class="f-right c-left w-800-100 m-top-800-20 t-align-800-c">
                    <span class="color-white l-height-14 f-size-14 display-inline-block f-800-n">
                        Copyright © {{ date('Y') }} Nattivus Brindes Todos os direitos reservados -
                    </span>
                    <a class="m-left-5-px l-height-16 color-white f-size-14 t-decoration display-inline-block f-800-n" target="_blank" href="https://www.agencias3.com.br" title="AGÊNCIA S3">
                        AGÊNCIA S3
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>