@inject("objCategory","\AgenciaS3\Http\Controllers\Site\CategoryController")
<header class="w-100">
	<div class="w-100 p-top-10 p-bottom-10 secondary-bg fixed z-index-8 top-0 left-0">
		<div class="center">
			<div class="w-90 m-left-5 w-1024-100">
				<div class="f-left c-left action-menu display-none display-1024-block">
					<a href="javascript:void(0);" onclick="menu($('.main-menu'));" title="Menu">
						<span class="smooth"></span>
						<span class="smooth"></span>
						<span class="smooth"></span>
					</a>
				</div>
				<nav class="f-left c-left m-top-3 main-menu display-1024-none">
					<ul>
						<li class="display-none display-1024-flex">
							<a class="active" href="javascript:void(0);" onclick="menu($('.main-menu'));" title="FECHAR">
								FECHAR
							</a>
						</li>
						<li>
							<a @if($ativo == 'home') class="active" @endif href="{{ route('home') }}" title="HOME">
								HOME
							</a>
						</li>
						<li>
							<a @if($ativo == 'quem-somos') class="active" @endif href="{{ route('about') }}" title="QUEM SOMOS">
								QUEM SOMOS
							</a>
						</li>
						<li>
							<a @if($ativo == 'catalogo') class="active" @endif href="{{ route('catalog') }}" title="CATÁLOGOS">
								CATÁLOGOS
							</a>
						</li>
						<li>
							<a @if($ativo == 'cases' || $ativo == 'cases/tag/{tag}' || $ativo == 'cases/{seo_link}') class="active" @endif href="{{ route('blog') }}" title="CASES">
								CASES
							</a>
						</li>
						<li>
							<a @if($ativo == 'contato') class="active" @endif href="{{ route('contact') }}" title="CONTATO">
								CONTATO
							</a>
						</li>
					</ul>
				</nav>
				@if(isPost(session()->get('configuration')[3]['description']) || isPost(session()->get('configuration')[4]['description']))
				<div class="f-right c-left">
					@if(isPost(session()->get('configuration')[3]['description']))
					<a class="t-decoration" href="mailto:{{ session()->get('configuration')[3]['description'] }}" title="{{ session()->get('configuration')[3]['description'] }}">
						<span class="m-top-2 color-white f-size-14">{{ session()->get('configuration')[3]['description'] }}</span>
					</a>
					@endif
					@if(isPost(session()->get('configuration')[4]['description']))
					<a href="{{ session()->get('configuration')[4]['description'] }}" target="_blank" title="Facebook">
						<img class="m-left-10-px" src="{{ asset('assets/site/images/icons/facebook.png') }}" title="Facebook" alt="Facebook" />
					</a>
					@endif
				</div>
				@endif
			</div>
		</div>
	</div>
	<div class="w-100 p-top-15 p-bottom-15 m-top-40 p-top-1024-10 p-bottom-1024-10">
		<div class="center">
			<article class="w-90 m-left-5 d_flex w-1024-100">
				<figure class="flex-1 c-left">
					<a class="max-w-100" href="{{ route('home') }}" title="{{ config('app.name') }}">
						<img class="max-w-100" src="{{ asset('assets/site/images/icons/main-logo.png') }}" title="{{ config('app.name') }}" alt="{{ config('app.name') }}" />
					</a>
				</figure>
				<section class="flex-1 justify-end d_flex m-right-1250-0 m-left-1250-20-px column-600">
					<form class="flex-1 d_flex form-search display-1024-none" id="fSearch" method="get" action="{{ route('products') }}">
						<fieldset class="flex-1">
							<input class="w-100" type="text" id="txt-search" name="search" value="@if(isset($search)){{ $search }}@endif" placeholder="DIGITE O BRINDE QUE VOCÊ DESEJA *" required />
						</fieldset>
						<fieldset class="flex-1">
							<input class="w-100 pointer smooth" type="submit" id="send-search" name="send-search" value="" />
						</fieldset>
					</form>
					<a class="flex-1 c-left d_flex justify-center main-bg-1 bt-cart smooth w-600-100" href="{{ route('budget') }}" title="Carrinho de Orçamento">
						<figure>
							<img src="{{ asset('assets/site/images/icons/cart.png') }}" title="Carrinho de Orçamento" alt="Carrinho de Orçamento" />
						</figure>
						<span class="cartTop">
							@include('site.layouts.cart-header')
						</span>
					</a>
					<!--
					<a class="flex-1 c-left d_flex justify-center secondary-bg-1 bt-login smooth w-600-100" href="" title="Cadastro/Login">
						<span class="font-2 smooth">
							Cadastro/Login
						</span>
						<figure>
							<img src="{{ asset('assets/site/images/icons/down.png') }}" title="Cadastro/Login" alt="Cadastro/Login" />
						</figure>
					</a>
					-->
				</section>
				@if(isPost(session()->get('configuration')[5]['description']))
				<aside class="flex-1 display-1250-none">
					<p class="w-100 t-align-r font-2">
						{!! nl2br(session()->get('configuration')[5]['description']) !!}
					</p>
				</aside>
				@endif
			</article>
		</div>
	</div>
	<div class="w-100 p-top-10 p-bottom-10 box-category p-top-1024-0 p-bottom-1024-0">
		<div class="center">
			<div class="w-90 m-left-5 d_flex wrap w-1024-100">
				<?php $categories = $objCategory->getActiveNotFeatureds(7); ?>
				@if(!$categories->isEmpty())
				<a class="w-100 p-top-15 p-bottom-15 display-none t-align-c color-white f-size-16 font-2 open-category smooth display-1024-block" href="javascript:void(0);" onclick="menu($('.menu-category'));" title="Menu">
					Categorias
				</a>
				<nav class="flex-1 d_flex self-center menu-category w-1024-100 display-1024-none menu-category-mobile">
					<ul class="w-100 c-left relative">
						<li class="open-category">
							<a class="d_flex justify-space" href="javascript:void(0);" title="CATEGORIAS">
								<span></span>
								<p>
									CATEGORIAS
								</p>
								<figure>
									<img src="{{ asset('assets/site/images/icons/down-white.png') }}" title="CATEGORIAS" alt="CATEGORIAS" />
								</figure>
							</a>
						</li>
						<ul class="w-100 absolute top-100 left-0">
							<li class="display-none display-1024-block">
								<a href="javascript:void(0);" onclick="menu($('.menu-category'));" title="FECHAR">
									FECHAR
								</a>
							</li>
							@foreach($categories as $row)
							<li>
								<a href="{{ route('category.show', $row->seo_link) }}" title="{{ $row->name }}">
									{{ $row->name }}
								</a>
							</li>
							@endforeach
						</ul>
					</ul>
				</nav>
				@endif
				<?php $featureds = $objCategory->getActiveFeatureds(7); ?>
				@if(!$featureds->isEmpty())
				<nav class="flex-1 d_flex menu-category-2 display-1024-none w-800-100">
					<ul class="flex-1 d_flex wrap justify-space column-600">
						@foreach($featureds as $row)
							<?php
							$cover = asset('uploads/category/category.png');
							if (isPost($row->icon)) {
								$cover = asset('uploads/category/' . $row->icon);
							}
							?>
						<li class="d_flex">
							<a class="d_flex" href="{{ route('category.show', $row->seo_link) }}" title="{{ $row->name }}">
								<figure>
									<img src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
								</figure>
								<span>
									{{ $row->name }}
								</span>
							</a>
						</li>
						@endforeach
					</ul>
				</nav>
				@endif
			</div>
		</div>
	</div>
</header>