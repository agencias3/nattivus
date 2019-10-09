@if(!$products->isEmpty())
    <div class="w-100 m-top-50 d_flex wrap box-title m-top-1024-30">
        <div class="flex-1">
            <h2 class="f-left title title-product w-600-100">
                Produtos relacionados
            </h2>
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