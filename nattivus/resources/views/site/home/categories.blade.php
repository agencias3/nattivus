@if(!$categories->isEmpty())
<h1 class="w-100 title">
    Brindes Personalizados - Categorias
</h1>
<div class="w-100 list-group justify-space d_flex wrap">
    <?php $cont = 0; ?>
    @foreach($categories as $row)
        <?php
            $cont++;
            if(isset($row->category->name)){
                $route = route('category.sub_category', ['category' => $row->category->seo_link, 'category_sub' => $row->seo_link]);
            }else{
                $route = route('category.show', $row->seo_link);
            }
        ?>
        @switch($cont)
            @case(1)
                @include('site.home.inc.category_1', ['color_1' => '#5b38a1', 'color_2' => '#f3f3f3'])
            @break
            @case(2)
                @include('site.home.inc.category_1', ['color_1' => '#273c75', 'color_2' => ''])
            @break
            @case(3)
                @include('site.home.inc.category_2', ['color_1' => '#ffe12d', 'color_2' => '#f3f3f3'])
            @break
            @case(4)
                @include('site.home.inc.category_1', ['color_1' => '#db7822', 'color_2' => ''])
            @break
            @case(5)
                <article class="flex-1 d_flex relative list-group-2">
                    <div class="flex-1 w-100 d_flex wrap justify-space">
                @include('site.home.inc.category_1', ['color_1' => '#65c22d', 'color_2' => ''])
            @break
            @case(6)
                @include('site.home.inc.category_1', ['color_1' => '#7f8fa6', 'color_2' => ''])
            @break
            @case(7)
                @include('site.home.inc.category_1', ['color_1' => '#0097e6', 'color_2' => ''])
            @break
            @case(8)
                @include('site.home.inc.category_1', ['color_1' => '#c32e17', 'color_2' => ''])
            @break
        @endswitch
            @if($cont >= 5 && $cont == count($categories))
                    </div>
                </article>
            @endif
    @endforeach
</div>
@endif