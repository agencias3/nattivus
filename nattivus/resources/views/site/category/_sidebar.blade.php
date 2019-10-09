@inject("objCategory","\AgenciaS3\Http\Controllers\Site\CategoryController")
<section class="f-left c-left m-top-25 bg-white sidebar relative z-index-2 w-1024-100 order-1024-2">
    <div class="w-100">
        <span class="w-100 m-bottom-20 main-color f-w-800 f-size-18 font-2">
            Todos os Produtos
        </span>
        <?php $categories = $objCategory->getActives(); ?>
        @if(!$categories->isEmpty())
            @foreach($categories as $row)
            <?php $subCategories = $objCategory->getSubActives($row->id); ?>
        <nav>
            <span>
                {{ $row->name }}
            </span>
            @if(!$subCategories->isEmpty())
            <ul>
                @foreach($subCategories as $sub)
                <li>
                    <a href="{{ route('category.sub_category', ['category'=> $sub->category->seo_link, 'seo_link' => $sub->seo_link]) }}" title="{{ $sub->name }}">
                        <i></i>
                        <p>
                            {{ $sub->name }}
                        </p>
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </nav>
            @endforeach
        @endif
    </div>
</section>