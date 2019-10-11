@extends('site.layouts.app')
@section('content')
    <section class="w-100 p-top-30 p-bottom-80 relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <nav class="w-100 bread-crumbs d_flex wrap">
                    @include('site.layouts.bread-crumbs', ['class' => 'flex-1 wrap d_flex'])
                </nav>
                <div class="w-100 m-top-80 t-align-c m-top-1024-30">
                    <h1 class="w-100 f-w-600 f-size-26 secondary-color font-2">
                        Carrinho de Orçamento
                    </h1>
                    <div class="w-100 m-top-20 color-grey text text-3 w-1024-100">
                        <p>
                            @if($cart->items)
                            Revise seus produtos e selecione a quantidade desejada.
                            @else
                                Nenhum produto adicionado ao carrinho de orçamentos
                            @endif
                        </p>
                    </div>
                </div>
                @if($cart->items)
                {!! Form::open(['route' => 'budget.store', 'class' => 'w-100 m-top-30 def-form m-top-1024-20 m-top-800-0', 'id' => 'fCart']) !!}
                    <ul class="w-100 d_flex list-cart direction-column showCart">
                        @include('site.budget.cart')
                    </ul>
                    <p class="w-100 m-top-60 l-height-16 t-align-c f-w-600 f-size-22 secondary-color font-2 m-top-1024-30 f-size-1024-20 f-size-600-16">
                        Preencha os dados abaixo para completar sua solicitação
                    </p>
                    <div class="w-80 m-top-20 m-left-10 d_flex wrap justify-space form w-1024-100">
                        <fieldset>
                            <input type="text" id="contact-name" placeholder="Nome e Sobrenome *" name="name" required />
                        </fieldset>
                        <fieldset>
                            <input type="text" id="contact-enterprise" placeholder="Empresa" name="company" />
                        </fieldset>
                        <fieldset>
                            <input type="email" id="contact-email" placeholder="E-mail *" name="email" required />
                        </fieldset>
                        <fieldset>
                            <input class="masked-phone" type="text" id="contact-phone" placeholder="Telefone *" name="phone" required />
                        </fieldset>
                        <fieldset class="w-100">
                            <textarea id="contact-message" placeholder="Deseja perguntar algo? Escreva sua mensagem..." name="message"></textarea>
                        </fieldset>
                        <fieldset class="w-100 t-align-c send-contact">
                            <input class="display-inline-block pointer smooth w-600-100" type="submit" id="send-contact" value="ENVIAR SOLICITAÇÃO DE ORÇAMENTO" />
                        </fieldset>
                    </div>
                    <div class="def-msg w-100 m-top-30 f-size-16 t-align-c"></div>
                {!! Form::close() !!}
                @endif
            </div>
        </div>
    </section>
@endsection