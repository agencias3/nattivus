@if(is_array($banners) || isPost($mobile))
<div class="w-100 relative">
    @if(is_array($banners))
    <article class="w-100 display-1024-none overflow-h relative z-index-1 cycle-slideshow" id="slideshow" data-cycle-speed="2000" data-cycle-fx="fade" data-cycle-pager=".pager-banner" data-cycle-next=".next-banner" data-cycle-prev=".prev-banner" data-cycle-timeout="5000">
        @foreach($banners as $row)
        <figure class="w-100">
            <a class="w-100" href="@if(isPost($row->link_url)){{ $row->link_url }}@else javascript:void(0); @endif" title="{{ $row->name }}">
                <img class="w-100" src="{{ asset('uploads/banner/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
            </a>
        </figure>
        @endforeach
    </article>
    <div class="w-100 h-0 absolute z-index-2 bottom-0 left-0 display-1024-none m-bottom-1024-20">
        <div class="relative t-align-c">
            <div class="display-inline-block pager-banner m-top-60-neg">
            </div>
        </div>
    </div>
    @endif
    @if(isPost($mobile))
    <figure class="w-100 display-none display-1024-block">
        <a class="w-100" href="@if(isPost($mobile->link_url)){{ $mobile->link_url }}@else javascript:void(0); @endif" title="{{ $mobile->name }}">
            <img class="w-100" src="{{ asset('uploads/banner-mobile/'.$mobile->image) }}" title="{{ $mobile->name }}" alt="{{ $mobile->name }}" />
        </a>
    </figure>
    @endif
</div>
@endif