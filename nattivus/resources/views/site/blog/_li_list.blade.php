<?php
$route = route('blog.show', ['seo_link' => $row->seo_link]);
$cover = '';
$image = $row->images->firstWhere('cover', 'y');
if(isPost($image)){
    $cover = asset('uploads/post/'.$image->image);
}
?>
<div class="d_flex flex-1 item">
    <a class="flex-1 d_flex direction-column" href="{{ $route }}" title="{{ $row->name }}">
        @if(isPost($cover))
        <section class="w-100 d_flex justify-center">
            <figure class="self-center">
                <img class="max-w-100" src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
            </figure>
        </section>
        @endif
        <article class="w-100 m-top-25">
            <strong>
                {{ mysql_to_data($row->date) }}
            </strong>
            <span class="w-100 m-top-5">
                {{ $row->name }}
            </span>
        </article>
        <aside class="d_flex m-top-15 flex-1 justify-center self-center">
            <div class="w-100 color-black text">
                <p>
                    {!! resume(strip_tags($row->description), 150) !!}
                </p>
            </div>
        </aside>
    </a>
</div>