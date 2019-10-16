@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 p-top-30 p-bottom-80 relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <div class="w-90 m-left-5 w-1024-100">
                <nav class="w-100 bread-crumbs d_flex wrap">
                    @include('site.layouts.bread-crumbs', ['class' => 'flex-1 wrap d_flex'])
                </nav>
                <h1 class="w-100 m-top-50 f-w-700 l-height-14 f-size-24 secondary-color font-2 m-top-1024-30 f-size-1024-20 f-size-600-18">
                    {{ $post->name }}
                </h1>
                <div class="w-100 m-top-25 t-align-1024-c">
                    <span class="display-inline-block w-60-px h-3-px main-bg-1 f-1024-n"></span>
                </div>
                @if(!$images->isEmpty())
                <div class="w-100 m-top-25 m-top-1024-20">
                    <ul class="w-80 m-left-10 b-radius-20 overflow-h gallery slider-slick-1 w-1024-100">
                        @foreach($images as $row)
                            <li class="f-left">
                                <figure class="d_flex justify-center">
                                    <a class="max-w-100 b-radius-20 overflow-h html5lightbox" data-group="images" href="{{ asset('uploads/post/'.$row->image) }}">
                                        <img class="max-w-100 max-h-450-px relative z-index-1" src="{{ asset('uploads/post/'.$row->image) }}" title="{{ $row->label }}" alt="{{ $row->label }}" />
                                    </a>
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="w-100 m-top-25 color-black text text-3 m-top-1024-20">
                   {!! $post->description !!}
                </div>
            </div>
            @include('site.blog.products')
        </div>
    </section>
@endsection