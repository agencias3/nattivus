@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 p-top-60 p-bottom-60 top-page p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <h1 class="w-100 t-align-c color-white f-size-30 font-2 f-size-1024-20 f-size-600-18">
                Catálogo
            </h1>
            @include('site.layouts.bread-crumbs')
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-100 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100 t-align-1024-c">
                <?php $page->show(9); ?>
                <h2 class="w-100 f-w-700 l-height-14 f-size-24 secondary-color font-2 f-size-1024-20 f-size-600-18">
                    {{ session()->get('page')[9]['name'] }}
                </h2>
                <div class="w-100 m-top-25 t-align-1024-c">
                    <span class="display-inline-block w-60-px h-3-px main-bg-1 f-1024-n"></span>
                </div>
                <div class="w-100 m-top-25 color-black text text-3 m-top-1024-20">
                    {!! session()->get('page')[9]['description'] !!}
                </div>
            </div>
            <div class="w-100 m-top-50 d_flex wrap justify-center list-group-5 m-top-1024-0">
                @if($catalogs->isEmpty())
                    <div class="w-100 m-top-30 m-bottom-30 t-align-c f-size-20" data-scroll-reveal="enter bottom move 50px">
                        Nenhum catálogo encontrado!
                    </div>
                @else
                    @foreach($catalogs as $row)
                        <div class="flex-1 item">
                            <a class="w-100 html5lightbox" data-group="group" href="{{ asset('uploads/catalog/'.$row->file) }}" target="_blank" title="{{ $row->name }}">
                                @if(isPost($row->image))
                                    <figure class="w-100">
                                        <img class="w-100" src="{{ asset('uploads/catalog/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                                    </figure>
                                @endif
                            </a>
                        </div>
                    @endforeach
                    @if(!$catalogs->isEmpty())
                        {!! $catalogs->links() !!}
                    @endif
                @endif
            </div>
        </div>
    </section>
@endsection