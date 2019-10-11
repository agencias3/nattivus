<?php
$route = route('product', $row->seo_link);
$cover = '';
$image = $row->images->firstWhere('cover', 'y');
if(isPost($image)){
    $cover = asset('uploads/product/'.$image->image);
}
$tag = $objProduct->getTagProduct($row->id, 1);
?>
<li class="d_flex flex-1">
    <a class="d_flex direction-column" href="{{ $route }}" title="{{ $row->name }}">
        <article class="w-100">
            @if(isset($tag->tag->name))
            <b class="type-2 type-1">
                {{ $tag->tag->name }}
            </b>
            @endif
            <div class="w-100">
                <p class="w-100">
                    @if(isset($row->category->name))
                    {{ $row->category->name }}
                    @endif
                </p>
                <span class="w-100">
                    {{ $row->name }}
                </span>
            </div>
        </article>
        @if(isPost($cover))
            <figure class="w-100 h-200-px m-top-10 d_flex justify-center t-align-c">
                <div class="self-center">
                    <img class="display-inline-block max-w-100 max-h-180-px" src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                </div>
            </figure>
        @endif
        <div class="w-100 m-top-10 text text-2">
            <p>
                {!! resume(strip_tags($row->description), 150) !!}
            </p>
        </div>
    </a>
    <a class="w-100 absolute z-index-4 left-0 bottom-0 main-bg-1 opacity-0 add-cart btnAddProduct" data-id="{{ $row->id }}" href="javascript:void(0);" title="ADICIONAR AO CARRINHO">
        ADICIONAR AO CARRINHO
    </a>
</li>