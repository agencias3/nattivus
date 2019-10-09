@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 p-top-60 p-bottom-60 top-page p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <h1 class="w-100 t-align-c color-white f-size-30 font-2 f-size-1024-20 f-size-600-18">
                Quem Somos
            </h1>
            @include('site.layouts.bread-crumbs')
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-100 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100 t-align-1024-c">
                <?php $page->show(1); ?>
                <h2 class="w-100 f-w-700 l-height-14 f-size-24 secondary-color font-2 f-size-1024-20 f-size-600-18">
                    {{ session()->get('page')[1]['name'] }}
                </h2>
                <div class="w-100 m-top-25 t-align-1024-c">
                    <span class="display-inline-block w-60-px h-3-px main-bg-1 f-1024-n"></span>
                </div>
                <div class="w-100 m-top-25 color-black text text-3 m-top-1024-20">
                    {!! session()->get('page')[1]['description'] !!}
                </div>
                <div class="w-100 p-top-70 p-bottom-70 p-left-5 p-right-5 m-top-60 t-align-c secondary-bg-1 p-top-1024-30 p-bottom-1024-30 m-top-1024-30">
                    <?php $page->show(2); ?>
                    <h3 class="w-100 f-w-600 l-height-14 f-size-35 secondary-color font-2 f-size-1024-20 f-size-600-18">
                        {{ session()->get('page')[2]['name'] }}
                    </h3>
                    <div class="w-60 m-top-15 m-left-20 color-black text text-3 w-1024-100 m-top-1024-20">
                        {!! session()->get('page')[2]['description'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 bg-white-1">
        <div class="center">
            <article class="w-95 f-right d_flex wrap w-1024-100">
                <section class="flex-1 m-right-10 self-center p-top-1024-30 w-1024-100 p-bottom-1024-0 t-align-1024-c">
                    <h4 class="w-100 f-w-600 l-height-14 f-size-35 secondary-color font-2 f-size-1024-20 f-size-600-18">
                        <?php $page->show(3); ?>
                        {{ session()->get('page')[3]['name'] }}
                    </h4>
                    <div class="w-100 m-top-15 color-black text text-3">
                        {!! session()->get('page')[3]['description'] !!}
                    </div>
                </section>
                @if(isPost(session()->get('page')[3]['image']))
                <aside class="flex-1 m-left-10 main-image w-1024-100 m-top-1024-20">
                    <figure class="w-100">
                        <img class="w-100" src="{{ asset('uploads/page/'.session()->get('page')[3]['image']) }}" title="{{ session()->get('page')[3]['name'] }}" alt="{{ session()->get('page')[3]['name'] }}" />
                    </figure>
                </aside>
                @endif
            </article>
        </div>
    </section>
    <section class="w-100 p-top-100 p-bottom-80 p-top-1024-80 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <div class="w-100 t-align-1024-c">
                    <span class="display-inline-block w-60-px h-3-px secondary-bg-1 f-1024-n"></span>
                </div>
                <h5 class="w-100 m-top-15 f-w-600 l-height-14 f-size-35 secondary-color font-2 t-align-1024-c f-size-1024-20 f-size-600-18">
                    <?php $page->show(4); ?>
                    {{ session()->get('page')[4]['name'] }}
                </h5>
                <?php $items = $page->items(4); ?>
                @if(!$items->isEmpty())
                <ul class="w-100 m-top-10 d_flex wrap justify-center list-group-7 column-800 m-top-1024-0">
                    @foreach($items as $row)
                    <li class="flex-1">
                        <span class="w-100">
                            {{ $row->name }}
                        </span>
                        <div class="w-100 m-top-15 text text-3">
                            {!! $row->description !!}
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
                @if(!$teams->isEmpty())
                <span class="w-100 h-3-px m-top-60 bg-white-1 m-top-1024-30"></span>
                <div class="w-100 m-top-60 t-align-c m-top-1024-30">
                    <span class="w-100 secondary-color f-size-16">
                        CONHEÇA-NOS
                    </span>
                    <h6 class="w-100 m-top-10 f-w-600 l-height-14 f-size-35 secondary-color font-2 f-size-1024-20 f-size-600-18">
                        Nossa Equipe
                    </h6>
                </div>
                <nav class="w-100 m-top-50 m-top-1024-30">
                    <ul class="w-100 slider-slick-3 list-group-8">
                        @foreach($teams as $row)
                        <li class="f-left">
                            <figure class="w-100 relative">
                                @if(isPost($row->image))
                                <img class="w-100 relative" src="{{ asset('uploads/team/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                                @endif
                                <div class="w-100 h-100 absolute top-0 left-0">
                                    <div class="w-100 h-100 display-table">
                                        <div class="inline">
                                            <div class="w-100 t-align-c">
                                                <strong class="w-100">
                                                    {{ $row->name }}
                                                </strong>
                                                @if(isPost($row->office))
                                                <b class="w-100">{{ $row->office }}</b>
                                                <i class="display-inline-block"></i>
                                                @endif
                                                @if(isPost($row->email))
                                                <span class="w-100">
                                                    <a href="mailto:{{ $row->email }}" title="{{ $row->email }}">
                                                        {{ $row->email }}
                                                    </a>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <span class="w-100 d_flex justify-center">
                                <b class="self-center">
                                    {{ $row->name }}
                                </b>
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </nav>
                @endif
                <?php $page->show(5); ?>
                @if(isPost(session()->get('page')[5]['image']))
                <figure class="w-100 m-top-100 m-top-1024-30">
                    <img class="w-100 relative" src="{{ asset('uploads/page/'.session()->get('page')[5]['image']) }}" title="{{ session()->get('page')[5]['name'] }}" alt="{{ session()->get('page')[5]['name'] }}" />
                </figure>
                @endif
                <div class="w-100 m-top-60 t-align-c m-top-1024-30">
                    <span class="w-100 secondary-color f-size-16">
                        {{ session()->get('page')[5]['name'] }}
                    </span>
                    <h6 class="w-100 m-top-10 f-w-600 l-height-14 f-size-35 secondary-color font-2 f-size-1024-20 f-size-600-18">
                        Junte-se ao nosso time!
                    </h6>
                    <div class="w-80 m-left-10 m-top-30 text text-3 w-1024-100 m-top-1024-20">
                        {!! session()->get('page')[5]['description'] !!}
                    </div>
                    <div class="w-100 m-top-30 t-align-c m-top-1024-20">
                        <a class="display-inline-block secondary-bg-1 see-more-page smooth" href="{{ route('work') }}" title="DEIXE O SEU CURRÍCULO">
                            DEIXE O SEU CURRÍCULO
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection