@if(!$catalogs->isEmpty())
<section class="w-100 p-top-80 content p-top-1024-30 m-top-1024-0">
    <div class="w-100 p-top-80 relative z-index-2 p-top-1024-0">
        <div class="center">
            <h3 class="w-100 t-align-c f-w-700 color-black f-size-30 font-2 f-size-1024-20">
                <?php $page->show(9); ?>
                {!! session()->get('page')[9]['name'] !!}
            </h3>
            <div class="w-80 m-top-50 m-left-10 w-1024-100 m-top-1024-20">
                <div class="w-100 t-align-c color-black text">
                    {!! session()->get('page')[9]['description'] !!}
                </div>
                <div class="w-100 m-top-20 d_flex wrap justify-center list-group-5 m-top-1024-0">
                    @foreach($catalogs as $row)
                    <div class="flex-1 item">
                        <a class="w-100" href="{{ asset('uploads/catalog/'.$row->file) }}" target="_blank" title="{{ $row->name }}">
                            @if(isPost($row->image))
                            <figure class="w-100">
                                <img class="w-100" src="{{ asset('uploads/catalog/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                            </figure>
                            @endif
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif