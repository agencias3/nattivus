@extends('site.layouts.app')
@section('content')
    @inject("objProduct","\AgenciaS3\Http\Controllers\Site\ProductController")
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 p-top-30 p-bottom-80 relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <nav class="w-100 bread-crumbs d_flex wrap">
                    @include('site.layouts.bread-crumbs', ['class' => 'flex-1 wrap d_flex'])
                </nav>
                <h1 class="w-100 m-top-40 color-black f-size-22 font-2 m-top-1024-30 t-align-1024-c f-size-1024-20 f-size-600-16">
                    {{ $product->name }}
                </h1>
                <div class="w-100 m-top-20 color-grey text t-align-1024-c">
                    <p>
                        @if(isPost($product->code)) Código {{ $product->code }} | @endif<a href="javascript:void(0);" onclick="scrollPage('#description');" title="Ver descrição completa">Ver descrição completa</a>
                    </p>
                </div>
                <article class="w-100 m-top-30 d_flex wrap box-product column-1024 m-top-1024-20">
                    @if(!$images->isEmpty())
                    <section class="d_flex flex-1 w-1024-100">
                        <nav class="d_flex h-100">
                            <ul class="f-left slider-slick-4-vertical">
                                @foreach($images as $row)
                                <li class="f-left">
                                    <figure class="w-100 d_flex h-100">
                                        <a class="w-100 d_flex justify-center html5lightbox" data-group="product" href="{{ asset('uploads/product/'.$row->image) }}" title="{{ $row->label }}">
                                            <div class="self-center">
                                                <img class="f-left" src="{{ asset('uploads/product/'.$row->image) }}" title="{{ $row->label }}" alt="{{ $row->label }}" />
                                            </div>
                                        </a>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="flex-1 d_flex justify-center main-image-product">
                            <?php $first = $images->first(); ?>
                            <a class="w-100 h-100 d_flex justify-center html5lightbox" data-group="product" href="{{ asset('uploads/product/'.$first->image) }}" title="">
                                <figure class="d_flex self-center">
                                    <img class="f-left max-w-100 max-h-300-px" src="{{ asset('uploads/product/'.$first->image) }}" title="" alt="" />
                                </figure>
                            </a>
                        </div>
                    </section>
                    @endif
                    <aside class="flex-1 d_flex m-left-50-px w-1024-100 m-top-1024-40 t-align-1024-c">
                        <div class="flex-1 d_flex direction-column justify-center self-center">
                            <div class="w-100 info">
                                <?php $tag = $objProduct->getTagProduct($product->id, 1); ?>
                                @if(isset($tag->tag->name))
                                <strong>
                                    {{ $tag->tag->name }}
                                </strong>
                                @endif
                                <span>
                                    {{ $product->name }}
                                </span>
                                <div class="w-100 m-top-20 color-black text text-3">
                                    <p>
                                        {!! resume(strip_tags($product->description), 150) !!}
                                    </p>
                                </div>
                            </div>
                            <form class="m-top-30 d_flex direction-column w-1024-100" id="fProduct" method="post" action="">
                                @if(!$technicals->isEmpty())
                                <fieldset class="w-100">
                                    <select class="w-100">
                                        <option value="">
                                            Alguma especificação técnica
                                        </option>
                                        @foreach($technicals as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                                @endif
                                <fieldset class="w-100">
                                    <select class="w-100">
                                        <option value="">
                                            Selecione a Quantidade
                                        </option>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                        ?>
                                    </select>
                                </fieldset>
                                <fieldset class="w-100">
                                    <input class="w-100 pointer smooth" type="submit" id="send-product" value="ADICIONAR AO CARRINHO" />
                                </fieldset>
                            </form>
                        </div>
                    </aside>
                </article>
                <div class="w-100 m-top-80 d_flex wrap box-title m-top-1024-30" id="description">
                    <div class="flex-1">
                        <h2 class="f-left title">
                            Informações do Produto
                        </h2>
                    </div>
                </div>
                <div class="w-100 m-top-40 text m-top-1024-30 t-align-1024-c">
                    {!! $product->description !!}
                </div>
                @if(!$products->isEmpty())
                <div class="w-100 m-top-80 d_flex wrap box-title m-top-1024-30">
                    <div class="flex-1">
                        <h3 class="f-left title">
                            Produtos Relacionados
                        </h3>
                    </div>
                </div>
                <nav class="w-100 list-group-3 w-1024-100">
                    <ul class="w-100 d_flex wrap justify-center">
                        @foreach($products as $row)
                            @include('site.category._li_list')
                        @endforeach
                    </ul>
                </nav>
                @endif
            </div>
        </div>
    </section>
@endsection