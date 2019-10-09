@extends('site.layouts.app')
@section('content')
<section class="w-100 relative z-index-2 p-bottom-80 p-bottom-1024-30">
    <div class="center">
        <article class="w-100 d_flex wrap">
            @include('site.category._sidebar')
            <aside class="flex-1 aside-product relative z-index-1 w-1024-100">
                <nav class="w-100 p-top-25 p-bottom-25 max-w-100 box-Spotlight">
                    <ul class="w-100 max-w-100 slider-slick-spotlight">
                        <?php
                        $color_1 = '#5b38a1';
                        $color_2 = '#ffffff';
                        ?>
                        <li class="f-left" style="background-color: <?php echo $color_1; ?>">
                            <a class="w-100 overflow-h d_flex column-800" href="" title="">
                                <section class="d_flex flex-1 relative z-index-1 justify-center self-center w-800-100" style="background-color: <?php echo $color_2; ?>">
                                    <figure class="self-center">
                                        <img class="max-w-100" src="uploads/product/prod-1.png" title="" alt="" />
                                    </figure>
                                    <div class="absolute bottom-0 left-100 h-100 marker-product display-800-none" style="background-color: <?php echo $color_1; ?>"></div>
                                </section>
                                <aside class="flex-1 d_flex justify-center self-center relative z-index-2 w-800-100">
                                    <div class="f-left info t-align-l t-align-800-c">
                                        <strong>
                                            MAIS VENDIDOS
                                        </strong>
                                        <span>
                                                Squeezes
                                            </span>
                                        <div class="w-100 m-top-20 color-white text">
                                            <p>
                                                Sua marca presente no dia a dia das pessoas! Personalize agora
                                            </p>
                                        </div>
                                        <div class="w-100 m-top-20 justify-800-center d_flex">
                                                <span class="d_flex justify-center see-more">
                                                    <b class="self-center">
                                                        Detalhes
                                                    </b>
                                                    <i class="self-center">
                                                        &#65515;
                                                    </i>
                                                </span>
                                        </div>
                                    </div>
                                </aside>
                            </a>
                        </li>
                        <?php
                        $color_1 = '#273c75';
                        $color_2 = '';
                        ?>
                        <li class="f-left" style="background-color: <?php echo $color_1; ?>">
                            <a class="w-100 overflow-h d_flex column-800" href="" title="">
                                <section class="d_flex flex-1 relative z-index-1 justify-center self-center w-800-100" style="background-color: <?php echo $color_2; ?>">
                                    <figure class="self-center">
                                        <img class="max-w-100" src="uploads/product/prod-1.png" title="" alt="" />
                                    </figure>
                                    <div class="absolute bottom-0 left-100 h-100 marker-product display-800-none" style="background-color: <?php echo $color_1; ?>"></div>
                                </section>
                                <aside class="flex-1 d_flex justify-center self-center relative z-index-2 w-800-100" style="background-color: <?php echo $color_1; ?>">
                                    <div class="f-left info t-align-l t-align-800-c">
                                        <strong>
                                            MAIS VENDIDOS
                                        </strong>
                                        <span>
                                                Squeezes
                                            </span>
                                        <div class="w-100 m-top-20 color-white text">
                                            <p>
                                                Sua marca presente no dia a dia das pessoas! Personalize agora
                                            </p>
                                        </div>
                                        <div class="w-100 m-top-20 justify-800-center d_flex">
                                            <span class="d_flex justify-center see-more">
                                                <b class="self-center">
                                                    Detalhes
                                                </b>
                                                <i class="self-center">
                                                    &#65515;
                                                </i>
                                            </span>
                                        </div>
                                    </div>
                                </aside>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="w-100 m-top-50 d_flex wrap box-title m-top-1024-30">
                    <div class="flex-1">
                        <h2 class="f-left title title-product w-600-100">
                            <?php
                            if(isset($category->category->name)){
                                echo $category->category->name.' > '.$category->name;
                            }else{
                                echo $category->name;
                            }
                            ?>
                        </h2>
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