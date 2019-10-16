@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 p-top-30 p-bottom-80 relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <nav class="w-100 bread-crumbs d_flex wrap">
                    @include('site.layouts.bread-crumbs', ['class' => 'flex-1 wrap d_flex'])
                </nav>
                <figure class="w-100 m-top-50 m-top-1024-30">
                    <img class="w-100" src="{{ asset('uploads/banner/banner-cases.jpg') }}" title="" alt="" />
                </figure>
                @if(!$tags->isEmpty())
                <nav class="w-100 m-top-50 menu-category-3 menu-case d_flex wrap m-top-1024-20">
                    <ul class="flex-1 wrap d_flex w-1024-100 justify-1024-center">
                        @foreach($tags as $row)
                        <li @if(isset($tag) && $tag->seo_link == $row->seo_link) class="active" @endif>
                            <a href="{{ route('blog.tag', $row->seo_link) }}" title="{{ $row->name }}">
                                {{ $row->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!--div class="flex-1 self-center buttons d_flex w-1024-100 justify-1024-center">
                        <a class="prev-category disabled" href="javascript:void(0);"></a>
                        <a class="next-category" href="javascript:void(0);"></a>
                    </div-->
                </nav>
                @endif
                <div class="f-left m-top-10 d_flex wrap justify-center list-group-9 m-top-1024-0">
                    @if(isPost($search))
                        <div class="w-100 t-align-c f-size-20 m-top-30 m-bottom-30 color-black" data-scroll-reveal="enter bottom move 80px">
                            Foram encontrado(s) "<strong class="f-w-600 color-black">{{ $posts->count() }}</strong>" resultados pelo termo "<strong class="f-w-600 color-black-2">{{ $search }}</strong>".
                        </div>
                    @endif
                    @if($posts->isEmpty())
                        <div class="w-100 m-top-30 m-bottom-30 t-align-c f-size-20" data-scroll-reveal="enter bottom move 50px">
                            Nenhum post encontrado!
                        </div>
                    @else
                        <?php
                        $cont = 0;
                        $cont2 = 0;
                        $total = $posts->count();
                        $contSpan = 0;
                        ?>
                        @foreach($posts as $row)
                            @include('site.blog._li_list')
                        @endforeach
                        @if(!$posts->isEmpty())
                            {!! $posts->links() !!}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection