@if(!$posts->isEmpty())
<div class="w-90 m-top-30 m-left-5 m-top-80 d_flex wrap box-title w-1024-100 m-top-1024-30">
    <div class="flex-1">
        <h2 class="f-left title">
            Cases
        </h2>
    </div>
    <div class="flex-1 self-center buttons buttons-case">
        <a class="prev-category disabled" onclick="altCase($(this))" href="javascript:void(0);"></a>
        <a class="next-category" onclick="altCase($(this))" href="javascript:void(0);"></a>
    </div>
</div>
<div class="w-100">
<?php
	$i = 0;
	$i2 = 0;
	$i3 = 0;
	$total = count($posts);
?>
@foreach($posts as $row)
<?php
	$i++;
	$i2++;
?>
@if($i == 1)
<?php
	$i3++;
?>
<article class="w-100 box-case-home @if($i2 > 1) display-none @else opened @endif" data-id="{{$i3}}">
	<div class="w-90 m-top-30 m-left-5 d_flex relative w-1024-100 column-1024">
		<section class="flex-1 d_flex wrap bg-white w-1024-100">
			<div class="w-100 d_flex self-center list-group-4 direction-column">
@endif
					<?php
					$cover = '';
					$image = $row->images->firstWhere('cover', 'y');
					if(isPost($image)){
						$cover = asset('uploads/post/'.$image->image);
					}
					?>
				<div class="flex-1 item">
					<a class="d_flex" href="{{ route('blog.show', $row->seo_link) }}" title="{{ $row->name }}">
						@if(isPost($cover))
						<figure class="flex-1 self-center">
							<img class="max-w-100" src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
						</figure>
						@endif
						<div class="flex-1">
							<article class="w-100">
								<p class="w-100">
									CARREGADORES
								</p>
								<span class="w-100">
									{{ $row->name }}
								</span>
							</article>
							<span class="w-100 h-1-px m-top-10 bg-grey"></span>
							<div class="w-100 m-top-10 text text-2">
								<p>
									{!! resume(strip_tags($row->description), 150) !!}
								</p>
							</div>
						</div>
					</a>
				</div>
@if($i == 3 || $i2 == $total)
			</div>
		</section>
		<aside class="flex-1 bg-grey w-1024-100" style="background: url('{{ asset('uploads/page/case.jpg') }}') no-repeat;background-position: top left;background-size: auto 100%;">
			<img class="w-100 display-none display-1024-block" src="{{ asset('uploads/page/case.jpg') }}" title="" alt="" />
		</aside>
	</div>
</article>
<?php
	$i = 0;
?>
@endif
@endforeach
</div>
@endif