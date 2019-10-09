@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 p-top-60 p-bottom-60 top-page-2 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <h1 class="w-100 t-align-c color-white f-size-30 font-2 f-size-1024-20 f-size-600-18">
                Contato
            </h1>
            @include('site.layouts.bread-crumbs')
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-100 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <div class="w-100 t-align-c">
                    <span class="display-inline-block w-60-px f-none h-3-px secondary-bg-1"></span>
                </div>
                <?php $page->show(6); ?>
                @if(isPost(session()->get('page')[6]['description']))
                <div class="w-80 m-left-10 m-top-20 t-align-c text text-3 w-1024-100">
                    {!! session()->get('page')[6]['description'] !!}
                </div>
                @endif
                <div class="w-100 m-top-20 wrap d_flex justify-center list-address m-top-1024-0">
                    @if(isPost(session()->get('configuration')[6]['description']))
                    <div class="item">
                        <div class="w-100 d_flex justify-center">
                            <span class="d_flex justify-center">
                                <img class="f-left self-center" src="{{ asset('assets/site/images/icons/address-1.png') }}" title="Endereço" alt="Endereço" />
                            </span>
                        </div>
                        <div class="w-100 m-top-20 t-align-c text">
                            <p>
                                {!! nl2br(session()->get('configuration')[6]['description']) !!}
                            </p>
                        </div>
                    </div>
                    @endif
                    @if(isPost(session()->get('configuration')[5]['description']))
                    <div class="item">
                        <div class="w-100 d_flex justify-center">
                            <span class="d_flex justify-center">
                                <img class="f-left self-center" src="{{ asset('assets/site/images/icons/address-2.png') }}" title="Telefones" alt="Telefones" />
                            </span>
                        </div>
                        <div class="w-100 m-top-20 t-align-c text">
                            <p>
                                {!! nl2br(session()->get('configuration')[5]['description']) !!}
                            </p>
                        </div>
                    </div>
                    @endif
                    @if(isPost(session()->get('configuration')[3]['description']))
                    <div class="item">
                        <div class="w-100 d_flex justify-center">
                            <span class="d_flex justify-center">
                                <img class="f-left self-center" src="{{ asset('assets/site/images/icons/address-3.png') }}" title="E-mail" alt="E-mail" />
                            </span>
                        </div>
                        <div class="w-100 m-top-20 t-align-c text">
                            <p>
                                <a href="mailto:{{ session()->get('configuration')[3]['description'] }}" title="{{ session()->get('configuration')[3]['description'] }}">{{ session()->get('configuration')[3]['description'] }}</a>
                            </p>
                        </div>
                    </div>
                    @endif
                </div>
                @if(isPost(session()->get('configuration')[7]['description']))
                <iframe class="w-100 m-top-50 m-top-1024-30 h-1024-350-px h-600-250-px" src="{{ session()->get('configuration')[7]['description'] }}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                @endif
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
                        <?php $page->show(7); ?>
                        @if(isPost(session()->get('page')[7]['description']))
                        <div class="w-100 m-top-50 t-align-c text text-3 w-1024-100 m-top-1024-30">
                            {!! session()->get('page')[7]['description'] !!}
                        </div>
                        @endif
                        <div class="w-100 m-top-20 t-align-c">
                            <span class="display-inline-block w-60-px f-none h-3-px secondary-bg-1"></span>
                        </div>
                        @include('site.contact._form')
                    </div>
                    <div class="w-100 option-contact display-none">
                        <?php $page->show(8); ?>
                        @if(isPost(session()->get('page')[8]['description']))
                        <div class="w-100 m-top-50 t-align-c text text-3 w-1024-100 m-top-1024-30">
                            {!! session()->get('page')[8]['description'] !!}
                        </div>
                        @endif
                        <div class="w-100 m-top-20 t-align-c">
                            <span class="display-inline-block w-60-px f-none h-3-px secondary-bg-1"></span>
                        </div>
                        @include('site.contact._form_work')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection