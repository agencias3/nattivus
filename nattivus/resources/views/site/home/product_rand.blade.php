@inject("objProduct", "\AgenciaS3\Http\Controllers\Site\ProductController")
<?php $products = $objProduct->getProductRand(4); ?>
@if(!$products->isEmpty())
<section class="w-100 p-top-60 p-bottom-80 p-top-1024-10 p-bottom-1024-30">
    <div class="center">
        <div class="w-80 m-left-10 d_flex wrap justify-center list-group-6 w-1024-100 m-top-1024-0">
            @foreach($products as $row)
            <?php
                $cover = '';
                $image = $row->images->firstWhere('cover', 'y');
                if(isPost($image)){
                    $cover = asset('uploads/product/'.$image->image);
                }
            ?>
            <div class="flex-1 item w-1024-100">
                <a class="d_flex secondary-bg-1" href="{{ route('product', $row->seo_link) }}" title="{{ $row->name }}">
                    @if($cover)
                    <section class="d_flex flex-1 justify-center self-center">
                        <figure class="self-center">
                            <img class="max-w-100" src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                        </figure>
                    </section>
                    @endif
                    <aside class="flex-1 self-center">
                        <span class="w-100 f-size-1024-16">
                            {{ $row->name }}<br />
                            @if(isPost($row->description))
                            {{ resume(strip_tags($row->description), 30) }}...
                            @endif
                        </span>
                        <div class="w-100 m-top-20">
                            <span class="d_flex justify-center see-more">
                                <b class="self-center">
                                    Saiba mais
                                </b>
                                <i class="self-center">
                                    ￫
                                </i>
                            </span>
                        </div>
                    </aside>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif