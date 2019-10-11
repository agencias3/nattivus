@inject("technicalSpecification", "\AgenciaS3\Http\Controllers\Site\TechnicalSpecificationController")
@foreach($products as $key => $row)
    @foreach($row as $product)
        <li class="d_flex column-800">
            <section class="d_flex self-center">
                <?php
                $cover = '';
                $images = $product['item']['images'];
                if($images){
                    foreach($images as $image){
                        if($image->cover == 'y'){
                            $cover = asset('uploads/product/'.$image->image);
                        }
                    }
                }
                ?>
                @if(isPost($cover))
                    <a class="flex-1 h-100-px d_flex justify-center t-align-c border-grey" href="{{ route('product', $product['item']['seo_link']) }}" title="{{ $product['item']['name'] }}">
                        <figure class="self-center">
                            <img class="display-inline-block max-w-100 max-h-75-px" src="{{ $cover }}" title="{{ $product['item']['name'] }}" alt="{{ $product['item']['name'] }}" />
                        </figure>
                    </a>
                @endif
                <div class="m-left-30-px flex-1 d_flex h-100 self-center direction-column m-left-800-20-px">
                    <strong>
                        {{ $product['item']['name'] }}
                    </strong>
                    @if(isPost($product['item']['description']))
                        <span>
                            {!! resume($product['item']['description'], 150) !!}
                            @if(isset($product['technical_id']))
                                <p>
                                    <strong class="f-size-12">Especificação Técnica:</strong> {{ $technicalSpecification->show($product['technical_id'])->name  }}
                                </p>
                            @endif
                        </span>
                    @endif
                </div>
            </section>
            <aside class="d_flex c-left flex-1 justify-center self-center">
                <div class="box-qtd">
                    <a class="d_flex justify-center self-center removeItem" href="javascript:void(0);" data-id="{{ $key }}" title="Remover">
                        <img class="self-center" src="{{ asset('assets/site/images/icons/remove.png') }}" title="" alt="" />
                    </a>
                    <input type="text" data-stock="99" id="qtd-{{ $key }}" readonly name="quantity" value="{{ $product['qty'] }}" />
                    <div class="buttons d_flex direction-column">
                        <a class="d_flex justify-center self-center add" href="javascript:void(0);" data-id="{{ $key }}" onclick="actionProduct($(this))" title="+">
                            <img class="self-center" src="{{ asset('assets/site/images/icons/up.png') }}" title="" alt="" />
                        </a>
                        <a class="d_flex justify-center self-center c-both subtract" href="javascript:void(0);" data-id="{{ $key }}" onclick="actionProduct($(this))" title="-">
                            <img class="self-center" src="{{ asset('assets/site/images/icons/down-2.png') }}" title="" alt="" />
                        </a>
                    </div>
                </div>
            </aside>
        </li>
    @endforeach
@endforeach