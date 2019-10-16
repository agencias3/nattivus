@inject("objProduct", "\AgenciaS3\Http\Controllers\Site\ProductController")
<?php $productsRand = $objProduct->getProductCategoryRand($category->id, 3); ?>
@if(!$productsRand->isEmpty())
<nav class="w-100 p-top-25 p-bottom-25 max-w-100 box-Spotlight">
    <ul class="w-100 max-w-100 slider-slick-spotlight">
        <?php $cont = 0; ?>
        @foreach($productsRand as $row)
        <?php
            $cont++;
            switch ($cont) {
                case 1:
                    $color_1 = '#5b38a1';
                    $color_2 = '#ffffff';
                    break;
                case 2:
                    $color_1 = '#273c75';
                    $color_2 = '';
                    break;
            }

            if ($cont == 2) {
                $cont = 0;
            }

            $cover = '';
            $image = $row->images->firstWhere('cover', 'y');
            if(isPost($image)){
                $cover = asset('uploads/product/'.$image->image);
            }

            $tag = $objProduct->getTagProduct($row->id, 1);
        ?>
        <li class="f-left" style="background-color: <?php echo $color_1; ?>">
            <a class="w-100 overflow-h d_flex column-800" href="{{ route('product', $row->seo_link) }}" title="{{ $row->name }}">
                @if(isPost($cover))
                <section class="d_flex flex-1 min-h-100 relative z-index-1 justify-center w-800-100" style="background-color: <?php echo $color_2; ?>">
                    <figure class="self-center">
                        <img class="max-w-100" src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                    </figure>
                    <div class="absolute bottom-0 left-100 h-100 marker-product display-800-none" style="background-color: <?php echo $color_1; ?>"></div>
                </section>
                @endif
                <aside class="flex-1 d_flex p-top-30 p-bottom-30 justify-center self-center relative z-index-2 w-800-100">
                    <div class="f-left info t-align-l t-align-800-c">
                        @if(isset($tag->tag->name))
                        <strong>
                            {{ $tag->tag->name }}
                        </strong>
                        @endif
                        <span>
                            {{ $row->name }}
                        </span>
                        <div class="w-100 m-top-10 color-white text">
                            <p>
                                {{ resume(strip_tags($row->description), 50) }}...
                            </p>
                        </div>
                        <div class="w-100 m-top-10 justify-800-center d_flex">
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
        @endforeach
    </ul>
</nav>
@endif