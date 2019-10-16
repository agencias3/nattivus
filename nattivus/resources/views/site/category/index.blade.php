@extends('site.layouts.app')
@section('content')
<section class="w-100 relative z-index-2 p-bottom-80 p-bottom-1024-30">
    <div class="center">
        <article class="w-100 d_flex wrap">
            @include('site.category._sidebar')
            <aside class="flex-1 aside-product relative z-index-1 w-1024-100">
                <div class="w-100 m-top-50 d_flex wrap box-title m-top-1024-30">
                    <div class="flex-1">
                        <h2 class="f-left title title-product w-600-100">
                            Produtos
                        </h2>
                        <!--
                        <div class="f-right d_flex relative box-select w-600-100 m-top-600-30 none">
                            <b class="flex-1">
                                Mais Vendidos
                            </b>
                            <i></i>
                            <select class="w-100 absolute top-0 left-0 opacity-0">
                                <option>
                                    Mais Vendidos
                                </option>
                                <option>
                                    Mais Vendidos 01
                                </option>
                                <option>
                                    Mais Vendidos 02
                                </option>
                                <option>
                                    Mais Vendidos 03
                                </option>
                            </select>
                        </div>
                        -->
                    </div>
                </div>
                <nav class="w-100 list-group-3 list-group-3-internal w-1024-100">
                    @if($products->isEmpty())
                        <div class="w-100 m-top-30 m-bottom-30 t-align-c f-size-20" data-scroll-reveal="enter bottom move 50px">
                            Nenhum produto nesta categoria!
                        </div>
                    @else
                        @inject("objProduct","\AgenciaS3\Http\Controllers\Site\ProductController")
                    <ul class="w-100 d_flex wrap justify-center">
                        @foreach($products as $row)
                            @include('site.category._li_list')
                        @endforeach
                    </ul>
                    @endif
                    @if(!$products->isEmpty())
                        {!! $products->links() !!}
                    @endif
                </nav>
            </aside>

        </article>
    </div>
</section>
@endsection