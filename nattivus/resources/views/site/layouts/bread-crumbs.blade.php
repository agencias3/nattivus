<?php $ativo = Route::getCurrentRoute()->uri(); ?>
<ul class="@if(isset($class)){{ $class }}@else w-100 m-top-10 c-left d_flex wrap justify-center bread-crumbs-2 @endif">
    <li>
        <a href="{{ route('home') }}" title="Home">
            Home
        </a>
    </li>
    <li>
        •
    </li>
    @if($ativo == 'quem-somos')
        <li>
            <a href="{{ route('about') }}" title="Quem Somos">
                Quem Somos
            </a>
        </li>
    @endif
    @if($ativo == 'contato')
    <li>
        <a href="{{ route('contact') }}" title="Contato">
            Contato
        </a>
    </li>
    @endif
    @if($ativo == 'cases' || $ativo == 'cases/tag/{tag}' || $ativo == 'cases/{seo_link}')
        <li>
            <a href="{{ route('blog') }}" title="Cases">
                Cases
            </a>
        </li>
        @if($ativo == 'cases/tag/{tag}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.tag', $tag->seo_link) }}" title="{{ $tag->name }}">
                    {{ $tag->name }}
                </a>
            </li>
        @endif
        @if($ativo == 'cases/{seo_link}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.show', $post->seo_link) }}" title="{{ $post->name }}">
                    {{ $post->name }}
                </a>
            </li>
        @endif
    @endif
    @if($ativo == 'produto/{seo_link}')
        <li>
            <a href="{{ route('product', $product->seo_link) }}" title="Produtos">
                Produtos
            </a>
        </li>
        @if(isset($categoryFeatured->category->category->name))
            <li>
                •
            </li>
            <li>
                <a href="{{ route('category.show', $categoryFeatured->category->category->seo_link) }}" title="{{ $categoryFeatured->category->category->name }}">
                    {{ $categoryFeatured->category->category->name }}
                </a>
            </li>
            @if(isset($categoryFeatured->category->name))
            <li>
                •
            </li>
            <li>
                <a href="{{ route('category.sub_category', ['category' => $categoryFeatured->category->category->seo_link, 'seo_link' => $categoryFeatured->category->seo_link]) }}" title="{{ $categoryFeatured->category->name }}">
                    {{ $categoryFeatured->category->name }}
                </a>
            </li>
            @endif
        @else
            @if(isset($categoryFeatured->category->name))
                <li>
                    •
                </li>
                <li>
                    <a href="{{ route('category.show', $categoryFeatured->category->seo_link) }}" title="{{ $categoryFeatured->category->name }}">
                        {{ $categoryFeatured->category->name }}
                    </a>
                </li>
            @endif
        @endif
        <li>
            •
        </li>
        <li class="active">
            <a href="{{ route('product', $product->seo_link) }}" title="{{ $product->name }}">
                {{ $product->name }}
            </a>
        </li>
    @endif
</ul>