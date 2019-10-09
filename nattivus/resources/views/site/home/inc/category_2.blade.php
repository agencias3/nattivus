<div class="flex-1 relative item" style="background-color: {{ $color_1 }};">
    <a class="d_flex flex-1" href="{{ $route }}" title="{{ $row->name }}">
        @if(isPost($row->image))
        <section class="d_flex flex-1 justify-center self-center" style="background-color: {{ $color_2 }};">
            <figure class="self-center">
                <img src="{{ asset('uploads/category/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
            </figure>
        </section>
        @endif
        <aside class="flex-1 d_flex self-center direction-column">
            <span>
                {{ $row->name }}
            </span>
            <div class="w-100 m-top-20 color-black text">
                <p>
                    {!! resume(strip_tags($row->description), 200) !!}
                </p>
            </div>
            <div class="w-100 m-top-20">
                <span class="d_flex justify-center see-more">
                    <b class="self-center">
                        Saiba mais
                    </b>
                    <i class="self-center">
                        &#65515;
                    </i>
                </span>
            </div>
        </aside>
    </a>
</div>