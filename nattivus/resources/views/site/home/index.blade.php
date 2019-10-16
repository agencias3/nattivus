@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    @include('site.home.banner')
    <section class="w-100 p-top-80 relative z-index-2 p-top-1024-30">
        <div class="center">
            @include('site.home.categories')
            <?php
            $color_1 = '#c32e17';
            $color_2 = '';
            ?>
            @if(!$tagProducts->isEmpty())
            <nav class="w-100 m-top-80 menu-category-3 d_flex wrap m-top-1024-30">
                <ul class="flex-1 wrap d_flex w-1024-100 justify-1024-center">
                    <?php $cont = 0; ?>
                    @foreach($tagProducts as $row)
                        <?php $cont ++; ?>
                    <li @if($cont == 1) class="active" @endif>
                        <a href="javascript:void(0);" onclick="filterCategory($(this));" title="{{ $row->name }}">
                            {{ $row->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="flex-1 buttons d_flex w-1024-100 justify-1024-center">
                    <a class="prev-category self-center disabled" onclick="$('.menu-category-3 li.active').prev().children('a').click();" href="javascript:void(0);"></a>
                    <a class="next-category self-center" onclick="$('.menu-category-3 li.active').next().children('a').click();" href="javascript:void(0);"></a>
                </div>
            </nav>
			@inject("objProduct","\AgenciaS3\Http\Controllers\Site\ProductController")
			
			<?php $cont = 0; ?>
			@foreach($tagProducts as $row)
				<?php $productTags = $objProduct->getProductTag($row->id, 4); ?>
				<?php $cont ++; ?>
				@if(isset($productTags))
				<nav class="w-100 list-group-3 @if($cont > 1) display-none @endif w-1024-100">
                    <ul class="w-100 d_flex wrap justify-center">
                        @foreach($productTags as $row)
                            @include('site.category._li_list', ['row' => $row->product])
                        @endforeach
                    </ul>
				</nav>
				@endif
			@endforeach
            @endif
            @include('site.home.case')
        </div>
    </section>
    @include('site.home.catalog')
    @include('site.home.product_rand')
@endsection